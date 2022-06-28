<?php

use Doctrine\DBAL\Schema\Index;

// Route::group(['namespace' => 'Administracion', 'middleware' => 'auth'], function () {
Route::group(['namespace' => 'Bitacora'], function () {

    Route::get('bitacora', 'BitacoraController@index')->name('bitacora');
    // Route::post('lista_cliente', 'ClientesController@nuevoCliente');
    // Route::post('nuevo_cliente', 'ClientesController@nuevoCliente');
    // Route::post('editar_cliente', 'ClientesController@editarCliente');
    // Route::post('eliminar_cliente', 'ClientesController@eliminarCliente');

});
