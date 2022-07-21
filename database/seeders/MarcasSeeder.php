<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class marcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'marca' => 'DELL',
            'activo'=>1,
            'eliminado'=>0
        ]);

        DB::table('marcas')->insert([
            'marca' => 'TOSHIBA',
            'activo'=>1,
            'eliminado'=>0
        ]);

        DB::table('marcas')->insert([
            'marca' =>'HUAWUEI',
            'activo'=> 1,
            'eliminado'=> 0
        ]);

        DB::table('marcas')->insert([
            'marca'=> 'SAMSUNG',
            'activo'=> 1,
            'eliminado'=> 0
        ]);
    }
}
