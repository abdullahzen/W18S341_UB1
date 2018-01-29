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


