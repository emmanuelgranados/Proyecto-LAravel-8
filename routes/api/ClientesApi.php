<?php

use App\Models\Clientes;
use Illuminate\Http\Request;

Route::get('/lista_clientes', function (Request $request) {

    $clientes = Clientes::all();

    return $clientes;
});

Route::get('/datos_cliente', function (Request $request) {

    $cliente = Clientes::with('direcciones.pais','direcciones.estado','direcciones.municipio','direcciones.telefonos')
    ->where('id',$request->id)
    ->first();
    return $cliente;

});

