<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_estados', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome')->nullable();
            $table->string('uf', 3)->nullable();
            $table->integer('ibge')->nullable();
            $table->string('ddd', 3)->nullable();

            $table->integer('pais_id')->unsigned()->nullable();
            $table->foreign('pais_id')->references('id')->on('paises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estados');
    }
}
