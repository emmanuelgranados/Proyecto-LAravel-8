<?php

use App\Models\Clientes;
use Illuminate\Http\Request;

Route::get('/lista_clientes', function (Request $request) {

    $clientes = Clientes::all();

    return $clientes;
});
