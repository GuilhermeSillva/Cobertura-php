<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        create view v_search as select b_houses.pk_realty "pk_realty",
        b_houses.title "title",
        b_houses.address "address",
        b_houses.sale_value "sale_value",
        b_houses.monthly_payment "monthly_payment",
        null as floor,
        b_houses.bedrooms "bedrooms",
        b_houses.suites "suites",
        b_houses.garage "garage",
        b_houses.property_metreage "house_metreage",
        b_houses.`exchange` "exchange",
        b_houses.infos_exchange "infos_exchange"
        from b_houses
        union
        select b_apartments.pk_realty "pk_realty",
        b_apartments.title "title",
        b_apartments.address "address",
        b_apartments.sale_value "sale_value",
        b_apartments.monthly_payment "monthly_payment",
        b_apartments.floor "floor",
        b_apartments.bedrooms "bedrooms",
        b_apartments.suites "suites",
        b_apartments.garage "garage",
        b_apartments.property_metreage "apartment_metreage",
        b_apartments.`exchange` "exchange",
        b_apartments.infos_exchange "infos_exchange"
        from b_apartments
        order by pk_realty ASC;'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW v_search");
    }
}
