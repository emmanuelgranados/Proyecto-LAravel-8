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
        Schema::create('tareas_seguimiento', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_id_tareas');
            $table->integer('fk_id_acciones_tareas');
            $table->dateTime('fecha')->nullable()->useCurrent();
            $table->integer('fk_id_clientes')->nullable();
            $table->integer('fk_id_prioridades')->nullable();
            $table->integer('fk_id_users')->nullable();
            $table->integer('fk_id_users_alta')->nullable();
            $table->integer('fk_id_users_asignado')->nullable();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_final')->nullable();
            $table->dateTime('fecha_registro')->nullable()->useCurrent();
            $table->integer('fk_id_sub_tareas_predefinidas')->nullable();
            $table->integer('fk_id_obligaciones')->nullable();
            $table->integer('fk_id_tareas_estandar')->nullable();
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
        Schema::dropIfExists('tareas_seguimiento');
    }
};
