<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\User;
use App\Models\Estados;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'=>'Arca',
            'fk_id_roles'=>1,
            'fk_id_grupos'=>0,
            'phone'=>'',
            'message'=>'Usuario de sistemas',
            'fk_id_estado'=>14,
            'email'=>'arca@arcaasociados.com',
            'password'=> bcrypt('ZaNkV9EO'),
            'foto'=>1,
            'activo'=>1,
            'eliminado'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        // DB::table('users')->insert([
        //     'name'=>'Israel',
        //     'fk_id_roles'=>3,
        //     'fk_id_grupos'=>1,
        //     'phone'=>'3312727386',
        //     'message'=>'hola',
        //     'fk_id_estado'=>14,
        //     'email'=>'israel@arca.com',
        //     'password'=> bcrypt('secret'),
        //     'foto'=>1,
        //     'activo'=>1,
        //     'eliminado'=>0,
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now(),
        // ]);

        // DB::table('users')->insert([
        //     'name'=>'Emmanuel',
        //     'fk_id_roles'=>4,
        //     'fk_id_grupos'=>1,
        //     'phone'=>'3312727386',
        //     'message'=>'hola',
        //     'fk_id_estado'=>14,
        //     'email'=>'emmanuel@arca.com',
        //     'password'=> bcrypt('secret'),
        //     'foto'=>1,
        //     'activo'=>1,
        //     'eliminado'=>0,
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now(),
        // ]);


        // DB::table('users')->insert([
        //     'name'=>'Sandy',
        //     'fk_id_roles'=>4,
        //     'fk_id_grupos'=>1,
        //     'phone'=>'3312727386',
        //     'message'=>'hola',
        //     'fk_id_estado'=>14,
        //     'email'=>'sandy@arca.com',
        //     'password'=> bcrypt('secret'),
        //     'foto'=>1,
        //     'activo'=>1,
        //     'eliminado'=>0,
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now(),
        // ]);

        // DB::table('users')->insert([
        //     'name'=>'cri',
        //     'fk_id_roles'=>3,
        //     'fk_id_grupos'=>2,
        //     'phone'=>'3312727386',
        //     'message'=>'hola',
        //     'fk_id_estado'=>14,
        //     'email'=>'cri@arca.com',
        //     'password'=> bcrypt('secret'),
        //     'foto'=>1,
        //     'activo'=>1,
        //     'eliminado'=>0,
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now(),
        // ]);

        // DB::table('users')->insert([
        //     'name'=>'El H',
        //     'fk_id_roles'=>4,
        //     'fk_id_grupos'=>2,
        //     'phone'=>'3312727386',
        //     'message'=>'hola',
        //     'fk_id_estado'=>14,
        //     'email'=>'elh@arca.com',
        //     'password'=> bcrypt('secret'),
        //     'foto'=>1,
        //     'activo'=>1,
        //     'eliminado'=>0,
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now(),
        // ]);


        // DB::table('users')->insert([
        //     'name'=>'Aurelio',
        //     'fk_id_roles'=>4,
        //     'fk_id_grupos'=>2,
        //     'phone'=>'3312727386',
        //     'message'=>'hola',
        //     'fk_id_estado'=>14,
        //     'email'=>'aurelio@arca.com',
        //     'password'=> bcrypt('secret'),
        //     'foto'=>1,
        //     'activo'=>1,
        //     'eliminado'=>0,
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now(),
        // ]);




    }
}


