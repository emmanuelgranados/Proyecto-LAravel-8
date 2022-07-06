<?php

use App\Models\Clientes;
use App\Models\CodigosPostales;
use App\Models\Comentarios;
use App\Models\Grupos;
use App\Models\Municipios;
use App\Models\Tareas;
use App\Models\User;
use App\Models\UsersGrupos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/obtener_usuarios', function (Request $request) {


    $usuario = Auth::user();


    // dd($usuario->fk_id_roles);
    switch( $usuario->fk_id_roles  ){
        case 1:
        case 2:
            $usuarios = User::with('roles')->where('fk_id_grupos',$request->fk_id_grupos)->get();
            break;

        case 3:
            $usuarios = User::with('roles')->where('fk_id_grupos',$usuario->fk_id_grupos)->get();
            break;

        case 4:
            $usuarios = User::with('roles')->where('id',$usuario->id)->get();
            break;
    }


    if( $usuario->fk_id_roles == 3 ){



    }else if( $usuario->fk_id_roles == 1 ){

    }

    // $usuarios = User::with('roles')->get();
    // $usuarios = User::with('roles')
    //     ->when( $fk_id_roles == 2 ,function($q) {
    //         where
    //     })
    //     ->get();

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

    $tareas = Tareas::with('clientes','prioridades','usuariosAlta','usuariosAsignado','estatus')
    ->orderBy('id','DESC')
    ->where('fk_id_users_asignado',$request->fk_id_users)
    ->where('eliminado',0)
    ->get();

    return $tareas;

});

Route::get('/obtener_lista_comentarios', function (Request $request) {

    $tareasActivas = Comentarios::with('usuarios.roles')->orderBy('id','DESC')
    ->where('fk_id_tareas', $request->fk_id_tareas )
    ->get();

    return $tareasActivas;

});

Route::get('/obtener_grupos', function (Request $request) {

    $grupos = Grupos::get();

    return $grupos;

});


