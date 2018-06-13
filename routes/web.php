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

 /* Route::get('/', function () {
    return view('welcome');
}); */

#Framework Default Routes
Auth::routes();

#Login
Route::get('/', 'Logincontroller@showLogin');
Route::post('ValidaLogin', 'LoginController@validaLogin');
Route::get('/home', 'HomeController@index')->name('home');

#DAO Controllers
Route::resource('analista','DAO\AnalistaController');
Route::resource('computador','DAO\ComputadorController');
Route::resource('fabricante','DAO\FabricanteController');
Route::resource('modelo','DAO\ModeloController');
Route::resource('movimentacao','DAO\MovimentacaoController');
Route::resource('software','DAO\SoftwareController');
Route::resource('tipo','DAO\TipoController');

#Analista
Route::view('/cadastroAnalista', 'forms\cadastroAnalista')->middleware('auth');
Route::post('gravarAnalista', 'DAO\AnalistaController@store')->middleware('auth');
Route::get('/listagemAnalistas','DAO\AnalistaController@listagemAnalistas')->middleware('auth');

#Fabricante
Route::view('/cadastroFabricante', 'forms\cadastroFabricante')->middleware('auth');
Route::post('gravarFabricante', 'DAO\FabricanteController@store')->middleware('auth');

#Tipo
Route::view('/cadastroTipo','forms\cadastroTipo')->middleware('auth');
Route::post('gravarTipo', 'DAO\TipoController@store')->middleware('auth');

#Modelo
Route::get('cadastrarModelo','DAO\ModeloController@cadastrarModelo')->middleware('auth');
Route::post('gravarModelo', 'DAO\ModeloController@store')->middleware('auth');

