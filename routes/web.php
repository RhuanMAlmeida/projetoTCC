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
    return redirect()->route('atividades');
});

Route::group(['prefix' => 'atividades'], function () {
    Route::get('/{id_cliente?}', 'paginaAtividade@paginaAtividade')->name('atividades');
});

Route::group(['prefix' => 'clientes'], function () {
    Route::get('/', 'paginaCliente@paginaCliente');
});
