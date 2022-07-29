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
        Schema::create('tareas_archivos', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_id_users');
            $table->integer('fk_id_tareas');
            $table->string('nombre_archivo');
            $table->dateTime('fecha_registro')->nullable()->useCurrent();
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
        Schema::dropIfExists('tareas_archivos');
    }
};
