/*User table
 */

CREATE TABLE User
(
  user_ID  INT(10) AUTO_INCREMENT,
  password VARCHAR(20) NOT NULL,
  email    VARCHAR(50) NOT NULL,
  username VARCHAR(10) NOT NULL,
  PRIMARY KEY (user_ID, password),
  CONSTRAINT user_ID_UNIQUE
  UNIQUE (user_ID),
  CONSTRAINT email_UNIQUE
  UNIQUE (email),
  CONSTRAINT username_UNIQUE
  UNIQUE (username)
)
  ENGINE = InnoDB;

/*Question table
 */

CREATE TABLE Question
(
  question_ID INT(10) AUTO_INCREMENT
    PRIMARY KEY,
  user_ID     INT(10)      NOT NULL,
  question    VARCHAR(250) NOT NULL,
  categoryID  INT(10)      NOT NULL,
  CONSTRAINT question_ID_UNIQUE
  UNIQUE (question_ID),
  CONSTRAINT user_ID_UNIQUE
  UNIQUE (user_ID),
  CONSTRAINT user_ID
  FOREIGN KEY (user_ID) REFERENCES User (user_ID),
  CONSTRAINT category_ID
  FOREIGN KEY (categoryID) REFERENCES Category (category_ID)
)
  ENGINE = InnoDB;

CREATE INDEX user_ID_idx
  ON Question (user_ID);

CREATE INDEX category_ID_idx
  ON Question (categoryID);

/*Answer table
 */

CREATE TABLE Answer
(
  answer_ID  INT(10) AUTO_INCREMENT
    PRIMARY KEY,
  userID     INT(10) NOT NULL,
  questionID INT(10) NOT NULL,
  categoryID INT(10) NOT NULL,
  solver     TINYINT NULL,
  CONSTRAINT answer_ID_UNIQUE
  UNIQUE (answer_ID),
  CONSTRAINT userID_UNIQUE
  UNIQUE (userID),
  CONSTRAINT question_ID_UNIQUE
  UNIQUE (questionID),
  CONSTRAINT categoryID_UNIQUE
  UNIQUE (categoryID),
  CONSTRAINT userID
  FOREIGN KEY (userID) REFERENCES User (user_ID),
  CONSTRAINT questionID
  FOREIGN KEY (questionID) REFERENCES Question (question_ID),
  CONSTRAINT categoryID
  FOREIGN KEY (categoryID) REFERENCES Category (category_ID)
)
  ENGINE = InnoDB;

/*Category table
 */

CREATE TABLE Category
(
  category_ID   INT(10) AUTO_INCREMENT,
  category_name VARCHAR(20) NOT NULL,
  CONSTRAINT category_ID_UNIQUE
  UNIQUE (category_ID)
)
  ENGINE = InnoDB;
