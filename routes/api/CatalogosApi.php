<?php

use App\Models\Obligaciones;
use Illuminate\Http\Request;
use App\Models\TareasEstandar;
use App\Models\TareasPredefinidas;
use App\Models\SubTareasPredefinidas;

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


Route::get('/lista_tareas_estandar', function (Request $request) {

    return  TareasEstandar::select('id','tarea_estandar','activo')
    ->where('eliminado',0)
    ->get();
});

Route::post('/detalle_tareas_estandar', function (Request $request) {

    return  TareasEstandar::select('id','tarea_estandar','activo')
    ->where('eliminado',0)
    ->where('id', $request->id)
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



Route::get('/lista_sub_tareas_predefinidas', function (Request $request) {

    return SubTareasPredefinidas::select('sub_tareas_predefinidas.id',
                            'sub_tareas_predefinidas.sub_tarea_predefinida',
                            'sub_tareas_predefinidas.fk_id_tareas_predefinidas as idtareapredeterminada',
                            'tareas_predefinidas.tarea_predefinida',
                            'categorias_tareas.categoria_tarea',
                            'sub_tareas_predefinidas.activo',
                            'sub_tareas_predefinidas.eliminado',)
    ->leftjoin('tareas_predefinidas','tareas_predefinidas.id','=', 'sub_tareas_predefinidas.fk_id_tareas_predefinidas')
    ->leftjoin('categorias_tareas','categorias_tareas.id','=', 'tareas_predefinidas.fk_id_categorias_tareas')
    ->where('sub_tareas_predefinidas.eliminado',0)
    ->get();
});


Route::post('/detalle_sub_tareas_predefinidas', function (Request $request) {

return SubTareasPredefinidas::select('sub_tareas_predefinidas.id',
                            'sub_tareas_predefinidas.sub_tarea_predefinida',
                            'sub_tareas_predefinidas.fk_id_tareas_predefinidas as idtareapredeterminada',
                            'tareas_predefinidas.tarea_predefinida',
                            'categorias_tareas.categoria_tarea',
                            'sub_tareas_predefinidas.activo',
                            'sub_tareas_predefinidas.eliminado',)
    ->leftjoin('tareas_predefinidas','tareas_predefinidas.id','=', 'sub_tareas_predefinidas.fk_id_tareas_predefinidas')
    ->leftjoin('categorias_tareas','categorias_tareas.id','=', 'tareas_predefinidas.fk_id_categorias_tareas')
    ->where('sub_tareas_predefinidas.eliminado',0)
    ->where('sub_tareas_predefinidas.id', $request->id)
    ->get();

});
