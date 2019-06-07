<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rent', function (Blueprint $table) {
            $table->increments('pk_rent');
            $table->string('furniture');
            $table->double('monthly_payment');
            $table->double('income');
            $table->unsignedInteger('fk_warranty')->nullable();
            $table->foreign('fk_warranty')->references('pk_warranty')->on('warranty');
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
        Schema::dropIfExists('Rent');
    }
}
