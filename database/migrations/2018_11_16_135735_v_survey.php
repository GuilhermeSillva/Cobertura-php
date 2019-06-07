<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VSurvey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        create view v_survey as select 
        b_broker_survey.pk_survey,
        b_broker_survey.creci "creci",
        b_broker_survey.broker "broker",
        b_user_survey.cpf "cpf",
        b_user_survey.visitor "visitor",
        b_user_survey.schedule "schedule"
        from b_broker_survey
        join b_user_survey on b_user_survey.pk_survey = b_broker_survey.pk_survey'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW v_survey');
    }
}
