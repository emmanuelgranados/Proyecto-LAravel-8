<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_equipo')->nullable();
            $table->integer('fk_id_marcas');
            $table->integer('fk_id_users')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('mac_wifi')->nullable();
            $table->string('serial_key_windows')->nullable();
            $table->string('sistema_operativo')->nullable();
            $table->string('modelo')->nullable();
            $table->string('memoria_ram')->nullable();
            $table->string('disco_duro')->nullable();
            $table->string('procesador')->nullable();
            $table->string('numero_de_serie')->nullable();
            $table->string('garantia')->nullable();
            $table->string('licencia_office')->nullable();
            $table->dateTime('fecha_alta',0)->nullable();
            $table->string('tipo')->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('fecha_asignacion',0)->nullable();
            $table->dateTime('fecha_garantia',0)->nullable();
            $table->boolean('eliminado')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
};
