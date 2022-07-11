<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class TareasPredefinidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //contabilidad
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Registros contables.' , 'fk_id_categorias_tareas' =>  1 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Nómina.' , 'fk_id_categorias_tareas' =>  1 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Regularización.' , 'fk_id_categorias_tareas' =>  1 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Asesoría fiscal.' , 'fk_id_categorias_tareas' =>  1 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Asesoría legal.' , 'fk_id_categorias_tareas' =>  1 ]);

        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Recurso de revocación.' , 'fk_id_categorias_tareas' =>  1 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Juicio de nulidad.' , 'fk_id_categorias_tareas' =>  1 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Amparo.' , 'fk_id_categorias_tareas' =>  1 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Materia Civil' , 'fk_id_categorias_tareas' =>  1 ]);

        //defensa
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Registros contables.' , 'fk_id_categorias_tareas' =>  2 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Nómina.' , 'fk_id_categorias_tareas' =>  2 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Regularización.' , 'fk_id_categorias_tareas' =>  2 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Asesoría fiscal.' , 'fk_id_categorias_tareas' =>  2 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Asesoría legal.' , 'fk_id_categorias_tareas' =>  2 ]);

        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Recurso de revocación.' , 'fk_id_categorias_tareas' =>  2 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Juicio de nulidad.' , 'fk_id_categorias_tareas' =>  2 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Amparo.' , 'fk_id_categorias_tareas' =>  2 ]);
        DB::table('tareas_predefinidas')->insert(['tarea_predefinida' => 'Materia Civil' , 'fk_id_categorias_tareas' =>  2 ]);






    }
}
