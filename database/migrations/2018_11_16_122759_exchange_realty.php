<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExchangeRealty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Exchange_Realty', function (Blueprint $table) {
            $table->increments('pk_ex_realty');
            $table->unsignedInteger('fk_exchange');
            $table->foreign('fk_exchange')->references('pk_exchange')->on('exchange');
            $table->unsignedInteger('fk_realty');
            $table->foreign('fk_realty')->references('pk_realty')->on('realty');
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
        Schema::dropIfExists('Exchange_Realty');
    }
}
