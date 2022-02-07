<?php

use Illuminate\Support\Facades\Route;




Route::get('/',[\App\Http\Controllers\SitesController::class,'index']);
Route::get('/onas',[\App\Http\Controllers\SitesController::class,'onas']);
Route::get('/galeria',[\App\Http\Controllers\SitesController::class,'galeria']);
Route::get('/kontakt',[\App\Http\Controllers\SitesController::class,'kontakt']);

Route::get('/dodajcwiczenie',[\App\Http\Controllers\SitesController::class,'dodajcwiczenie']);
Route::get('/dodajdiete',[\App\Http\Controllers\SitesController::class,'dodajdiete']);
Route::get('/dodajplan',[\App\Http\Controllers\SitesController::class,'dodajplan']);
Route::get('/dodajposilek',[\App\Http\Controllers\SitesController::class,'dodajposilek']);
Route::get('/dodajskladnik',[\App\Http\Controllers\SitesController::class,'dodajskladnik']);
Route::get('/zmienuprawnienia',[\App\Http\Controllers\SitesController::class,'zmienuprawnienia']);
Route::post('/dodajrole',[\App\Http\Controllers\SitesController::class,'dodajrole']);
Route::post('/usunrole',[\App\Http\Controllers\SitesController::class,'usunrole']);

Route::resource('cwiczenia', \App\Http\Controllers\CwiczeniaController::class);
Route::resource('planytreningowe',\App\Http\Controllers\PlanytreningoweController::class);
Route::resource('produktyzywnosciowe', \App\Http\Controllers\produktyzywnoscioweController::class);

Route::get('/szukaj',[\App\Http\Controllers\CwiczeniaController::class,'szukaj']);
Route::get('/szukaj1',[\App\Http\Controllers\PlanytreningoweController::class,'szukaj1']);
Route::get('/szukaj2',[\App\Http\Controllers\produktyzywnoscioweController::class,'szukaj2']);

//
//Route::group([
//    'middleware' => 'roles',
//    'roles' => ['Trener']
//], function (){
//
//   Route::get('/create',[
//       'uses' =>'SitesController@create',
//        'as' => 'sites.create']);
//
//    Route::post('/store',[
//        'uses' =>'SitesController@store',
//        'as' => 'sites.store']);
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
