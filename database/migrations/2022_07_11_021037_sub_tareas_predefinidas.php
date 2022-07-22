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
        Schema::create('sub_tareas_predefinidas', function (Blueprint $table) {
            $table->id();
            $table->string('sub_tarea_predefinida');
            $table->integer('fk_id_tareas_predefinidas');
            $table->integer('fk_id_tipo_campo_html');
            $table->integer('campo')->default(1);
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
        Schema::dropIfExists('sub_tareas_predefinidas');
    }
};
