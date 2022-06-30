<?php

use App\Models\User;
use App\Models\Grupos;
use App\Models\UsersGrupos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




        Route::get('/lista_usuarios', function (Request $request) {

               return User::select('users.id','users.name','users.email','roles.name as roles','users.activo','users.created_at','users.updated_at')
               ->leftjoin('roles','roles.id','=', 'users.id')
               ->where('users.activo',1)->where('users.eliminado',0)
               ->get();
        });

        Route::get('/lista_roles', function (Request $request) {

            return   DB::connection('mysql')
                   ->select(DB::raw("SELECT r.name , COUNT(u.fk_id_roles) as cantidad from users u
                   inner join roles r on u.fk_id_roles = r.id
                   GROUP BY u.name;"));
        });

        Route::get('/lista_grupos', function (Request $request) {

            return  Grupos::select('grupos.id','grupos.name','grupos.activo','grupos.created_at','grupos.updated_at')
                                    ->where('grupos.activo',1)->where('grupos.eliminado',0)->get();
     });


     Route::get('/lista_integrantes', function (Request $request) {

        return  UsersGrupos::select('users.name',)
                        ->leftjoin('users','users.id','=','users_grupos.fk_id_grupos')
                        ->leftjoin('role_user','role_user.user_id','=','users_grupos.fk_id_grupos')
                        ->where('users_grupos.fk_id_grupos',$request->id)
                        ->where('users_grupos.activo',1)->where('users_grupos.eliminado',0)->get();
 });



