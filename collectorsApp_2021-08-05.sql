# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.6.3-MariaDB-1:10.6.3+maria~focal)
# Database: collectorsApp
# Generation Time: 2021-08-05 14:50:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table insect-collection
# ------------------------------------------------------------

DROP TABLE IF EXISTS `insect-collection`;

CREATE TABLE `insect-collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `common_name` varchar(100) DEFAULT NULL,
  `species` varchar(100) DEFAULT NULL,
  `date_spotted` varchar(100) DEFAULT NULL,
  `country_spotted` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `insect-collection` WRITE;
/*!40000 ALTER TABLE `insect-collection` DISABLE KEYS */;

INSERT INTO `insect-collection` (`id`, `common_name`, `species`, `date_spotted`, `country_spotted`, `size`, `image_path`)
VALUES
	(1,'Jewel Bug','Scutiphora Pedicellata','2018-03-15','India','5-20 mm','images/jewel_bug.jpeg'),
	(2,'Nine Spotted Moth','Amata Phegea','2021-03-27','Germany','37-42 mm','images/nine_spotted_moth.jpeg'),
	(3,'Praying Mantis','Mantodea Hierodulinae','2018-07-11','Australia','47-56 mm','images/praying_mantis.jpeg'),
	(4,'Candy-Striped Leafhopper','Graphocephala Coccinea','2012-06-09','Canada','6.7–8.4 mm','images/candy_striped_leafhopper.jpeg'),
	(5,'Plant Hopper','Acanalonia Conica','2021-03-15','Canada','10-50 mm','images/plant_hopper.jpeg'),
	(6,'Gypsy Moth','Lymantria Dispar Dispar','2015-08-28','United Kingdom','20-35 mm','images/gypsy_moth.jpeg'),
	(7,'Swallowtail Catterpillar','Papilio Machaon','2019-01-05','Indonesia','up to 55 mm','images/swallowtail_caterpillar.jpeg'),
	(8,'Blue-Winged Eurybia','Eurybia Lycisca','2012-06-09','Costa Rica','40-50 mm','images/blue_winged_eurybia.jpeg'),
	(9,'Sweet Potato Weevil','Cylas Formicarius','2020-06-12','Japan','7.5-8 mm','images/sweet_potato_weevil.jpeg');

/*!40000 ALTER TABLE `insect-collection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
