<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
        INSERT INTO `estatus` (`id`, `estatus`) VALUES
        (1,'En Proceso'),
        (2,'Pendiente'),
        (3,'Terminado'),
        (4,'Solicitud de Terminado')
        ");


    }
}


