<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class CategoriasTareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias_tareas')->insert(['categoria_tarea' => 'Contabilidad'  ]);
        DB::table('categorias_tareas')->insert(['categoria_tarea' => 'Defensa']);





    }
}
