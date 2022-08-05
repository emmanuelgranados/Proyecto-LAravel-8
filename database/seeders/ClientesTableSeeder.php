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
        // DB::statement("
        // INSERT INTO `clientes` (
        //     `id`,
        //     `nombre_cliente`,
        //     `razon_social`,
        //      `rfc`,
        //      `email`,
        //      `fecha_ingreso`,
        //      `fk_id_usuario_asignado`,
        //      `tipo_servicio`,
        //      `prospecto`,
        //      `activo`,
        //      `eliminado`
        //      ) VALUES
        // (
        //     1,
        //     'google',
        //     'google sa. de cv.',
        //     'AXX0101010003',
        //     'prueba@example.com',
        //     '2022-01-01',
        //     1,
        //     1,
        //     0,
        //     1,
        //     0
        //     )
        // ");


    }
}


