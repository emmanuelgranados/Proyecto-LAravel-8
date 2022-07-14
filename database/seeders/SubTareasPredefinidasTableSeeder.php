<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class SubTareasPredefinidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Autoridad' , 'fk_id_tareas_predefinidas' =>  7 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Número de resolución' , 'fk_id_tareas_predefinidas' =>  7 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Fecha de notificación' , 'fk_id_tareas_predefinidas' =>  7 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Plazo fatal para su presentación' , 'fk_id_tareas_predefinidas' =>  7 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Plazo preventivo para su presentación' , 'fk_id_tareas_predefinidas' =>  7 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Agravios identificados' , 'fk_id_tareas_predefinidas' => 7 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Observaciones' , 'fk_id_tareas_predefinidas' => 7 ]);


        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Autoridad' , 'fk_id_tareas_predefinidas' => 8 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Número de resolución' , 'fk_id_tareas_predefinidas' => 8 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Fecha de notificación' , 'fk_id_tareas_predefinidas' => 8 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Plazo fatal para su presentación' , 'fk_id_tareas_predefinidas' =>  8 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Plazo preventivo para su presentación' , 'fk_id_tareas_predefinidas' => 8 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Agravios identificados' , 'fk_id_tareas_predefinidas' => 8 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Observaciones' , 'fk_id_tareas_predefinidas' => 8 ]);


        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Autoridad' , 'fk_id_tareas_predefinidas' =>  9 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Número de resolución' , 'fk_id_tareas_predefinidas' =>  9 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Fecha de notificación' , 'fk_id_tareas_predefinidas' =>  9 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Plazo fatal para su presentación' , 'fk_id_tareas_predefinidas' => 9 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Plazo preventivo para su presentación' , 'fk_id_tareas_predefinidas' => 9 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Agravios identificados' , 'fk_id_tareas_predefinidas' =>  9 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Observaciones' , 'fk_id_tareas_predefinidas' =>  9 ]);

        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Materia Civil' , 'fk_id_tareas_predefinidas' => 10 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Materia mercantil' , 'fk_id_tareas_predefinidas' =>  10 ]);
        DB::table('sub_tareas_predefinidas')->insert(['sub_tarea_predefinida' => 'Materia penal' , 'fk_id_tareas_predefinidas' =>  10 ]);




    }
}
