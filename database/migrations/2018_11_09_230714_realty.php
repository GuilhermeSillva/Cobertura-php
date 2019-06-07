<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Realty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Realty', function (Blueprint $table) {
            $table->increments('pk_realty');
            $table->string('title');
            $table->integer('tax')->default('8');
            $table->boolean('exclusivity')->default('0');
            $table->boolean('exchange')->default('0');
            $table->double('value_iptu')->default('0');
            $table->boolean('user_status')->default('1');
            $table->unsignedInteger('fk_user');
            $table->foreign('fk_user')->references('pk_user')->on('user');
            $table->unsignedInteger('fk_street');
            $table->foreign('fk_street')->references('pk_street')->on('street');
            $table->integer('number');
            $table->unsignedInteger('fk_house')->nullable();
            $table->foreign('fk_house')->references('pk_house')->on('house');
            $table->unsignedInteger('fk_apartment')->nullable();
            $table->foreign('fk_apartment')->references('pk_apartment')->on('apartment');
            $table->unsignedInteger('fk_condominium')->nullable();
            $table->foreign('fk_condominium')->references('pk_condominium')->on('condominium');
            $table->unsignedInteger('fk_season')->nullable();
            $table->foreign('fk_season')->references('pk_season')->on('season');
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
        Schema::dropIfExists('Realty');
    }
}
