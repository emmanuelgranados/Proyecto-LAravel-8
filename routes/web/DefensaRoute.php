<?php

use Doctrine\DBAL\Schema\Index;

Route::group(['namespace' => 'Defensa', 'middleware' => 'auth'], function () {
// Route::group(['namespace' => 'Defensa'], function () {

    // Route::get('clientes_defensa', 'DefensaController@index')->name('clientes_defensa');
    // Route::post('lista_cliente', 'ClientesController@nuevoCliente');
    // Route::post('nuevo_cliente', 'ClientesController@nuevoCliente');
    // Route::post('editar_cliente', 'ClientesController@editarCliente');
    // Route::post('eliminar_cliente', 'ClientesController@eliminarCliente');


    Route::get('prospectos_contabilidad', 'ProspectosDefensaController@index')->name('prospectos_contabilidad');
    Route::get('prospectos_defensa', 'ProspectosDefensaController@index')->name('prospectos_defensa');

});
