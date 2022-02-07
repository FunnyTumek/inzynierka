<?php

namespace App\Http\Controllers;

use App\Models\Cwiczenia;
use App\Models\User;
use Illuminate\Http\Request;

class SitesController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        return view('sites.index');
    }

    public function onas()
    {
        return view('sites.onas');
    }

    public function kontakt()
    {
        return view('sites.kontakt');
    }

    public function galeria()
    {
        return view('sites.galeria');
    }

    public function zmienuprawnienia(){
        $uzytkonwicy = User::with('roles')->get();
        return view('sites.zmienuprawnienia', compact('uzytkonwicy'));
    }

    public function dodajrole(Request $request){
        $user = User::find($request->input('iduser'));
        $user->roles()->attach((int)$request->input('idrola'));

        return redirect()->action([SitesController::class, 'zmienuprawnienia']);

    }

    public function  usunrole(Request $request){
        $user = User::find($request->input('iduser'));
        $user->roles()->detach((int)$request->input('idrola'));

        return redirect()->action([SitesController::class, 'zmienuprawnienia']);
    }
}
