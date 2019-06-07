<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Feature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Feature', function (Blueprint $table) {
            $table->increments('pk_feature');
            $table->double('property_metreage');
            $table->integer('bedrooms');
            $table->integer('suites')->nullable();
            $table->integer('garage')->nullable();
            $table->string('description');
            $table->string('additionals')->nullable();
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
        Schema::dropIfExists('Feature');
    }
}
