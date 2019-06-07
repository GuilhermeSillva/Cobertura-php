<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Condominium extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Condominium', function (Blueprint $table) {
            $table->increments('pk_condominium');
            $table->string('name');
            $table->unsignedInteger('fk_street');
            $table->foreign('fk_street')->references('pk_street')->on('street');
            $table->double('value');
            $table->boolean('animals')->default('0');
            $table->string('courts')->nullable();
            $table->string('playground')->nullable();
            $table->string('party_halls')->nullable();
            $table->string('additionals')->nullable();
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
        Schema::dropIfExists('Condominium');
    }
}
