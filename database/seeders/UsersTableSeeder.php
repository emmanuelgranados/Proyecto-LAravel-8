<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\User;
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

        $role_sistemas = Roles::where('name', 'sistemas')->first();
        $role_admin = Roles::where('name', 'admin')->first();
        $role_ejecutivo = Roles::where('name', 'ejecutivo')->first();
        $role_supervisor = Roles::where('name', 'supervisor')->first();

        $user = new User();
        $user->name = 'Sistemas';
        $user->email = 'sistemas@arca.com';
        $user->password = bcrypt('secret');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_sistemas);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@arca.com';
        $user->password = bcrypt('secret');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Israel';
        $user->email = 'israel@arca.com';
        $user->password = bcrypt('secret');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Emmanuel';
        $user->email = 'emmanuel@arca.com';
        $user->password = bcrypt('secret');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Sandy';
        $user->email = 'sandy@arca.com';
        $user->password = bcrypt('secret');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_admin);



    }
}


