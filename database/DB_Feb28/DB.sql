/*! User table */

DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `user_ID` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rank` int(4) DEFAULT '1',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `user_ID_UNIQUE` (`user_ID`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

/*! Question table */

DROP TABLE IF EXISTS `Question`;
CREATE TABLE `Question` (
  `question_ID` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `user_ID1` int(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`question_ID`),
  UNIQUE KEY `question_ID_UNIQUE` (`question_ID`),
  UNIQUE KEY `user_ID_UNIQUE` (`user_ID1`),
  KEY `user_ID_idx` (`user_ID1`),
  CONSTRAINT `user_ID1` FOREIGN KEY (`user_ID1`) REFERENCES `User` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

/*! Answer table */

DROP TABLE IF EXISTS `Answer`;
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
  UNIQUE KEY `user_ID_UNIQUE` (`user_ID2`),
  UNIQUE KEY `question_ID_UNIQUE` (`question_ID1`),
  KEY `user_ID_idx` (`user_ID2`),
  CONSTRAINT `question_ID1` FOREIGN KEY (`question_ID1`) REFERENCES `Question` (`question_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID2` FOREIGN KEY (`user_ID2`) REFERENCES `User` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION) ENGINE=InnoDB DEFAULT CHARSET=utf16;
/*!40101 SET character_set_client = @saved_cs_client */;

/*! Favourite table */

DROP TABLE IF EXISTS `Favourite`;

CREATE TABLE `Favourite` (
  `favourite_ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_ID3` int(10) NOT NULL,
  `question_ID2` int(10) NOT NULL,
  `favourite` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`favourite_ID`),
  UNIQUE KEY `favourite_ID_UNIQUE` (`favourite_ID`),
  UNIQUE KEY `user_ID3_UNIQUE` (`user_ID3`),
  UNIQUE KEY `question_ID2_UNIQUE` (`question_ID2`),
  CONSTRAINT `question_ID2` FOREIGN KEY (`question_ID2`) REFERENCES `Question` (`question_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_ID3` FOREIGN KEY (`user_ID3`) REFERENCES `User` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf16;
