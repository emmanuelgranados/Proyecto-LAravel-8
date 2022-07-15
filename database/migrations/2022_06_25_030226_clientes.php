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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->string('razon_social');
            $table->string('rfc');
            $table->string('email');
            $table->date('fecha_ingreso');
            $table->integer('fk_id_usuario_asignado');
            $table->tinyInteger('tipo_servicio');
            $table->boolean('prospecto')->default(0);
            $table->boolean('activo')->default(1);
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
        Schema::dropIfExists('clientes');
    }
};
