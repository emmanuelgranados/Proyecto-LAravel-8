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
        Schema::create('clientes_sub_tareas_predefinidas', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_id_sub_tareas_predefinidas');
            $table->integer('fk_id_clientes');
            $table->boolean('activo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes_sub_tareas_predefinidas');
    }
};
