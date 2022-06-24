<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $name = [
        'admin',
        'sistemas',
        'supervisor',
        'ejecutivo',
        'socio'
    ];


    public function run()
    {

       foreach (self::$name as $name) {
        DB::table('roles')->insert([
            'nombreRol' => $name,
            'activo' => 1
        ]);
     }
    }
}

