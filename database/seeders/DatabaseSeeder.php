<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // La creación de datos de roles debe ejecutarse primero
    $this->call(RolesTableSeeder::class);    // Los usuarios necesitarán los roles previamente generados
    $this->call(UsersTableSeeder::class);
    $this->call(PaisesTableSeeder::class);
    $this->call(EstadosTableSeeder::class);
    $this->call(MunicipiosTableSeeder::class);
    $this->call(CodigosPostalesTableSeeder::class);
    $this->call(EstatusTableSeeder::class);
    $this->call(ClientesTableSeeder::class);
    $this->call(PrioridadesTableSeeder::class);
    $this->call(GruposSeeder::class);

    }
}
