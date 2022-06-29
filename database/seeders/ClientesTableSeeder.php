<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
        INSERT INTO `clientes` (`id`, `nombre_razon_social`, `rfc`, `email`, `pagina_web`, `activo`, `eliminado`) VALUES
        (1,'google sa. de cv.','AXX0101010003','prueba@example.com','www.google.com',1,0)
        ");


    }
}


