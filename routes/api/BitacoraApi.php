<?php

use App\Models\Clientes;
use App\Models\ClientesSubTareasPredefinidas;
use App\Models\CodigosPostales;
use App\Models\Comentarios;
use App\Models\Grupos;
use App\Models\Municipios;
use App\Models\SubTareasPredefinidas;
use App\Models\Tareas;
use App\Models\User;
use App\Models\UsersGrupos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/obtener_usuarios_grupos', function (Request $request) {

    $usuario = Auth::user();

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

    return $usuarios;
});

Route::get('/obtener_clientes', function () {

    $cliente = Clientes::orderBy('nombre_cliente')
    ->where('activo',1)
    ->where('eliminado',0)
    ->orderBy('nombre_cliente')
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


Route::get('/obtener_lista_tareas_predefinidas', function (Request $request ) {

    $tareasPredefinidas = ClientesSubTareasPredefinidas::with('subTareasPredefinidas.tareasPredefinidas')
    ->where('fk_id_clientes',$request->fk_id_clientes)
    ->where('activo',1)
    ->get();

    return $tareasPredefinidas;

});


Route::get('/obtener_tarea_predefinida', function (Request $request ) {

    $tareasPredefinidas = SubTareasPredefinidas::where('id',$request->id)
    ->where('activo',1)
    ->first();

    return $tareasPredefinidas;

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




