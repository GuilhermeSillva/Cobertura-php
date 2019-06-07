<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BBrokerSurvey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        create view b_broker_survey as select survey.pk_survey,
        realty.PK_realty,
        broker.creci "creci",
        concat_ws(" ", user.Name, user.Surname) "Broker"
        from broker
        join user on user.PK_user = broker.FK_user
        join survey on survey.FK_broker = broker.PK_broker
        join realty on realty.PK_realty = survey.FK_realty;'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW b_broker_survey');
    }
}
