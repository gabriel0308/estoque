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

Route::get('/', 'Logincontroller@showLogin');
Route::post('ValidaLogin', 'LoginController@validaLogin');
Route::resource('analista','DAO\AnalistaController');
Route::resource('computador','DAO\ComputadorController');
Route::resource('fabricante','DAO\FabricanteController');
Route::resource('modelo','DAO\ModeloController');
Route::resource('movimentacao','DAO\MovimentacaoController');
Route::resource('software','DAO\SoftwareController');
Route::resource('tipo','DAO\TipoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
