<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeveiligingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beveiliging', function (Blueprint $table) {
            $table->id();
            $table->timestamps();  
            $table->string("triggered")->default("false");
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
        Schema::dropIfExists('beveiliging');
    }
}
