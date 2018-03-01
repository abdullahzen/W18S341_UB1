CREATE DATABASE  IF NOT EXISTS `SOEN341` /*!40100 DEFAULT CHARACTER SET utf16 */;
USE `SOEN341`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: SOEN341UB1DB
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `Answer`
--

DROP TABLE IF EXISTS `Answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Answer` (
  `answer_ID` int(10) NOT NULL AUTO_INCREMENT,
  `answer` varchar(250) NOT NULL,
  `user_ID2` int(10) NOT NULL,
  `question_ID1` int(10) NOT NULL,
  `upvotes` tinyint(4) NOT NULL DEFAULT '0',
  `is_hidden` tinyint(4) NOT NULL DEFAULT '0',
  `is_bestanswer` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answer_ID`),
  UNIQUE KEY `answer_ID_UNIQUE` (`answer_ID`),
  KEY `user_ID_idx` (`user_ID2`),
  CONSTRAINT `question_ID1` FOREIGN KEY (`question_ID1`) REFERENCES `Question` (`question_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID2` FOREIGN KEY (`user_ID2`) REFERENCES `User` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Answer`
--

LOCK TABLES `Answer` WRITE;
/*!40000 ALTER TABLE `Answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `Answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Category`
--

DROP TABLE IF EXISTS `Category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Category` (
  `category_ID` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`category_ID`),
  UNIQUE KEY `category_ID_UNIQUE` (`category_ID`),
  UNIQUE KEY `category_UNIQUE` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Category`
--

LOCK TABLES `Category` WRITE;
/*!40000 ALTER TABLE `Category` DISABLE KEYS */;
/*!40000 ALTER TABLE `Category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Favourite`
--

DROP TABLE IF EXISTS `Favourite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Favourite` (
  `favourite_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_ID3` int(10) NOT NULL,
  `question_ID2` int(10) NOT NULL,
  `favourite` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`favourite_ID`),
  UNIQUE KEY `favourite_ID_UNIQUE` (`favourite_ID`),
  CONSTRAINT `question_ID2` FOREIGN KEY (`question_ID2`) REFERENCES `Question` (`question_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID3` FOREIGN KEY (`user_ID3`) REFERENCES `User` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Favourite`
--

LOCK TABLES `Favourite` WRITE;
/*!40000 ALTER TABLE `Favourite` DISABLE KEYS */;
/*!40000 ALTER TABLE `Favourite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Question`
--

DROP TABLE IF EXISTS `Question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Question` (
  `question_ID` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `user_ID1` int(10) NOT NULL,
  `category_ID1` int(10) NOT NULL,
  PRIMARY KEY (`question_ID`),
  UNIQUE KEY `question_ID_UNIQUE` (`question_ID`),
  KEY `user_ID_idx` (`user_ID1`),
  CONSTRAINT `category_ID1` FOREIGN KEY (`category_ID1`) REFERENCES `Category` (`category_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID1` FOREIGN KEY (`user_ID1`) REFERENCES `User` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Question`
--

LOCK TABLES `Question` WRITE;
/*!40000 ALTER TABLE `Question` DISABLE KEYS */;
/*!40000 ALTER TABLE `Question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rank` int(4) DEFAULT '1',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_Solver` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `user_ID_UNIQUE` (`user_ID`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-01 10:54:31
