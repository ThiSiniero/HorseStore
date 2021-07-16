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

Route::get('/', function () {
    return view('welcome');
});

// Primeira vez no Laravel
Route::get('/calculadora', 'Calculadora@index');
Route::post('/calculadora', 'Calculadora@store')->name('registrar_notas');

Route::get('/notas', function () {
    return view('notas');
});

// Loja HorseStore
Route::get('/HorseStore', 'LojaController@home');
Route::get('/HorseStore-comprador', 'LojaController@comprador');
Route::get('/HorseStore-vendedor', 'LojaController@vendedor');
Route::post('/HorseStore-vendedor', 'LojaController@store')->name('registrar_cavalo');

Route::get('/HorseStore-comprador/show/{id}', 'LojaController@show');

Route::get('/HorseStore-comprador/editar/{id}', 'LojaController@edit');
Route::post('/HorseStore-comprador/editar/{id}', 'LojaController@update')->name('alterar_cavalo');

Route::get('/HorseStore-comprador/excluir/{id}', 'LojaController@delete');
Route::post('/HorseStore-comprador/excluir/{id}', 'LojaController@destroy')->name('excluir_cavalo');