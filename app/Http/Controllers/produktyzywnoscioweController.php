<?php

namespace App\Http\Controllers;


use App\Models\produktyzywnosciowe;
use Illuminate\Http\Request;

class produktyzywnoscioweController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produktyzywnosciowe = produktyzywnosciowe::latest()->paginate(5);

        return view('produktyzywnosciowe.index',compact('produktyzywnosciowe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produktyzywnosciowe.create');
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
            'Kalorie' => 'required',
            'Bialko' => 'required',
            'Weglowodany' => 'required',
        ]);


        produktyzywnosciowe::create($request->all());

        return redirect()->route('produktyzywnosciowe.index')
            ->with('Sukces','Produkt żywnościowy został dodany.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produktyzywnosciowe  $produktyzywnosciowe
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $produktyzywnosciowe = produktyzywnosciowe::where('idProduktyZywnosciowe ',$id)->get()->first();
        return view('produktyzywnosciowe.show',compact('produktyzywnosciowe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produktyzywnosciowe  $produktyzywnosciowe
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $produktyzywnosciowe = produktyzywnosciowe::where('idProduktyZywnosciowe',$id)->get()->first();
        return view('produktyzywnosciowe.edit',compact('produktyzywnosciowe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produktyzywnosciowe  $produktyzywnosciowe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'Nazwa' => 'required',
            'Opis' => 'required',
            'Kalorie' => 'required',
            'Bialko' => 'required',
            'Weglowodany' => 'required',
        ]);

        $produktyzywnosciowe = produktyzywnosciowe::where('idProduktyZywnosciowe',$id)->get()->first();
        $produktyzywnosciowe->update($request->all());

        return redirect()->route('produktyzywnosciowe.index')
            ->with('Sukces','Produkt żywnościowy został dodany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produktyzywnosciowe  $produktyzywnosciowe
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $produktyzywnosciowe = produktyzywnosciowe::where('idProduktyZywnosciowe',$id)->get()->first();
        $produktyzywnosciowe->delete();

        return redirect()->route('produktyzywnosciowe.index')
            ->with('Sukces','Produkt żywnościowy został usunięty');
    }

    public function szukaj2(Request $request){
        $szukaj = $request->get('szukaj');
        $produktyzywnosciowe = produktyzywnosciowe::where('Nazwa','like','%'.$szukaj.'%')->get();
        return view('produktyzywnosciowe.index',['produktyzywnosciowe'=>$produktyzywnosciowe]);

    }
}
