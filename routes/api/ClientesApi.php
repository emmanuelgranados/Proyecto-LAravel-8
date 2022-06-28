<?php

use App\Models\Clientes;
use App\Models\CodigosPostales;
use App\Models\Municipios;
use Illuminate\Http\Request;

Route::get('/lista_clientes', function (Request $request) {

    $clientes = Clientes::where('activo',1)->where('eliminado',0)->get();

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

