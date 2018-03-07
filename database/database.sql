CREATE DATABASE  IF NOT EXISTS `SOEN341` /*!40100 DEFAULT CHARACTER SET utf16 */;
USE `SOEN341`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: soen341
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.29-MariaDB

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
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer` (
  `answer_ID` int(10) NOT NULL AUTO_INCREMENT,
  `answer` varchar(250) NOT NULL,
  `user_ID2` int(10) NOT NULL,
  `question_ID1` int(10) NOT NULL,
  `upvotes` tinyint(4) DEFAULT '0',
  `is_hidden` tinyint(4) DEFAULT '0',
  `is_bestanswer` tinyint(4) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`answer_ID`),
  KEY `user_ID_idx` (`user_ID2`),
  KEY `question_ID1` (`question_ID1`),
  CONSTRAINT `question_ID1` FOREIGN KEY (`question_ID1`) REFERENCES `question` (`question_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID2` FOREIGN KEY (`user_ID2`) REFERENCES `user` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_ID` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`category_ID`),
  UNIQUE KEY `category_UNIQUE` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (4,'C'),(1,'Java'),(2,'JavaScript'),(3,'Php');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favourite`
--

DROP TABLE IF EXISTS `favourite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favourite` (
  `favourite_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_ID3` int(10) NOT NULL,
  `question_ID2` int(10) NOT NULL,
  `favourite` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`favourite_ID`),
  KEY `question_ID2` (`question_ID2`),
  KEY `user_ID3` (`user_ID3`),
  CONSTRAINT `question_ID2` FOREIGN KEY (`question_ID2`) REFERENCES `question` (`question_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID3` FOREIGN KEY (`user_ID3`) REFERENCES `user` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favourite`
--

LOCK TABLES `favourite` WRITE;
/*!40000 ALTER TABLE `favourite` DISABLE KEYS */;
/*!40000 ALTER TABLE `favourite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vote`
--

DROP TABLE IF EXISTS `vote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vote` (
  `vote_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_ID4` int(10) NOT NULL,
  `question_ID3` int(10) NOT NULL,
  `vote` tinyint(4) NOT NULL,
  PRIMARY KEY (`vote_ID`),
  KEY `question_ID3` (`question_ID3`),
  KEY `user_ID4` (`user_ID4`),
  CONSTRAINT `question_ID3` FOREIGN KEY (`question_ID3`) REFERENCES `question` (`question_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID4` FOREIGN KEY (`user_ID4`) REFERENCES `user` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vote`
--

LOCK TABLES `vote` WRITE;
/*!40000 ALTER TABLE `vote` DISABLE KEYS */;
/*!40000 ALTER TABLE `vote` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `question_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_ID1` int(10) NOT NULL,
  `category_ID1` int(10) NOT NULL,
  `best_answer_ID` int(10) DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `content` varchar(250) NOT NULL,
  `upvotes` int(10) DEFAULT '0',
  `comments` int(10) DEFAULT '0',
  `favorites` int(10) DEFAULT '0',
  `views` int(10) DEFAULT '0',
  `is_hidden` tinyint(4) DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`question_ID`),
  KEY `user_ID_idx` (`user_ID1`),
  KEY `category_ID1` (`category_ID1`),
  CONSTRAINT `category_ID1` FOREIGN KEY (`category_ID1`) REFERENCES `category` (`category_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID1` FOREIGN KEY (`user_ID1`) REFERENCES `user` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,1,1,0,'Java Test 1','',0,0,0,0,0,'2018-03-02 02:40:34'),(2,1,1,0,'Java Test 2','',0,0,0,0,0,'2018-03-02 02:40:34'),(3,1,2,0,'JS Test 1','',0,0,0,0,0,'2018-03-02 02:40:34'),(4,1,3,0,'PHP Test 1','',0,0,0,0,0,'2018-03-02 02:40:34'),(5,1,4,0,'C Test 1','',0,0,0,0,0,'2018-03-02 02:40:34'),(6,1,1,0,'Java Test 3','',0,0,0,0,0,'2018-03-02 02:40:34'),(7,1,1,0,'Java Test 4','',0,0,0,0,0,'2018-03-02 02:40:34'),(8,1,2,0,'JS Test 2','',0,0,0,0,0,'2018-03-02 02:40:34'),(9,1,2,0,'JS Test 3','',0,0,0,0,0,'2018-03-02 02:40:34'),(10,1,2,0,'JS Test 4','',0,0,0,0,0,'2018-03-02 02:40:34'),(11,1,3,0,'PHP Test 2','',0,0,0,0,0,'2018-03-02 02:40:34'),(12,1,3,0,'PHP Test 3','',0,0,0,0,0,'2018-03-02 02:40:34'),(13,1,3,0,'PHP Test 4','',0,0,0,0,0,'2018-03-02 02:40:34'),(14,1,4,0,'C Test 2','',0,0,0,0,0,'2018-03-02 02:40:34'),(15,1,4,0,'C Test 3','',0,0,0,0,0,'2018-03-02 02:40:34'),(16,1,4,0,'C Test 4','',0,0,0,0,0,'2018-03-02 02:40:34');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rank` int(4) DEFAULT '1',
  `is_Solver` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `user_ID_UNIQUE` (`user_ID`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','$2y$10$.MaT/HTRdOGU68ivMJrBdeozBl585rtSUhbSoxYcG4bXKxvqUZJ9u','admin@soen341.com','2018-03-02 02:10:12',1,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-01 21:41:43
