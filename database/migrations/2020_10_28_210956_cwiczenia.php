<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cwiczenia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cwiczenia',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nazwa');
            $table->text('opis');
            $table->bigInteger('serie');
            $table->bigInteger('powtorzenia');
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
        Schema::dropIfExists('cwiczenia');
    }
}
