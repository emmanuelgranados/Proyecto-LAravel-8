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
        DB::statement("INSERT INTO `estados` (`id`, `estado`, `fk_id_paises`) VALUES
        (1,'Aguascalientes',1),
        (2,'Baja California',1),
        (3,'Baja California Sur',1),
        (4,'Campeche',1),
        (5,'Chiapas',1),
        (6,'Chihuahua',1),
        (7,'Coahuila',1),
        (8,'Colima',1),
        (9,'Ciudad de México',1),
        (10,'Durango',1),
        (11,'Estado de México',1),
        (12,'Guanajuato',1),
        (13,'Guerrero',1),
        (14,'Hidalgo',1),
        (15,'Jalisco',1),
        (16,'Michoacán',1),
        (17,'Morelos',1),
        (18,'Nayarit',1),
        (19,'Nuevo León',1),
        (20,'Oaxaca',1),
        (21,'Puebla',1),
        (22,'Querétaro',1),
        (23,'Quintana Roo',1),
        (24,'San Luis Potosí',1),
        (25,'Sinaloa',1),
        (26,'Sonora',1),
        (27,'Tabasco',1),
        (28,'Tamaulipas',1),
        (29,'Tlaxcala',1),
        (30,'Veracruz',1),
        (31,'Yucatán',1),
        (32,'Zacatecas',1)");


    }
}


