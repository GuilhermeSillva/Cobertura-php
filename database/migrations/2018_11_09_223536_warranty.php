<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Warranty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Warranty', function (Blueprint $table) {
            $table->increments('pk_warranty');
            $table->unsignedInteger('fk_insurer')->nullable();
            $table->foreign('fk_insurer')->references('pk_insurer')->on('insurer');
            $table->unsignedInteger('fk_bail')->nullable();
            $table->foreign('fk_bail')->references('pk_bail')->on('bail');
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
        Schema::dropIfExists('Warranty');
    }
}
