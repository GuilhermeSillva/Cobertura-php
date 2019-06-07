<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class House extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('House', function (Blueprint $table) {
            $table->increments('pk_house');
            $table->double('field_metreage')->nullable();
            $table->double('built_metreage')->nullable();
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
        Schema::dropIfExists('House');
    }
}
