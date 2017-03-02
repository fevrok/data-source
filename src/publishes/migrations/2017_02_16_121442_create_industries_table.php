<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_industries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        Schema::create('data_subindustries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('industry_id')->unsigned();

            $table->foreign('industry_id')->references('id')->on('data_industries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_industries');
        Schema::dropIfExists('data_subindustries');
    }
}
