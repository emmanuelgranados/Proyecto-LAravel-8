<?php

use Doctrine\DBAL\Schema\Index;

Route::group(['namespace' => 'Clientes', 'middleware' => 'auth'], function () {

    Route::get('clientes_contabilidad', 'ClientesContabilidadController@index')->name('clientes_contabilidad');
    Route::post('nuevo_cliente_contabilidad', 'ClientesContabilidadController@nuevoClienteContabilidad');
    Route::post('editar_cliente_contabilidad', 'ClientesContabilidadController@editarClienteContabilidad');
    Route::post('eliminar_cliente_contabilidad', 'ClientesContabilidadController@eliminarClienteContabilidad');


    Route::get('clientes_defensa', 'ClientesDefensaController@index')->name('clientes_defensa');
    Route::post('nuevo_cliente_defensa', 'ClientesDefensaController@nuevoClienteDefensa');
    Route::post('editar_cliente_defensa', 'ClientesDefensaController@editarClienteDefensa');
    Route::post('eliminar_cliente_defensa', 'ClientesDefensaController@eliminarClienteDefensa');


});
