<?php

use App\Models\Obligaciones;
use Illuminate\Http\Request;
use App\Models\TareasPredefinidas;

Route::get('/lista_obligaciones', function (Request $request) {

    return Obligaciones::select('id','obligacion','activo')
    ->where('eliminado',0)
    ->get();
});


Route::post('/detalle_obligacion', function (Request $request) {

    return Obligaciones::select('id','obligacion')
    ->where('eliminado',0)
    ->where('id', $request->id)
    ->get();

});


Route::get('/lista_tareas_predefinidas', function (Request $request) {

    return TareasPredefinidas::select('tareas_predefinidas.id',
                            'tareas_predefinidas.tarea_predefinida',
                            'categorias_tareas.categoria_tarea as categoria',
                            'tareas_predefinidas.activo')
    ->leftjoin('categorias_tareas','categorias_tareas.id','=', 'tareas_predefinidas.fk_id_categorias_tareas')
    ->where('tareas_predefinidas.eliminado',0)
    ->get();
});


Route::post('/detalle_tareas_predefinidas', function (Request $request) {

    return TareasPredefinidas::select('tareas_predefinidas.id',
                            'tareas_predefinidas.tarea_predefinida',
                            'categorias_tareas.id as idcategoria',
                            'categorias_tareas.categoria_tarea',
                            'tareas_predefinidas.activo')
    ->leftjoin('categorias_tareas','categorias_tareas.id','=', 'tareas_predefinidas.fk_id_categorias_tareas')
    ->where('tareas_predefinidas.eliminado',0)
    ->where('tareas_predefinidas.id', $request->id)
    ->get();

});
