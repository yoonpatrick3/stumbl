-- MySQL dump 10.16  Distrib 10.1.34-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: stumbldb
-- ------------------------------------------------------
-- Server version	10.1.34-MariaDB

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
-- Current Database: `stumbldb`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `stumbldb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `stumbldb`;

--
-- Table structure for table `interests`
--

DROP TABLE IF EXISTS `interests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interests` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `fname` text,
  `music` text,
  `movie` text,
  `school` text,
  `major` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interests`
--

LOCK TABLES `interests` WRITE;
/*!40000 ALTER TABLE `interests` DISABLE KEYS */;
INSERT INTO `interests` VALUES (1,'Patrick','Jazz','Avengers','Fremd','Math'),(2,'Robert','Classical','Deadpool','Palatine','English'),(3,'Mrs. Denna','Pop','Superman','Fremd','Math'),(4,'asd','asd','asd','asd','asd'),(5,'test2','trombone','psychos','asd','asd'),(6,'asda','asdad','VILLAINS','asda','asdad'),(7,'Music','rockABILLY','asdas','asdad','asdadad'),(8,'test8','bluegrass','finks','asda','adaf'),(9,'Matt','Metal','avengers','fremd','computer science'),(10,'Bob','Classical','Deadpool','Fremd','Math'),(11,'<b>Brother</b>','<i> test</i>','test','test','asd');
/*!40000 ALTER TABLE `interests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'yoon1048','4a0f8a73e473b604dc395a618a25d295'),(2,'test1','5f4dcc3b5aa765d61d8327deb882cf99'),(3,'sdenna','5f4dcc3b5aa765d61d8327deb882cf99'),(4,'asd','7815696ecbf1c96e6894b779456d330e'),(5,'test3','5f4dcc3b5aa765d61d8327deb882cf99'),(6,'test4','5f4dcc3b5aa765d61d8327deb882cf99'),(7,'test9','739969b53246b2c727850dbb3490ede6'),(8,'test8','5e40d09fa0529781afd1254a42913847'),(9,'bourg','49f68a5c8493ec2c0bf489821c21fc3b'),(10,'testtesttest','5f4dcc3b5aa765d61d8327deb882cf99'),(11,'josebrother','975754fd3874d187f687fb721d4b29c6');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-03 16:58:22
