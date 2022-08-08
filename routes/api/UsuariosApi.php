<?php

use App\Models\User;
use App\Models\Roles;
use App\Models\Grupos;
use App\Models\UsersGrupos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




        Route::get('/lista_usuarios', function (Request $request) {

               return User::select('users.id','users.name','users.email','roles.name as roles','users.activo','users.created_at','users.updated_at')
               ->leftjoin('roles','roles.id','=', 'users.fk_id_roles')
               ->where('users.eliminado',0)
               ->get();
        });


        Route::post('/detalle_usuario', function (Request $request) {

            return User::select('users.id','users.name','users.email','roles.id as idRol','roles.name as roles','users.activo','users.created_at','users.updated_at')
            ->leftjoin('roles','roles.id','=', 'users.fk_id_roles')
            ->where('users.eliminado',0)
            ->where('users.id', $request->id)
            ->get();
     });

        Route::get('/lista_roles', function (Request $request) {

            return Roles::select('roles.name')
            ->where('roles.activo',1)->where('roles.eliminado',0)
            ->get();

        });

        Route::get('/lista_grupos', function (Request $request) {

            return  Grupos::select('grupos.id','grupos.name','grupos.activo','grupos.created_at','grupos.updated_at')
                                    ->where('grupos.activo',1)->where('grupos.eliminado',0)->get();
     });


     Route::get('/lista_integrantes', function (Request $request) {

        return response()->json( User::select('users.id','users.name','roles.name as rol')
        ->selectRaw('(CASE
                      WHEN fk_id_grupos = 0 THEN "0"
                      WHEN fk_id_grupos != 0 THEN "1"
                      END) selected')
        ->leftjoin('roles','roles.id','=', 'users.fk_id_roles')
        ->leftjoin('grupos','grupos.id','=', 'users.fk_id_grupos')
        ->where('users.eliminado',0)
        ->where('users.id','<>',1)
        ->whereIn('users.fk_id_grupos',[0,$request->id])
        ->get());
 });


 Route::get('/lista_integrantes_detalles', function (Request $request) {

    return response()->json( User::select('users.id','users.name','roles.name as rol')
    ->leftjoin('roles','roles.id','=', 'users.fk_id_roles')
    ->leftjoin('grupos','grupos.id','=', 'users.fk_id_grupos')
    ->where('users.eliminado',0)
    ->whereIn('users.fk_id_grupos',[$request->id])
    ->get());
});



Route::get('/perfil_usuario', function (Request $request) {
    $id=Auth::user()->id;

    return User::select('users.id',
    'users.name',
    'users.email',
    'users.foto',
    'users.phone',
    'users.message',
    'estados.id as idEstado',
    'estados.estado',
    'users.created_at',
    'users.updated_at')
    ->leftjoin('estados','estados.id','=', 'users.fk_id_estado')
    ->where('users.eliminado',0)
    ->where('users.id',$id)
    ->get();

});
