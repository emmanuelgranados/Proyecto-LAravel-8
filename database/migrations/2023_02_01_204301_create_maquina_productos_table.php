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
        Schema::create('maquina_productos', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_id_maquina');
            $table->integer('fk_id_productos');
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
        Schema::dropIfExists('maquina_productos');
    }
};
