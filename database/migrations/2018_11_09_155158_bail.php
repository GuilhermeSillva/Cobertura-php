<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bail', function (Blueprint $table) {
            $table->increments('pk_bail');
            $table->double('value');
            $table->boolean('withdrawal')->default('1');
            $table->unsignedInteger('fk_bank_account');
            $table->foreign('fk_bank_account')->references('pk_bank_account')->on('bank_account');
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
        Schema::dropIfExists('Bail');
    }
}
