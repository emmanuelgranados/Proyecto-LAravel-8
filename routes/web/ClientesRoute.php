<?php

use Doctrine\DBAL\Schema\Index;

// Route::group(['namespace' => 'Administracion', 'middleware' => 'auth'], function () {
Route::group(['namespace' => 'Clientes'], function () {

    Route::get('clientes', 'ClientesController@index')->name('clientes');
    Route::post('lista_cliente', 'ClientesController@nuevoCliente');
    Route::post('nuevo_cliente', 'ClientesController@nuevoCliente');
    Route::post('editar_cliente', 'ClientesController@editarCliente');
    // Route::get('clientes', 'ClientesController@index')->name('clientes');
    // Route::get('clientes', 'ClientesController@index')->name('clientes');
    // Route::get('clientes', 'ClientesController@index')->name('clientes');

});
