<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




        Route::get('/lista_usuarios', function (Request $request) {

               return User::with('roles')->get();


            // DB::table('role_user')
            // ->selectRaw('users.id,users.foto, users.name as usuario ,users.email , users.activo , group_concat(distinct roles.name) as rol')
            // ->join('roles', 'roles.id', '=', 'role_id')
            // ->join('users', 'users.id', '=', 'user_id')
            // ->where('users.activo',1)
            // ->where('users.eliminado',0)
            // ->groupBy('user.id')
            // ->get();

        //  return   DB::connection('mysql')
        //            ->select(DB::raw("SELECT u.id , u.name as usuario , u.email , u.activo , GROUP_CONCAT(r.name) as rol from role_user ru
        //            inner join roles r on ru.role_id = r.id
        //            inner join users u on ru.user_id = u.id
        //            group BY u.id;"));
        });
