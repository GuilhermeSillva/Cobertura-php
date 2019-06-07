create view b_houses as select realty.pk_realty,
        realty.title "title",
        sale.value "sale_value",
        rent.monthly_payment "monthly_payment",
        feature.bedrooms "bedrooms",
        feature.suites "suites",
        feature.garage "garage",
        feature.property_metreage "property_metreage",
        feature.description "description",
        feature.additionals "additionals_feature",
        house.built_metreage "built_metreage",
        house.field_metreage "field_metreage",
        condominium.value "condominium_value",
        condominium.animals "animals",
        condominium.courts "courts",
        condominium.playground "playground",
        condominium.party_halls "party_halls",
        condominium.additionals "condominium_additionals",
        group_concat(photos.url separator "/ ") "photos"
        from house
        left join rent on rent.PK_rent = house.FK_rent
        left join sale on sale.PK_sale = house.FK_sale
        join realty on realty.FK_house = house.PK_house
        join feature on feature.PK_feature = house.FK_feature
        join condominium on condominium.PK_condominium = realty.FK_condominium
        join realty_photos on realty_photos.FK_realty = realty.PK_realty
        join photos on photos.PK_photos = realty_photos.FK_photos
        group by realty.pk_realty;



create view b_apartments as select realty.pk_realty,
        realty.title "title",
        rent.monthly_payment "monthly_payment",
        sale.value "sale_value",
        apartment.floor "floor",
        feature.bedrooms "bedrooms",
        feature.suites "suites",
        feature.garage "garage",
        feature.property_metreage "property_metreage",
        feature.description "description",
        feature.additionals "additionals_features",
        condominium.value "condominium_value",
        condominium.animals "animals",
        condominium.courts "courts",
        condominium.playground "playground",
        condominium.party_halls "party_halls",
        condominium.additionals "condominium_additionals", 
        group_concat(distinct photos.url separator "/ ") "photos"
        from apartment
        left join rent on rent.PK_rent = apartment.FK_rent
        left join sale on sale.PK_sale = apartment.FK_sale
        join realty on realty.FK_apartment = apartment.PK_apartment
        join feature on feature.PK_feature = apartment.FK_feature
        join condominium on condominium.PK_condominium = realty.FK_condominium
        join realty_photos on realty_photos.FK_realty = realty.PK_realty
        join photos on photos.PK_photos = realty_photos.FK_photos
        group by realty.pk_realty;



create view v_search as select b_houses.pk_realty "pk_realty",
        b_houses.title "title",
        b_houses.sale_value "sale_value",
        b_houses.monthly_payment "monthly_payment",
        null as floor,
        b_houses.bedrooms "bedrooms",
        b_houses.suites "suites",
        b_houses.garage "garage",
        b_houses.property_metreage "house_metreage",
        b_houses.photos "photos"
        from b_houses
        union
        select b_apartments.pk_realty "pk_realty",
        b_apartments.title "title",
        b_apartments.sale_value "sale_value",
        b_apartments.monthly_payment "monthly_payment",
        b_apartments.floor "floor",
        b_apartments.bedrooms "bedrooms",
        b_apartments.suites "suites",
        b_apartments.garage "garage",
        b_apartments.property_metreage "apartment_metreage",
        b_apartments.photos "photos"
        from b_apartments;



create view b_broker_survey as select survey.pk_survey,
        realty.PK_realty,
        broker.creci "creci",
        concat_ws(" ", user.Name, user.Surname) "Broker"
        from broker
        join user on user.PK_user = broker.FK_user
        join survey on survey.FK_broker = broker.PK_broker
        join realty on realty.PK_realty = survey.FK_realty;



create view b_user_survey as select survey.pk_survey,
        concat_ws(" ", user.Name, user.Surname) "visitor",
        user.cpf "cpf",
        survey.schedule "schedule"
        from user
        join survey on survey.FK_user = user.PK_user;



create view v_survey as select 
        b_broker_survey.pk_survey,
        b_broker_survey.creci "creci",
        b_broker_survey.broker "broker",
        b_user_survey.cpf "cpf",
        b_user_survey.visitor "visitor",
        b_user_survey.schedule "schedule"
        from b_broker_survey
        join b_user_survey on b_user_survey.pk_survey = b_broker_survey.pk_survey;


