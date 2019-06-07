<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->increments('pk_user');
            $table->string('name');
            $table->string('surname');
            $table->date('birth');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cpf')->nullable()->unique();
            $table->string('rg')->nullable()->unique();
            $table->unsignedInteger('fk_gender')->nullable();
            $table->foreign('fk_gender')->references('pk_gender')->on('gender');
            $table->string('mother_name')->nullable();
            $table->boolean('admin')->default('0');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('User');
    }
}
