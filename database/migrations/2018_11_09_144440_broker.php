<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Broker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Broker', function (Blueprint $table) {
            $table->increments('pk_broker');
            $table->string('creci');
            $table->unsignedInteger('region');
            $table->foreign('region')->references('pk_state')->on('state');
            $table->unsignedInteger('fk_user');
            $table->foreign('fk_user')->references('pk_user')->on('user');
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
        Schema::dropIfExists('Broker');
    }
}
