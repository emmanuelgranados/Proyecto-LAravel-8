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
        INSERT INTO `estados` (`id`, `fk_id_paises`, `estado`, `clave`, `created_at`, `updated_at`, `activo`) VALUES
        (1, 42, 'Aguascalientes', 'Ags.', NULL, NULL, 1),
        (2, 42, 'Baja California', 'BC', NULL, NULL, 1),
        (3, 42, 'Baja California Sur', 'BCS', NULL, NULL, 1),
        (4, 42, 'Campeche', 'Camp.', NULL, NULL, 1),
        (5, 42, 'Coahuila de Zaragoza', 'Coah.', NULL, NULL, 1),
        (6, 42, 'Colima', 'Col.', NULL, NULL, 1),
        (7, 42, 'Chiapas', 'Chis.', NULL, NULL, 1),
        (8, 42, 'Chihuahua', 'Chih.', NULL, NULL, 1),
        (9, 42, 'Ciudad de México', 'CDMX', NULL, NULL, 1),
        (10, 42, 'Durango', 'Dgo.', NULL, NULL, 1),
        (11, 42, 'Guanajuato', 'Gto.', NULL, NULL, 1),
        (12, 42, 'Guerrero', 'Gro.', NULL, NULL, 1),
        (13, 42, 'Hidalgo', 'Hgo.', NULL, NULL, 1),
        (14, 42, 'Jalisco', 'Jal.', NULL, NULL, 1),
        (15, 42, 'México', 'Mex.', NULL, NULL, 1),
        (16, 42, 'Michoacán de Ocampo', 'Mich.', NULL, NULL, 1),
        (17, 42, 'Morelos', 'Mor.', NULL, NULL, 1),
        (18, 42, 'Nayarit', 'Nay.', NULL, NULL, 1),
        (19, 42, 'Nuevo León', 'NL', NULL, NULL, 1),
        (20, 42, 'Oaxaca', 'Oax.', NULL, NULL, 1),
        (21, 42, 'Puebla', 'Pue.', NULL, NULL, 1),
        (22, 42, 'Querétaro', 'Qro.', NULL, NULL, 1),
        (23, 42, 'Quintana Roo', 'Q. Roo', NULL, NULL, 1),
        (24, 42, 'San Luis Potosí', 'SLP', NULL, NULL, 1),
        (25, 42, 'Sinaloa', 'Sin.', NULL, NULL, 1),
        (26, 42, 'Sonora', 'Son.', NULL, NULL, 1),
        (27, 42, 'Tabasco', 'Tab.', NULL, NULL, 1),
        (28, 42, 'Tamaulipas', 'Tamps.', NULL, NULL, 1),
        (29, 42, 'Tlaxcala', 'Tlax.', NULL, NULL, 1),
        (30, 42, 'Veracruz de Ignacio de la Llave', 'Ver.', NULL, NULL, 1),
        (31, 42, 'Yucatán', 'Yuc.', NULL, NULL, 1),
        (32, 42, 'Zacatecas', 'Zac.', NULL, NULL, 1)

        ");


    }
}


