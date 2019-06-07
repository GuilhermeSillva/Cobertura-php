<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Street extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Street', function (Blueprint $table) {
            $table->increments('pk_street');
            $table->string('name');
            $table->string('zip_code');
            $table->unsignedInteger('fk_district');
            $table->foreign('fk_district')->references('pk_district')->on('district');
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
        Schema::dropIfExists('Street');
    }
}
