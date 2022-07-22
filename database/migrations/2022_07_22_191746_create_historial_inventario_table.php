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
        Schema::create('historial_inventario', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha',0)->nullable();
            $table->integer('evento')->nullable();
            $table->integer('fk_id_inventario');
            $table->integer('fk_id_users_adquiere')->nullable();
            $table->integer('fk_id_users')->nullable();
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
        Schema::dropIfExists('historial_inventario');
    }
};
