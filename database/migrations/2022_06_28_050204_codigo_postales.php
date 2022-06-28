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
        Schema::create('codigos_postales', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_id_estados');
            $table->string('estado');
            $table->string('fk_id_municipios');
            $table->string('municipio');
            $table->string('ciudad')->nullable();;
            $table->string('zona');
            $table->string('cp');
            $table->string('asentamiento');
            $table->string('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codigos_postales');
    }
};
