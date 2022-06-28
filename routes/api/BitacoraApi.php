<?php

use App\Models\Clientes;
use App\Models\CodigosPostales;
use App\Models\Municipios;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/obtener_usuarios', function (Request $request) {

    $usuarios = User::all();

    return $usuarios;
});

Route::get('/obtener_clientes', function () {

    $cliente = Clientes::orderBy('nombre_razon_social')->get();
    dd($cliente);
    return $cliente;

});


