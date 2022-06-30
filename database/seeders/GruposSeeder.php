<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'name' => 'Desarrollo',
            'lider_fk_id'=>3,
            'activo' => 1,
            'eliminado' => 0,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        DB::table('users_grupos')->insert([
            'fk_id_user'=>4,
            'fk_id_grupos'=>1,
            'activo'=>1,
            'eliminado'=>0
        ]);

        DB::table('users_grupos')->insert([
            'fk_id_user'=>5,
            'fk_id_grupos'=>1,
            'activo'=>1,
            'eliminado'=>0
        ]);


    }
}
