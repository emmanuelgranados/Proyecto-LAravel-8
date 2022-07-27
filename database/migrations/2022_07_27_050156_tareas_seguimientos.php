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
            $table->text('fk_id_tareas');
            $table->integer('fk_id_acciones_tareas');
            $table->dateTime('fecha_registro')->nullable()->useCurrent();
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
