<?php

use Doctrine\DBAL\Schema\Index;

Route::group(['namespace' => 'Reportes', 'middleware' => 'auth'], function () {
// Route::group(['namespace' => 'Bitacora'], function () {

    Route::get('reportes', 'ReportesController@index')->name('reportes');
    // Route::post('nueva_tarea', 'BitacoraController@nuevaTarea');
    // Route::post('nuevo_comentarios', 'BitacoraController@nuevoComentarios');
    // Route::post('editar_tarea', 'BitacoraController@editarTarea');
    // Route::post('eliminar_tarea', 'BitacoraController@eliminarTarea');

});
