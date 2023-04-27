<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVochtigheidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vochtigheid', function (Blueprint $table) {
            $table->id();
            $table->string('updated_at');
            $table->string('value');
            $table->integer('huis_id')->references('id')->on('huis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vochtigheid');
    }
}
