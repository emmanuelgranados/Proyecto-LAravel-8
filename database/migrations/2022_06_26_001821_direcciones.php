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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->string('fk_id_clientes');
            $table->string('calle');
            $table->string('numero_exterior');
            $table->string('numero_interior');
            $table->string('colonia');
            $table->string('fk_id_paises');
            $table->string('fk_id_estados');
            $table->string('fk_id_municipios');
            $table->string('fk_id_codigos_postales');
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
        Schema::dropIfExists('direcciones');
    }
};
