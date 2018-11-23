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
Route::get('/', 'LoginController@showLogin');
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
Route::view('/cadastroAnalista', 'forms\cadastroAnalista')->middleware('checkAdmin');
Route::post('gravarAnalista', 'DAO\AnalistaController@store')->middleware('checkAdmin');
Route::get('/listagemAnalistas','DAO\AnalistaController@listagemAnalistas')->middleware('checkAdmin');

#Fabricante
Route::view('/cadastroFabricante', 'forms\cadastroFabricante')->middleware('auth');
Route::post('gravarFabricante', 'DAO\FabricanteController@store')->middleware('auth');

#Tipo
Route::view('/cadastroTipo','forms\cadastroTipo')->middleware('auth');
Route::post('gravarTipo', 'DAO\TipoController@store')->middleware('auth');

#Modelo
Route::get('cadastrarModelo','DAO\ModeloController@cadastrarModelo')->middleware('auth');
Route::post('gravarModelo', 'DAO\ModeloController@store')->middleware('auth');

#Computador   
Route::get('cadastrarComputador','DAO\ComputadorController@cadastrarComp')->middleware('auth');
Route::post('gravarComputador','DAO\ComputadorController@store')->middleware('auth');
Route::get('cadastrarComputador/ajax/tipo/{id}',array('as' => 'ListaFabricante.ajax', 'uses'=>'DAO\ComputadorController@listarFabricanteAjax'))->middleware('auth');
Route::get('cadastrarComputador/ajax/tipo/{idTipo}/fabricante/{idFabricante}',array('as' => 'ListaModelo.ajax', 'uses'=>'DAO\ComputadorController@listarModeloAjax'))->middleware('auth');
Route::get('listagemComputadores', 'DAO\ComputadorController@listagemComputadores')->middleware('auth');
Route::get('listagemComputadores/ajax/{search}', 'DAO\ComputadorController@searchAjax')->middleware('auth');

#Ticket
Route::view('/cadastroTicket', 'forms\cadastroTicket')->middleware('auth');
Route::post('gravarTicket','DAO\TicketController@store')->middleware('auth');
Route::get('listagemTickets', 'DAO\TicketController@listagemTickets')->middleware('auth');
Route::get('editarTicket/{idTicket}', 'DAO\TicketController@updateTicket');
