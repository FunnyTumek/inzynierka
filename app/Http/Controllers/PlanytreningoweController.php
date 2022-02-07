<?php

namespace App\Http\Controllers;

use App\Models\Cwiczenia;
use App\Models\Planytreningowe;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanytreningoweController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planytreningowe = Planytreningowe::latest()->paginate(5);

        return view('planytreningowe.index',compact('planytreningowe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planytreningowe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nazwa' => 'required',
            'Opis' => 'required',
            'PrzewidywanyCzasWykonywania' => 'required',
            'LiczbaKaloriiDoSpalenia' => 'required',
        ]);

        $idTrener = Auth::id();

        Planytreningowe::create(array_merge(['idTrener'=>$idTrener],$request->all()));

        return redirect()->route('planytreningowe.index')
            ->with('Sukces','Plan treningowy został dodany.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planytreningowe  $planytreningowe
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //$planytreningowe = Planytreningowe::where('idPlanyTreningowe',$id)->get()->first();
        $planytreningowe = Planytreningowe::with('trenerzy')->get();
        return view('planytreningowe.show',compact('planytreningowe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planytreningowe  $planytreningowe
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $planytreningowe = Planytreningowe::where('idPlanyTreningowe',$id)->get()->first();
        return view('planytreningowe.edit',compact('planytreningowe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planytreningowe  $planytreningowe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'Nazwa' => 'required',
            'Opis' => 'required',
            'PrzewidywanyCzasWykonywania' => 'required',
            'LiczbaKaloriiDoSpalenia' => 'required',
        ]);
        $planytreningowe = Planytreningowe::where('idPlanyTreningowe',$id)->get()->first();
        $planytreningowe->update($request->all());

        return redirect()->route('planytreningowe.index')
            ->with('Sukces','Plan treningowy został zaktualizowany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planytreningowe  $planytreningowe
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $planytreningowe = Planytreningowe::where('idPlanyTreningowe',$id)->get()->first();
        $planytreningowe->delete();

        return redirect()->route('planytreningowe.index')
            ->with('Sukces','Plan treningowy został usunięty');
    }

    public function szukaj1(Request $request){
        $szukaj = $request->get('szukaj1');
        $planytreningowe = Planytreningowe::where('Nazwa','like','%'.$szukaj.'%')->get();
        return view('planytreningowe.index',['planytreningowe'=>$planytreningowe]);

    }
}
