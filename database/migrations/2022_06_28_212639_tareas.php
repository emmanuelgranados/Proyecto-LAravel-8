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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->text('tarea');
            $table->integer('fk_id_clientes');
            $table->integer('fk_id_prioridades');
            $table->integer('fk_id_users_alta');
            $table->integer('fk_id_users_asignado');
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_final')->nullable();
            $table->dateTime('fecha_registro');
            $table->dateTime('fecha_notificacion');
            $table->dateTime('fecha_plazo_fatal');
            $table->dateTime('fecha_plazo_preventivo');
            $table->dateTime('fk_id_sub_tareas_predefinidas');
            $table->integer('fk_id_obligaciones');
            $table->integer('fk_id_estatus');
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
        Schema::dropIfExists('tareas');
    }
};
