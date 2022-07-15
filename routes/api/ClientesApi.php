<?php

use App\Models\Clientes;
use App\Models\CodigosPostales;
use App\Models\Municipios;
use App\Models\Obligaciones;
use App\Models\TareasPredefinidas;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/lista_clientes', function (Request $request) {

    $clientes = Clientes::with('usuario')
        ->where('prospecto',0)
        ->where('tipo_servicio',1)
        ->where('activo',1)
        ->where('eliminado',0)
        ->get();

    return $clientes;
});

Route::get('/obtener_usuarios', function (Request $request) {

    $usuarios = User::where('activo',1)
        ->where('eliminado',0)
        ->get();

    return $usuarios;
});

Route::get('/lista_prospectos', function (Request $request) {

    $clientes = Clientes::where('prospecto',1)->where('activo',1)->where('eliminado',0)->get();

    return $clientes;
});

Route::get('/datos_cliente', function (Request $request) {

    $cliente = Clientes::with('direcciones.pais','direcciones.estado','direcciones.municipio','direcciones.telefonos')
    ->where('id',$request->id)
    ->first();

    return $cliente;

});

Route::get('/obtener_municipios', function (Request $request) {

    $municipios = Municipios::where('fk_id_estados',$request->fk_id_estados)
    ->orderBy('municipio')
    ->get();

    return $municipios;

});

Route::get('/obtener_codigos_postales', function (Request $request) {

    $cp = CodigosPostales::select('cp')
    ->where('fk_id_estados',$request->fk_id_estados)
    ->orderBy('cp')
    ->groupBy('cp')
    ->get();

    return $cp;

});


Route::get('/obtener_obligaciones', function (Request $request) {

    $obligaciones = Obligaciones::where('activo',1)
    ->where('eliminado',0)
    ->orderBy('obligacion')
    ->get();

    return $obligaciones;

});

Route::get('/obtener_tareas_predefinidas', function (Request $request) {

    $obligaciones = TareasPredefinidas::with('subTareasPredefinidas')
    ->where('fk_id_categorias_tareas',$request->fk_id_categorias_tareas)
    ->where('activo',1)
    ->where('eliminado',0)
    ->orderBy('tarea_predefinida')
    ->get();

    return $obligaciones;

});
