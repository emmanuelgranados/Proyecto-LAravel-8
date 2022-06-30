<?php

use App\Models\Clientes;
use App\Models\CodigosPostales;
use App\Models\Comentarios;
use App\Models\Municipios;
use App\Models\Tareas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/obtener_usuarios', function (Request $request) {

    // $usuario = Auth::user()->id;


    $usuarios = User::with('roles')->get();

    return $usuarios;
});

Route::get('/obtener_clientes', function () {

    $cliente = Clientes::orderBy('nombre_razon_social')
    ->where('activo',1)
    ->where('eliminado',0)
    ->orderBy('nombre_razon_social')
    ->get();

    return $cliente;

});

Route::get('/datos_tarea', function (Request $request) {

    $tarea = Tareas::with('clientes','prioridades','estatus')
    ->where('id',$request->id)
    ->first();

    return $tarea;

});

Route::get('/obtener_lista_tareas_activas', function (Request $request ) {

    $tareasActivas = Tareas::orderBy('id','DESC')
    ->where('fk_id_users_asignado',$request->fk_id_users)
    ->where('fk_id_estatus','<>',3)
    ->where('eliminado',0)
    ->get();

    return $tareasActivas;

});

Route::get('/obtener_lista_tareas', function (Request $request ) {

    $tareasActivas = Tareas::with('clientes','prioridades','usuariosAlta','usuariosAsignado','estatus')
    ->orderBy('id','DESC')
    ->where('fk_id_users_asignado',$request->fk_id_users)
    ->where('eliminado',0)
    ->get();

    return $tareasActivas;

});

Route::get('/obtener_lista_comentarios', function (Request $request) {

    $tareasActivas = Comentarios::with('usuarios.roles')->orderBy('id','DESC')
    ->where('fk_id_tareas', $request->fk_id_tareas )
    ->get();

    return $tareasActivas;

});


