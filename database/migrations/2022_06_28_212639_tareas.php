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
            $table->dateTime('fecha_registro')->nullable()->useCurrent();
            // $table->dateTime('fecha_notificacion')->nullable();
            // $table->dateTime('fecha_plazo_fatal')->nullable();
            // $table->dateTime('fecha_plazo_preventivo')->nullable();
            $table->dateTime('fk_id_sub_tareas_predefinidas')->nullable();
            $table->integer('fk_id_obligaciones')->nullable();
            $table->date('fecha_sub_tarea')->nullable();
            $table->text('sub_tarea')->nullable();
            $table->integer('fk_id_estatus')->nullable();
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
