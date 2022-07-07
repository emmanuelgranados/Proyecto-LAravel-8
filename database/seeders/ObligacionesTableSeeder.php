<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class ObligacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obligaciones')->insert(['obligacion' => 'ISR Personas morales Régimen General de Ley.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR Personas morales Resico.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR personas morales no lucrativas.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR Personas físicas Resico.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR Personas físicas regimen de actividades empresariales y profesionales. ']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR personas físicas arrendamiento. ']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR personas físicas sueldos y salarios.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR personas físicas asimilados a salarios.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR Régimen de Incorporación Fiscal. ']);
        DB::table('obligaciones')->insert(['obligacion' => 'IVA.']);
        DB::table('obligaciones')->insert(['obligacion' => 'IVA Retenido.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR retenido salarios.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR retenido Resico.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR retenido por honorarios.']);
        DB::table('obligaciones')->insert(['obligacion' => 'ISR Retenido por arrendamiento.']);




    }
}
