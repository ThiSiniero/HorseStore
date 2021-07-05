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

Route::get('/calculadora', 'Calculadora@index');
Route::post('/calculadora', 'Calculadora@store')->name('registrar_notas');

Route::get('/loja-comprador', 'LojaController@comprador');
Route::get('/loja-vendedor', 'LojaController@vendedor');
Route::post('/loja-vendedor', 'LojaController@store')->name('registrar_cavalo');

Route::get('/notas', function () {
    return view('notas');
});