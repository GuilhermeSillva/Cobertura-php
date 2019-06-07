<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BHouses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('create view b_houses as select	realty.pk_realty,
        realty.title "title",
        realty.exchange "exchange",
        realty.fk_user "user_id",
        concat_ws(" ", user.name, user.surname) "owner_name",
        concat_ws(", ", street.name, district.name, city.name) "address",
        group_concat(distinct exchange.name separator "/ ") "infos_exchange",
        realty.value_iptu "value_iptu",
        rent.monthly_payment "monthly_payment",
        sale.value "sale_value",
        feature.bedrooms "bedrooms",
        feature.suites "suites",
        feature.garage "garage",
        feature.property_metreage "property_metreage",
        feature.description "description",
        feature.additionals "additionals_features",
        house.built_metreage "built_metreage",
        house.field_metreage "field_metreage",
        b_condominium.condominium_name "condominium_name",
        b_condominium.condominium_adress "condominium_adress",
        b_condominium.condominium_zip_code "condominium_zip_code",
        condominium.value "condominium_value",
        condominium.animals "animals",
        condominium.courts "courts",
        condominium.playground "playground",
        condominium.party_halls "party_halls",
        condominium.additionals "condominium_additionals"
        from house
        left join rent on rent.PK_rent = house.FK_rent
        left join sale on sale.PK_sale = house.FK_sale
        join realty on realty.FK_house = house.PK_house
        join user on user.pk_user = realty.fk_user
        join street on realty.fk_street = street.pk_street
        join district on district.pk_district = street.fk_district
        join city on city.pk_city = district.fk_city
        join feature on feature.PK_feature = house.FK_feature
        left join condominium on condominium.PK_condominium = realty.FK_condominium
        left join b_condominium on b_condominium.pk_condominium = condominium.pk_condominium
        left join exchange_realty on exchange_realty.fk_realty = realty.pk_realty
        left join exchange on exchange.pk_exchange = exchange_realty.fk_exchange
        group by realty.pk_realty;'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW b_houses");
    }
}
