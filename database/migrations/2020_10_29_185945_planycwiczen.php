<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Planycwiczen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planycwiczen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('plan_id')->unsigned();
            $table->bigInteger('cwiczenie_id')->unsigned();
            $table->float('waga');
            $table->timestamps();
        });
        Schema::table('planycwiczen', function (Blueprint $table) {
            $table->foreign('plan_id')
                ->references('id')
                ->on('plan');
        });
        Schema::table('planycwiczen', function (Blueprint $table) {
            $table->foreign('cwiczenie_id')
                ->references('id')
                ->on('plan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planycwiczen');
    }
}
