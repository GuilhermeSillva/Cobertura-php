-- MySQL dump 10.13  Distrib 5.7.23, for Win64 (x86_64)
--
-- Host: localhost    Database: cobertura
-- ------------------------------------------------------
-- Server version	5.7.23-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `apartment`
--

DROP TABLE IF EXISTS `apartment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apartment` (
  `pk_apartment` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `floor` int(11) NOT NULL,
  `fk_feature` int(10) unsigned NOT NULL,
  `fk_rent` int(10) unsigned DEFAULT NULL,
  `fk_sale` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_apartment`),
  KEY `apartment_fk_feature_foreign` (`fk_feature`),
  KEY `apartment_fk_rent_foreign` (`fk_rent`),
  KEY `apartment_fk_sale_foreign` (`fk_sale`),
  CONSTRAINT `apartment_fk_feature_foreign` FOREIGN KEY (`fk_feature`) REFERENCES `feature` (`pk_feature`),
  CONSTRAINT `apartment_fk_rent_foreign` FOREIGN KEY (`fk_rent`) REFERENCES `rent` (`pk_rent`),
  CONSTRAINT `apartment_fk_sale_foreign` FOREIGN KEY (`fk_sale`) REFERENCES `sale` (`pk_sale`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apartment`
--

LOCK TABLES `apartment` WRITE;
/*!40000 ALTER TABLE `apartment` DISABLE KEYS */;
INSERT INTO `apartment` VALUES (1,4,2,2,2,'2018-11-21 15:55:42',NULL),(2,5,3,3,NULL,'2018-11-21 16:36:09',NULL);
/*!40000 ALTER TABLE `apartment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bail`
--

DROP TABLE IF EXISTS `bail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bail` (
  `pk_bail` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` double NOT NULL,
  `withdrawal` tinyint(1) NOT NULL DEFAULT '1',
  `fk_bank_account` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_bail`),
  KEY `bail_fk_bank_account_foreign` (`fk_bank_account`),
  CONSTRAINT `bail_fk_bank_account_foreign` FOREIGN KEY (`fk_bank_account`) REFERENCES `bank_account` (`pk_bank_account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bail`
--

LOCK TABLES `bail` WRITE;
/*!40000 ALTER TABLE `bail` DISABLE KEYS */;
/*!40000 ALTER TABLE `bail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_account`
--

DROP TABLE IF EXISTS `bank_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank_account` (
  `pk_bank_account` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cpf/cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_bank_account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_account`
--

LOCK TABLES `bank_account` WRITE;
/*!40000 ALTER TABLE `bank_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `bank_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `broker`
--

DROP TABLE IF EXISTS `broker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `broker` (
  `pk_broker` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `creci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` int(10) unsigned NOT NULL,
  `fk_user` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_broker`),
  KEY `broker_region_foreign` (`region`),
  KEY `broker_fk_user_foreign` (`fk_user`),
  CONSTRAINT `broker_fk_user_foreign` FOREIGN KEY (`fk_user`) REFERENCES `user` (`pk_user`),
  CONSTRAINT `broker_region_foreign` FOREIGN KEY (`region`) REFERENCES `state` (`pk_state`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `broker`
--

LOCK TABLES `broker` WRITE;
/*!40000 ALTER TABLE `broker` DISABLE KEYS */;
INSERT INTO `broker` VALUES (1,'44444',1,1,'2018-11-20 10:48:02',NULL);
/*!40000 ALTER TABLE `broker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `pk_city` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_state` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_city`),
  KEY `city_fk_state_foreign` (`fk_state`),
  CONSTRAINT `city_fk_state_foreign` FOREIGN KEY (`fk_state`) REFERENCES `state` (`pk_state`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'Sanja',1,'2018-11-20 10:48:37',NULL);
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `condominium`
--

DROP TABLE IF EXISTS `condominium`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condominium` (
  `pk_condominium` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` double NOT NULL,
  `animals` tinyint(1) NOT NULL DEFAULT '0',
  `courts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `playground` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_halls` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additionals` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_condominium`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condominium`
--

LOCK TABLES `condominium` WRITE;
/*!40000 ALTER TABLE `condominium` DISABLE KEYS */;
INSERT INTO `condominium` VALUES (1,890,1,'2','1','3','So tem gente bonita','2018-11-20 12:22:26',NULL),(2,700,1,'1','1','2','Condominio Topper','2018-11-21 15:56:35',NULL),(3,700,1,'1','1','1','Topzera','2018-11-21 16:36:09',NULL);
/*!40000 ALTER TABLE `condominium` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `district` (
  `pk_district` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_city` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_district`),
  KEY `district_fk_city_foreign` (`fk_city`),
  CONSTRAINT `district_fk_city_foreign` FOREIGN KEY (`fk_city`) REFERENCES `city` (`pk_city`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `district`
--

LOCK TABLES `district` WRITE;
/*!40000 ALTER TABLE `district` DISABLE KEYS */;
INSERT INTO `district` VALUES (1,'Aquarius',1,'2018-11-20 10:49:44',NULL);
/*!40000 ALTER TABLE `district` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feature`
--

DROP TABLE IF EXISTS `feature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feature` (
  `pk_feature` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `property_metreage` double NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `suites` int(11) DEFAULT NULL,
  `garage` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additionals` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_feature`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feature`
--

LOCK TABLES `feature` WRITE;
/*!40000 ALTER TABLE `feature` DISABLE KEYS */;
INSERT INTO `feature` VALUES (1,800,3,2,2,'Casa gigante','tem ar condicionado industrial','2018-11-20 11:10:26',NULL),(2,530,3,1,2,'Ap do Latino','Tem uma lareira','2018-11-21 15:53:57','2018-11-21 15:57:19'),(3,480,2,1,1,'Apzão','Tem vista pro urbanova','2018-11-21 16:33:03',NULL),(4,980,4,3,4,'Mansão','Bem grande','2018-11-21 16:33:36',NULL);
/*!40000 ALTER TABLE `feature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gender` (
  `pk_gender` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_gender`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gender`
--

LOCK TABLES `gender` WRITE;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` VALUES (1,'Mascuino','2018-11-20 10:28:34',NULL),(2,'Feminino','2018-11-20 10:29:43',NULL),(3,'Outros','2018-11-20 10:29:43',NULL);
/*!40000 ALTER TABLE `gender` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `house`
--

DROP TABLE IF EXISTS `house`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `house` (
  `pk_house` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_metreage` double DEFAULT NULL,
  `built_metreage` double DEFAULT NULL,
  `fk_feature` int(10) unsigned NOT NULL,
  `fk_rent` int(10) unsigned DEFAULT NULL,
  `fk_sale` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_house`),
  KEY `house_fk_feature_foreign` (`fk_feature`),
  KEY `house_fk_rent_foreign` (`fk_rent`),
  KEY `house_fk_sale_foreign` (`fk_sale`),
  CONSTRAINT `house_fk_feature_foreign` FOREIGN KEY (`fk_feature`) REFERENCES `feature` (`pk_feature`),
  CONSTRAINT `house_fk_rent_foreign` FOREIGN KEY (`fk_rent`) REFERENCES `rent` (`pk_rent`),
  CONSTRAINT `house_fk_sale_foreign` FOREIGN KEY (`fk_sale`) REFERENCES `sale` (`pk_sale`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `house`
--

LOCK TABLES `house` WRITE;
/*!40000 ALTER TABLE `house` DISABLE KEYS */;
INSERT INTO `house` VALUES (1,900,750,1,1,1,'2018-11-20 12:19:52','2018-11-21 15:58:00'),(2,1000,990,4,NULL,4,'2018-11-21 16:36:09',NULL);
/*!40000 ALTER TABLE `house` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insurer`
--

DROP TABLE IF EXISTS `insurer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `insurer` (
  `pk_insurer` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double NOT NULL,
  `initiation` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_insurer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insurer`
--

LOCK TABLES `insurer` WRITE;
/*!40000 ALTER TABLE `insurer` DISABLE KEYS */;
/*!40000 ALTER TABLE `insurer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2018_11_09_143833_gender',1),(2,'2018_11_09_144243_user',1),(3,'2018_11_09_144321_state',1),(4,'2018_11_09_144440_broker',1),(5,'2018_11_09_152626_city',1),(6,'2018_11_09_152832_district',1),(7,'2018_11_09_153038_street',1),(8,'2018_11_09_153324_feature',1),(9,'2018_11_09_154553_insurer',1),(10,'2018_11_09_154950_bank_account',1),(11,'2018_11_09_155158_bail',1),(12,'2018_11_09_223536_warranty',1),(13,'2018_11_09_224543_rent',1),(14,'2018_11_09_224903_sale',1),(15,'2018_11_09_225046_apartment',1),(16,'2018_11_09_225611_house',1),(17,'2018_11_09_230245_condominium',1),(18,'2018_11_09_230608_season',1),(19,'2018_11_09_230714_realty',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realty`
--

DROP TABLE IF EXISTS `realty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realty` (
  `pk_realty` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` int(11) NOT NULL DEFAULT '8',
  `exclusivity` tinyint(1) NOT NULL DEFAULT '0',
  `exchange` tinyint(1) NOT NULL DEFAULT '0',
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `fk_user` int(10) unsigned NOT NULL,
  `fk_street` int(10) unsigned NOT NULL,
  `fk_house` int(10) unsigned DEFAULT NULL,
  `fk_apartment` int(10) unsigned DEFAULT NULL,
  `fk_condominium` int(10) unsigned DEFAULT NULL,
  `fk_season` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_realty`),
  KEY `realty_fk_user_foreign` (`fk_user`),
  KEY `realty_fk_street_foreign` (`fk_street`),
  KEY `realty_fk_house_foreign` (`fk_house`),
  KEY `realty_fk_apartment_foreign` (`fk_apartment`),
  KEY `realty_fk_condominium_foreign` (`fk_condominium`),
  KEY `realty_fk_season_foreign` (`fk_season`),
  CONSTRAINT `realty_fk_apartment_foreign` FOREIGN KEY (`fk_apartment`) REFERENCES `apartment` (`pk_apartment`),
  CONSTRAINT `realty_fk_condominium_foreign` FOREIGN KEY (`fk_condominium`) REFERENCES `condominium` (`pk_condominium`),
  CONSTRAINT `realty_fk_house_foreign` FOREIGN KEY (`fk_house`) REFERENCES `house` (`pk_house`),
  CONSTRAINT `realty_fk_season_foreign` FOREIGN KEY (`fk_season`) REFERENCES `season` (`pk_season`),
  CONSTRAINT `realty_fk_street_foreign` FOREIGN KEY (`fk_street`) REFERENCES `street` (`pk_street`),
  CONSTRAINT `realty_fk_user_foreign` FOREIGN KEY (`fk_user`) REFERENCES `user` (`pk_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realty`
--

LOCK TABLES `realty` WRITE;
/*!40000 ALTER TABLE `realty` DISABLE KEYS */;
INSERT INTO `realty` VALUES (1,'Casa venda aquarius',8,0,0,1,2,1,1,NULL,1,NULL,'2018-11-20 12:23:39',NULL),(2,'Ap muito bonito',6,1,0,1,3,1,NULL,1,2,NULL,'2018-11-21 15:58:52',NULL),(3,'Ap de frente pra terrenão',8,0,0,1,2,2,NULL,2,3,NULL,'2018-11-21 16:36:09',NULL),(4,'Mansão Thug Stronda',8,0,0,1,2,2,2,NULL,NULL,NULL,'2018-11-21 16:36:09',NULL);
/*!40000 ALTER TABLE `realty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rent` (
  `pk_rent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `furniture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_payment` double NOT NULL,
  `income` double NOT NULL,
  `fk_warranty` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_rent`),
  KEY `rent_fk_warranty_foreign` (`fk_warranty`),
  CONSTRAINT `rent_fk_warranty_foreign` FOREIGN KEY (`fk_warranty`) REFERENCES `warranty` (`pk_warranty`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rent`
--

LOCK TABLES `rent` WRITE;
/*!40000 ALTER TABLE `rent` DISABLE KEYS */;
INSERT INTO `rent` VALUES (1,'1',2000,7000,NULL,'2018-11-20 12:17:58',NULL),(2,'1',1890,6000,NULL,'2018-11-21 15:54:56',NULL),(3,'0',3000,10000,NULL,'2018-11-21 16:34:13',NULL);
/*!40000 ALTER TABLE `rent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sale` (
  `pk_sale` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` double NOT NULL,
  `iptu` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_sale`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale`
--

LOCK TABLES `sale` WRITE;
/*!40000 ALTER TABLE `sale` DISABLE KEYS */;
INSERT INTO `sale` VALUES (1,80000,1,'2018-11-20 12:17:58',NULL),(2,70000,1,'2018-11-21 16:11:38',NULL),(3,100000,1,'2018-11-21 16:34:42',NULL),(4,100000,1,'2018-11-21 16:34:42',NULL);
/*!40000 ALTER TABLE `sale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `season`
--

DROP TABLE IF EXISTS `season`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `season` (
  `pk_season` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `daily_rate` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_season`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `season`
--

LOCK TABLES `season` WRITE;
/*!40000 ALTER TABLE `season` DISABLE KEYS */;
/*!40000 ALTER TABLE `season` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `season_contract`
--

DROP TABLE IF EXISTS `season_contract`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `season_contract` (
  `pk_season_contract` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_realty` int(10) unsigned NOT NULL,
  `fk_user` int(10) unsigned NOT NULL,
  `fk_bank_account` int(10) unsigned NOT NULL,
  `id_contract` int(10) unsigned NOT NULL,
  `contract_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initiation` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_season_contract`),
  KEY `season_contract_fk_realty_foreign` (`fk_realty`),
  KEY `season_contract_fk_user_foreign` (`fk_user`),
  KEY `season_contract_fk_bank_account_foreign` (`fk_bank_account`),
  CONSTRAINT `season_contract_fk_bank_account_foreign` FOREIGN KEY (`fk_bank_account`) REFERENCES `bank_account` (`pk_bank_account`),
  CONSTRAINT `season_contract_fk_realty_foreign` FOREIGN KEY (`fk_realty`) REFERENCES `realty` (`pk_realty`),
  CONSTRAINT `season_contract_fk_user_foreign` FOREIGN KEY (`fk_user`) REFERENCES `user` (`pk_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `season_contract`
--

LOCK TABLES `season_contract` WRITE;
/*!40000 ALTER TABLE `season_contract` DISABLE KEYS */;
/*!40000 ALTER TABLE `season_contract` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `pk_state` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_state`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` VALUES (1,'SP','2018-11-20 10:46:24',NULL),(2,'MG','2018-11-20 10:46:36',NULL),(3,'RJ','2018-11-20 10:46:53',NULL);
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `street`
--

DROP TABLE IF EXISTS `street`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `street` (
  `pk_street` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_district` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_street`),
  KEY `street_fk_district_foreign` (`fk_district`),
  CONSTRAINT `street_fk_district_foreign` FOREIGN KEY (`fk_district`) REFERENCES `district` (`pk_district`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `street`
--

LOCK TABLES `street` WRITE;
/*!40000 ALTER TABLE `street` DISABLE KEYS */;
INSERT INTO `street` VALUES (1,'Rua Salmao','4444000',1,'2018-11-20 10:51:19',NULL),(2,'Avenida Cassiano Ricardo','1312132',1,'2018-11-21 16:32:07',NULL);
/*!40000 ALTER TABLE `street` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `pk_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `phone` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_gender` int(10) unsigned DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_user`),
  UNIQUE KEY `user_email_unique` (`email`),
  UNIQUE KEY `user_cpf_unique` (`cpf`),
  UNIQUE KEY `user_rg_unique` (`rg`),
  KEY `user_fk_gender_foreign` (`fk_gender`),
  CONSTRAINT `user_fk_gender_foreign` FOREIGN KEY (`fk_gender`) REFERENCES `gender` (`pk_gender`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Finazzi','Silva','1990-02-02','','6546','finazzi@email.com','senha123','4654',1,'mae finazzi',1,'2018-11-20 10:36:04',NULL),(2,'Shevchenko','Eevee','1987-05-05','','122','shev@email.com','teste123','100',1,'mae shev',0,'2018-11-20 10:40:07',NULL),(3,'Arce','Lucario','1970-05-01','','1321','arce@email.com','teste321','2',1,'mae lucario',0,'2018-11-20 10:45:20',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warranty`
--

DROP TABLE IF EXISTS `warranty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warranty` (
  `pk_warranty` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_insurer` int(10) unsigned DEFAULT NULL,
  `fk_bail` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_warranty`),
  KEY `warranty_fk_insurer_foreign` (`fk_insurer`),
  KEY `warranty_fk_bail_foreign` (`fk_bail`),
  CONSTRAINT `warranty_fk_bail_foreign` FOREIGN KEY (`fk_bail`) REFERENCES `bail` (`pk_bail`),
  CONSTRAINT `warranty_fk_insurer_foreign` FOREIGN KEY (`fk_insurer`) REFERENCES `insurer` (`pk_insurer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warranty`
--

LOCK TABLES `warranty` WRITE;
/*!40000 ALTER TABLE `warranty` DISABLE KEYS */;
/*!40000 ALTER TABLE `warranty` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-22 20:33:42
