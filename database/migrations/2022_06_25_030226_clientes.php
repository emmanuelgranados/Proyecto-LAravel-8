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
            $table->string('nombre_razon_social');
            $table->string('rfc');
            $table->string('email');
            $table->string('pagina_web');
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
