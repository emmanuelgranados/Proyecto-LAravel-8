<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Cable categoria 1',
            'activo' => 1,
            'eliminado' => 0
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Cinta Negra',
            'activo' => 1,
            'eliminado' => 0
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Disco Duro 1T',
            'activo' => 1,
            'eliminado' => 0
        ]);
    }
}
