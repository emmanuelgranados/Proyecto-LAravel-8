<?php

use Doctrine\DBAL\Schema\Index;

Route::group(['namespace' => 'Clientes', 'middleware' => 'auth'], function () {
// Route::group(['namespace' => 'Clientes'], function () {

    Route::get('clientes_contabilidad', 'ClientesContabilidadController@index')->name('clientes_contabilidad');
    Route::post('lista_cliente', 'ClientesController@nuevoCliente');
    Route::post('nuevo_cliente', 'ClientesContabilidadController@nuevoCliente');
    Route::post('editar_cliente', 'ClientesController@editarCliente');
    Route::post('eliminar_cliente', 'ClientesController@eliminarCliente');


    Route::get('clientes_defensa', 'ClientesDefensaController@index')->name('clientes_defensa');
    Route::post('nuevo_cliente_defensa', 'ClientesDefensaController@nuevoClienteDefensa');
    Route::post('editar_cliente_defensa', 'ClientesDefensaController@editarClienteDefensa');
    // Route::get('prospectos_contabilidad', 'ProspectosDefensaController@index')->name('prospectos_contabilidad');
    // Route::get('clientes', 'ClientesController@index')->name('clientes');
    // Route::get('clientes', 'ClientesController@index')->name('clientes');
    // Route::get('clientes', 'ClientesController@index')->name('clientes');

});
