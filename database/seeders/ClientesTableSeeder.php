<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
        INSERT INTO `clientes` (`id`, `nombre_razon_social`, `rfc`, `email`, `pagina_web`, `prospecto`, `activo`, `eliminado`) VALUES
        (1,'google sa. de cv.','AXX0101010003','prueba@example.com','www.google.com',0,1,0)
        ");


    }
}


