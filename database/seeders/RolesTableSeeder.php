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


    public function run()
    {

        DB::table('roles')->insert([
            'name' => 'sistemas',
            'description'=>'Sistemas',
            'activo' => 1,
            'eliminado' => 0
        ]);

        DB::table('roles')->insert([
            'name' => 'socio',
            'description'=>'Socio',
            'activo' => 1,
            'eliminado' => 0
        ]);


        DB::table('roles')->insert([
            'name' => 'supervisor',
            'description'=>'Supervisor',
            'activo' => 1,
            'eliminado' => 0
        ]);

        DB::table('roles')->insert([
            'name' => 'ejecutivo',
            'description'=>'Ejecutivo',
            'activo' => 1,
            'eliminado' => 0
        ]);


    }
}


