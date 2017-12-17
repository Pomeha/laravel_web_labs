<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidnewstud
     */
    public function up()
    {
        Schema::create('predms', function (Blueprint $table){
           $table->increments('id');
           $table->string('name');
           $table->string('short_name',25);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predms');
    }
}
