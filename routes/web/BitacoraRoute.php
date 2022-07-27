<?php

use Doctrine\DBAL\Schema\Index;

Route::group(['namespace' => 'Bitacora', 'middleware' => 'auth'], function () {
// Route::group(['namespace' => 'Bitacora'], function () {

    Route::get('bitacora', 'BitacoraController@index')->name('bitacora');
    Route::post('nueva_tarea', 'BitacoraController@nuevaTarea');
    Route::post('nuevo_comentarios', 'BitacoraController@nuevoComentarios');
    Route::post('editar_tarea', 'BitacoraController@editarTarea');
    Route::post('eliminar_tarea', 'BitacoraController@eliminarTarea');
    Route::post('solicitar_terminar_tarea', 'BitacoraController@solicitarTerminarTarea');
    Route::post('terminar_tarea', 'BitacoraController@terminarTarea');
    Route::post('rechazar_tarea', 'BitacoraController@rechazarTarea');

});
