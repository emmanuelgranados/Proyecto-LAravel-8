<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




        Route::get('/lista_usuarios', function (Request $request) {

               return User::with('roles')->get();
        });

        Route::get('/lista_roles', function (Request $request) {

            return   DB::connection('mysql')
                   ->select(DB::raw("  SELECT r.name,  COUNT(ru.user_id) as cantidad  from role_user ru
                   inner join roles r on ru.role_id = r.id
                   inner join users u on ru.user_id = u.id
                   group BY r.name ;"));
        });


