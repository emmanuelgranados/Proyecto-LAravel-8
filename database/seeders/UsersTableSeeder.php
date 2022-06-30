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
        $user->name = 'Isra';
        $user->email = 'toro03@gmail.com';
        $user->password = bcrypt('123456');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_supervisor);

        $user = new User();
        $user->name = 'Sandy';
        $user->email = 'toro02@gmail.com';
        $user->password = bcrypt('123456');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_ejecutivo);

        $user = new User();
        $user->name = 'Emma';
        $user->email = 'toro01@gmail.com';
        $user->password = bcrypt('123456');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_ejecutivo);


        $user = new User();
        $user->name = 'Cri';
        $user->email = 'cri03@gmail.com';
        $user->password = bcrypt('123456');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_supervisor);

        $user = new User();
        $user->name = 'El H';
        $user->email = 'cri02@gmail.com';
        $user->password = bcrypt('123456');
        $user->phone = '3312727386';
        $user->message = 'hola';
        $user->fk_id_estado = 1;
        $user->foto = 1;
        $user->activo = 1;
        $user->eliminado = 0;
        $user->save();
        $user->roles()->attach($role_ejecutivo);

        $user = new User();
        $user->name = 'Aureliuuuuuus';
        $user->email = 'cri01@gmail.com';
        $user->password = bcrypt('123456');
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


