# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.6.3-MariaDB-1:10.6.3+maria~focal)
# Database: project2-collectors-app
# Generation Time: 2021-08-02 12:33:12 +0000
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
  `Common name` varchar(100) DEFAULT NULL,
  `Family` varchar(100) DEFAULT NULL,
  `Genus` varchar(100) DEFAULT NULL,
  `Species` varchar(100) DEFAULT NULL,
  `Date spotted` varchar(100) DEFAULT NULL,
  `Location spotted` varchar(100) DEFAULT NULL,
  `Particularities` varchar(100) DEFAULT NULL,
  `Image path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `insect-collection` WRITE;
/*!40000 ALTER TABLE `insect-collection` DISABLE KEYS */;

INSERT INTO `insect-collection` (`id`, `Common name`, `Family`, `Genus`, `Species`, `Date spotted`, `Location spotted`, `Particularities`, `Image path`)
VALUES
	(1,'Hercules beetle','Scarabaeidae','Dynastes','Dynastes hercules','2018-03-15',NULL,NULL,NULL),
	(2,'Picasso bug','Scutelleridae','Sphaerocoris','Sphaerocoris annulus','2021-03-27',NULL,NULL,NULL),
	(3,'Rosy maple moth','Saturniidae','Dryocampa','Dryocampa rubicunda','2021-03-15',NULL,NULL,NULL),
	(4,'Rainbow grasshopper','Acrididae','Dactylotum','Dactylotum bicolor','2020-11-05',NULL,NULL,NULL),
	(5,'Thistledown velvet ant','Mutilidae','Dasymutilla','Dasymutilla gloriosa','2021-03-15',NULL,NULL,NULL),
	(6,'Black-winged damselfly','Calopterygidae','Calopteryx','Ebony jewelwing','2018-04-11',NULL,NULL,NULL);

/*!40000 ALTER TABLE `insect-collection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
