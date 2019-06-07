<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contract extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contract', function (Blueprint $table) {
            $table->increments('pk_contract');
            $table->unsignedInteger('fk_broker');
            $table->foreign('fk_broker')->references('pk_broker')->on('broker');
            $table->unsignedInteger('fk_user');
            $table->foreign('fk_user')->references('pk_user')->on('user');
            $table->unsignedInteger('fk_realty');
            $table->foreign('fk_realty')->references('pk_realty')->on('realty');
            $table->integer('id_contract');
            $table->string('contract_hash');
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
        Schema::dropIfExists('Contract');
    }
}
