<?php


Route::group(['namespace' => 'Sistemas'], function () {

    Route::get('inventario', 'InventarioController@index')->name('inventario');
    Route::post('nuevo_equipo', 'InventarioController@nuevo_equipo')->name('nuevo_equipo');
    Route::get('/salida_equipo/{id}', 'InventarioController@salida_equipo');

    Route::get('maquinasProductos', 'MaquinasProductosContoller@index')->name('maquinasProductos');
    Route::get('lista_productos', 'MaquinasProductosContoller@lista_productos')->name('lista_productos');





});
