<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Apartment', function (Blueprint $table) {
            $table->increments('pk_apartment');
            $table->integer('floor');
            $table->unsignedInteger('fk_feature');
            $table->foreign('fk_feature')->references('pk_feature')->on('feature');
            $table->unsignedInteger('fk_rent')->nullable();
            $table->foreign('fk_rent')->references('pk_rent')->on('rent');
            $table->unsignedInteger('fk_sale')->nullable();
            $table->foreign('fk_sale')->references('pk_sale')->on('sale');
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
        Schema::dropIfExists('Apartment');
    }
}
