<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeasonContract extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Season_Contract', function (Blueprint $table) {
            $table->increments('pk_season_contract');
            $table->unsignedInteger('fk_realty');
            $table->foreign('fk_realty')->references('pk_realty')->on('realty');
            $table->unsignedInteger('fk_user');
            $table->foreign('fk_user')->references('pk_user')->on('user');
            $table->unsignedInteger('fk_bank_account');
            $table->foreign('fk_bank_account')->references('pk_bank_account')->on('bank_account');
            $table->unsignedInteger('id_contract');
            $table->string('contract_hash');
            $table->date('initiation');
            $table->date('end');
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
        Schema::dropIfExists('Seacon_Contract');
    }
}
