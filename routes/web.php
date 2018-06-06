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
Route::view('/cadastroAnalista', 'cadastroAnalista');
Route::post('gravarAnalista', 'DAO\AnalistaController@store');
Route::view('/listaAnalista', 'listaAnalista');
Route::get('/listagemAnalistas','DAO\AnalistaController@listagemAnalistas');

#Fabricante
Route::view('/cadastroFabricante', 'cadastroFabricante');
Route::post('gravarFabricante', 'DAO\FabricanteController@store');

#Tipo
Route::view('/cadastroTipo','cadastroFabricante');
Route::post('gravarTipo', 'DAO\TipoController@store');

