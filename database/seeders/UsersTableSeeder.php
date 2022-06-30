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

        // $role_sistemas = Roles::where('name', 'sistemas')->first();
        // $role_supervisor = Roles::where('name', 'supervisor')->first();
        // $role_ejecutivo = Roles::where('name', 'ejecutivo')->first();



        DB::table('users')->insert([
            'name'=>'Sistemas',
            'fk_id_roles'=>1,
            'fk_id_grupos'=>1,
            'phone'=>'3312727386',
            'message'=>'hola',
            'fk_id_estado'=>14,
            'email'=>'sistemas@arca.com',
            'password'=> bcrypt('secret'),
            'foto'=>1,
            'activo'=>1,
            'eliminado'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Israel',
            'fk_id_roles'=>3,
            'fk_id_grupos'=>1,
            'phone'=>'3312727386',
            'message'=>'hola',
            'fk_id_estado'=>14,
            'email'=>'israel@arca.com',
            'password'=> bcrypt('secret'),
            'foto'=>1,
            'activo'=>1,
            'eliminado'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Emmanuel',
            'fk_id_roles'=>4,
            'fk_id_grupos'=>1,
            'phone'=>'3312727386',
            'message'=>'hola',
            'fk_id_estado'=>14,
            'email'=>'emmanuel@arca.com',
            'password'=> bcrypt('secret'),
            'foto'=>1,
            'activo'=>1,
            'eliminado'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);


        DB::table('users')->insert([
            'name'=>'Sandy',
            'fk_id_roles'=>4,
            'fk_id_grupos'=>1,
            'phone'=>'3312727386',
            'message'=>'hola',
            'fk_id_estado'=>14,
            'email'=>'sandy@arca.com',
            'password'=> bcrypt('secret'),
            'foto'=>1,
            'activo'=>1,
            'eliminado'=>0,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);





        $user = new User();
        $user->name = 'cri';
        $user->email = 'cri@arca.com';
        $user->password = bcrypt('secret');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_supervisor);

        $user = new User();
        $user->name = 'El h';
        $user->email = 'h@arca.com';
        $user->password = bcrypt('secret');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_ejecutivo);

        $user = new User();
        $user->name = 'Aureliuuuuus';
        $user->email = 'Aureliuuuuus@arca.com';
        $user->password = bcrypt('secret');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_ejecutivo);


    }
}


