<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',2);
            $table->string('name');
        });
        Schema::create('data_states', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->string('name');

            $table->foreign('country_id')->references('id')->on('data_countries');
        });
        Schema::create('data_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->string('name');

            $table->foreign('country_id')->references('id')->on('data_countries');
            $table->foreign('state_id')->references('id')->on('data_states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_countries');
        Schema::dropIfExists('data_states');
        Schema::dropIfExists('data_cities');
    }
}
