<?php

use Doctrine\DBAL\Schema\Index;

Route::group(['namespace' => 'Catalogos', 'middleware' => 'auth'], function () {

    // CATALOGO OBLIGACIONES
    Route::get('obligaciones', 'ObligacionesController@index')->name('obligaciones');
    Route::post('new_obligaciones', 'ObligacionesController@new_obligaciones')->name('new_obligaciones');
    Route::post('edit_obligaciones', 'ObligacionesController@edit_obligaciones')->name('edit_obligaciones');
    Route::post('delete_obligaciones', 'ObligacionesController@delete_obligaciones')->name('delete_obligaciones');
    Route::post('bloquear_obligaciones', 'ObligacionesController@bloquear_obligaciones')->name('bloquear_obligaciones');
    Route::post('desbloquear_obligaciones', 'ObligacionesController@desbloquear_obligaciones')->name('desbloquear_obligaciones');



    // CATALOGO TAREAS
    Route::get('tareas_predefinidas', 'TareasPredefinidasController@index')->name('tareas_predefinidas');
    Route::post('new_tareas_predefinidas', 'TareasPredefinidasController@new_tareas_predefinidas')->name('new_tareas_predefinidas');
    Route::post('edit_tareas_predefinidas', 'TareasPredefinidasController@edit_tareas_predefinidas')->name('edit_tareas_predefinidas');
    Route::post('delete_tareas_predefinidas', 'TareasPredefinidasController@delete_tareas_predefinidas')->name('delete_tareas_predefinidas');
    Route::post('bloquear_tareas_predefinidas', 'TareasPredefinidasController@bloquear_tareas_predefinidas')->name('bloquear_tareas_predefinidas');
    Route::post('desbloquear_tareas_predefinidas', 'TareasPredefinidasController@desbloquear_tareas_predefinidas')->name('desbloquear_tareas_predefinidas');


      // CATALOGO SUB TAREAS
      Route::get('sub_tareas_predefinidas', 'SubTareasPredefinidasController@index')->name('sub_tareas_predefinidas');
      Route::post('new_subtareas_predefinidas', 'SubTareasPredefinidasController@new_subtareas_predefinidas')->name('new_subtareas_predefinidas');
      Route::post('edit_subtareas_predefinidas', 'SubTareasPredefinidasController@edit_subtareas_predefinidas')->name('edit_subtareas_predefinidas');
      Route::post('delete_subtareas_predefinidas', 'SubTareasPredefinidasController@delete_subtareas_predefinidas')->name('delete_subtareas_predefinidas');
      Route::post('bloquear_subtareas_predefinidas', 'SubTareasPredefinidasController@bloquear_subtareas_predefinidas')->name('bloquear_subtareas_predefinidas');
      Route::post('desbloquear_subtareas_predefinidas', 'SubTareasPredefinidasController@desbloquear_subtareas_predefinidas')->name('desbloquear_subtareas_predefinidas');
});
