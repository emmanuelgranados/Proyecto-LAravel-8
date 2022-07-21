<?php


Route::group(['namespace' => 'Sistemas'], function () {

    Route::get('inventario', 'InventarioController@index')->name('inventario');
    Route::post('nuevo_equipo', 'InventarioController@nuevo_equipo')->name('nuevo_equipo');


});
