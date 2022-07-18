<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class TareasEstandarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tareas_estandar')->insert(['tarea_estandar' => 'Elaboración de registros contables.']);
        DB::table('tareas_estandar')->insert(['tarea_estandar' => 'Elaboración del pago provisional de ISR.']);
        DB::table('tareas_estandar')->insert(['tarea_estandar' => 'Pago mensual de IVA.']);
        DB::table('tareas_estandar')->insert(['tarea_estandar' => 'Pago mensual de impuestos retenidos.']);
        DB::table('tareas_estandar')->insert(['tarea_estandar' => 'Elaboración de financieros.']);
        DB::table('tareas_estandar')->insert(['tarea_estandar' => 'Envio de financieros.']);



    }
}
