<?php

namespace App\Http\Controllers;

use App\Models\Cwiczenia;
use Illuminate\Http\Request;

class CwiczeniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rodzajecwiczen = Cwiczenia::latest()->paginate(5);

        return view('cwiczenia.index',compact('rodzajecwiczen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cwiczenia.create');
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
            'Zdjecie' => 'required',
        ]);

        Cwiczenia::create($request->all());

        return redirect()->route('cwiczenia.index')
            ->with('Sukces','Ćwiczenie zostało dodane.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $rodzajecwiczen = Cwiczenia::where('idRodzajeCwiczen',$id)->get()->first();
        return view('cwiczenia.show',compact('rodzajecwiczen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $rodzajecwiczen = Cwiczenia::where('idRodzajeCwiczen',$id)->get()->first();
        return view('cwiczenia.edit',compact('rodzajecwiczen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'Nazwa' => 'required',
            'Opis' => 'required',
            'Zdjecie' => 'required',
        ]);
        $rodzajecwiczen = Cwiczenia::where('idRodzajeCwiczen',$id)->get()->first();
        $rodzajecwiczen->update($request->all());

        return redirect()->route('cwiczenia.index')
            ->with('Sukces','Ćwiczenie zostało zaktualizowane');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $rodzajecwiczen = Cwiczenia::where('idRodzajeCwiczen',$id)->get()->first();
        $rodzajecwiczen->delete();

        return redirect()->route('cwiczenia.index')
            ->with('Sukces','Ćwiczenie zostało usunięte');
    }

    public function szukaj(Request $request){
        $szukaj = $request->get('szukaj');
        $rodzajecwiczen = Cwiczenia::where('Nazwa','like','%'.$szukaj.'%')->get();
        return view('cwiczenia.index',['rodzajecwiczen'=>$rodzajecwiczen]);

    }
}
