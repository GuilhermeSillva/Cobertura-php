<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class District extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('District', function (Blueprint $table) {
            $table->increments('pk_district');
            $table->string('name');
            $table->unsignedInteger('fk_city');
            $table->foreign('fk_city')->references('pk_city')->on('city');
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
        Schema::dropIfExists('District');
    }
}
