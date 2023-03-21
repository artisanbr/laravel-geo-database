<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('geo_countries');

            $table->string('title')->nullable();
            $table->string('slug', 3)->nullable();
            $table->integer('ibge')->nullable();
            $table->string('phone_prefix', 3)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('geo_states');
    }
}
