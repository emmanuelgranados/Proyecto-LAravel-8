<?php

use Doctrine\DBAL\Schema\Index;

Route::group(['namespace' => 'Prospectos', 'middleware' => 'auth'], function () {

    Route::get('prospectos_contabilidad', 'ProspectosContabilidadController@index')->name('prospectos_contabilidad');
    Route::post('nuevo_prospecto_contabilidad', 'ProspectosContabilidadController@nuevoProspectoContabilidad');
    Route::post('editar_prospecto_contabilidad', 'ProspectosContabilidadController@editarProspectoContabilidad');
    Route::post('eliminar_prospecto_contabilidad', 'ProspectosContabilidadController@eliminarPropectoContabilidad');
    Route::post('convertir_prospecto_contabilidad', 'ProspectosContabilidadController@convertirPropectoContabilidad');


    Route::get('prospectos_defensa', 'ProspectosDefensaController@index')->name('prospectos_defensa');
    Route::post('nuevo_prospecto_defensa', 'ProspectosDefensaController@nuevoProspectoDefensa');
    Route::post('editar_prospecto_defensa', 'ProspectosDefensaController@editarProspectoDefensa');
    Route::post('eliminar_prospecto_defensa', 'ProspectosDefensaController@eliminarProspectoDefensa');
    Route::post('convertir_prospecto_defensa', 'ProspectosDefensaController@convertirProspectoDefensa');


});
