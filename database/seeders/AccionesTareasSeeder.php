<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class AccionesTareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acciones_tareas')->insert(['accion_tarea' => 'Creado']);
        DB::table('acciones_tareas')->insert(['accion_tarea' => 'Actualizado']);
        DB::table('acciones_tareas')->insert(['accion_tarea' => 'Eliminado']);
        DB::table('acciones_tareas')->insert(['accion_tarea' => 'Solicitud Terminado']);
        DB::table('acciones_tareas')->insert(['accion_tarea' => 'Terminado']);
        DB::table('acciones_tareas')->insert(['accion_tarea' => 'Rechazado']);

    }
}
