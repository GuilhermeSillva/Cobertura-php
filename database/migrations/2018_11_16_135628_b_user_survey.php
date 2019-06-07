<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BUserSurvey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        create view b_user_survey as select survey.pk_survey,
        concat_ws(" ", user.Name, user.Surname) "visitor",
        user.cpf "cpf",
        survey.schedule "schedule"
        from user
        join survey on survey.FK_user = user.PK_user;'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW b_user_survey');
    }
}
