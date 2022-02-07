<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nazwa');
        $table->string('opis');
        $table->bigInteger('id_usera')->unsigned();;
        $table->bigInteger('id_owner')->unsigned();;
        $table->timestamps();
    });
        Schema::table('plan', function (Blueprint $table) {
            $table->foreign('id_usera')
                ->references('id')
                ->on('users');
        });

        Schema::table('plan', function (Blueprint $table) {
            $table->foreign('id_owner')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan');
    }
}
