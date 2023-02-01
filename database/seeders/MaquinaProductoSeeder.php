<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaquinaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maquina_productos')->insert([
            'fk_id_maquina' => 1,
            'fk_id_productos' => 1,
            'activo' => 1,
            'eliminado' => 0
        ]);
    }
}
