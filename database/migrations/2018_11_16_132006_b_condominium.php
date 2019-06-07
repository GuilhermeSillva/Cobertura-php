<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BCondominium extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        create view b_condominium as select
        condominium.pk_condominium "pk_condominium",
        condominium.name "condominium_name",
        concat_ws(", ", street.name, district.name, city.name) "condominium_adress",
        street.zip_code "condominium_zip_code"
        from condominium
        join street on condominium.fk_street = street.pk_street
        join district on district.pk_district = street.fk_district
        join city on city.pk_city = district.fk_city;'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("B_condominium");
    }
}
