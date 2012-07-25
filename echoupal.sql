-- MySQL dump 10.13  Distrib 5.1.37, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: `echoupal`
-- ------------------------------------------------------
-- Server version	5.1.37-1ubuntu5.4

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
-- Table structure for table `clients`
--



DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `cid` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(25) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `extrainfo` text NOT NULL,
  `checked_in` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out_time` time DEFAULT NULL,
  `sanchalak` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
DROP TABLE IF EXISTS `crop`;
CREATE TABLE `crop` (
  `crop_id` varchar(30) NOT NULL,
  `crop_type` varchar(50) NOT NULL,
  `qty_on_hand` int(11) NOT NULL,
  `local_price` double NOT NULL,
  `global_price` double NOT NULL,
  PRIMARY KEY (`crop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop`
--

/*!40000 ALTER TABLE `crop` DISABLE KEYS */;
INSERT INTO `crop` (`crop_id`,`crop_type`,`qty_on_hand`,`local_price`,`global_price`) VALUES 
 ('rice','cereal',101,1000,900),
 ('wheat','cereal',115,1200,850);
/*!40000 ALTER TABLE `crop` ENABLE KEYS */;


--
-- Definition of table `equipments`
--

DROP TABLE IF EXISTS `equipments`;
CREATE TABLE `equipments` (
  `equip_id` varchar(30) NOT NULL,
  `type` int(10) unsigned NOT NULL,
  `manufactur` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `extra_info` varchar(150) NOT NULL,
  PRIMARY KEY (`equip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

/*!40000 ALTER TABLE `equipments` DISABLE KEYS */;
INSERT INTO `equipments` (`equip_id`,`type`,`manufactur`,`price`,`extra_info`) VALUES 
 ('eq1',2,'hm',1000,'length=10cm'),
 ('eq2',4,'altir',1350,'width=20cm');
/*!40000 ALTER TABLE `equipments` ENABLE KEYS */;


--
-- Definition of table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `name` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `extra_info` varchar(150) NOT NULL,
  `other` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`name`,`email_address`,`type`,`extra_info`,`other`) VALUES 
 ('animesh','animeshsi@iiitdmj.ac.in',1,'Good Site','Good UI'),
 ('ravi','raviba@iiitdmj.ac.in',2,'awesome Site','awesome UI');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;


--
-- Definition of table `sarpanch`
--

DROP TABLE IF EXISTS `sarpanch`;
CREATE TABLE `sarpanch` (
  `sarpanch_id` varchar(50) NOT NULL,
  `area_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarpanch`
--

/*!40000 ALTER TABLE `sarpanch` DISABLE KEYS */;
INSERT INTO `sarpanch` (`sarpanch_id`,`area_code`) VALUES 
 ('ramprasad','482002'),
 ('ramdayal','482023');
/*!40000 ALTER TABLE `sarpanch` ENABLE KEYS */;


--
-- Definition of table `weather`
--

DROP TABLE IF EXISTS `weather`;
CREATE TABLE `weather` (
  `date` datetime NOT NULL,
  `location` varchar(45) NOT NULL,
  `amount_of_rain` double NOT NULL,
  `temperature` double NOT NULL,
  `humidity` double NOT NULL,
  `sunny_condition` varchar(50) NOT NULL,
  `wind` varchar(50) NOT NULL,
  PRIMARY KEY (`date`,`location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weather`
--

/*!40000 ALTER TABLE `weather` DISABLE KEYS */;
INSERT INTO `weather` (`date`,`location`,`amount_of_rain`,`temperature`,`humidity`,`sunny_condition`,`wind`) VALUES 
 ('2011-04-11 00:00:00','phulera',180,392,15.2,'rainy','28kmph'),
 ('2011-04-12 00:00:00','madhopur',120,312,70.2,'sunny','35kmph');
/*!40000 ALTER TABLE `weather` ENABLE KEYS */;
DROP TABLE `profile_data` if exists;
CREATE TABLE `profile_data`(
description
bin_data longblob

)

UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-04-08 20:06:26
