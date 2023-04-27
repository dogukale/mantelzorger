<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('street');
            $table->string('number');
            $table->string('postal_code');
            $table->string('place');
            $table->string('description');
            $table->string('image');
            $table->string('alarm')->default('false');
            $table->string('mantelzorger')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huis');
    }
}
