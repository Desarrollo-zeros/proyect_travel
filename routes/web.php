<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Travel@index');
Route::get('/bus/{id}', 'Travel@bus');

Route::post("/buscarBus","Travel@buscarBus");

Route::post('/login', 'Travel@login');
Route::post('/register', 'Travel@register');

Route::get('/panel', 'Travel@panel');
Route::get('/panel/{id}', 'Travel@panel');

Route::post("/registerConductor","Travel@registerConductor");
Route::post("/eliminarConductor","Travel@eliminarConductor");
Route::post("/getConductor","Travel@getConductor");


Route::post("/registerBus","Travel@registerBus");
Route::post("/eliminarBus","Travel@eliminarBus");
Route::post("/getBus","Travel@getBus");


Route::post("/registerBC","Travel@registerBC");
Route::post("/eliminarBC","Travel@eliminarBC");
Route::post("/getBC","Travel@getBC");


Route::post("/comprarTicket","Travel@comprarTicket");
Route::post("/historialTicket","Travel@historialTicket");

Route::post("/getUsuario","Travel@getUsuario");

Route::get('/cerrar', function (){
 session()->forget("users");
 return redirect("/");
});