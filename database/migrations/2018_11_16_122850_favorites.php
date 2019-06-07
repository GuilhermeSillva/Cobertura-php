<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Favorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('pk_favorites');
            $table->unsignedInteger('fk_user');
            $table->foreign('fk_user')->references('pk_user')->on('user');
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
        Schema::dropIfExists('favorites');
    }
}
