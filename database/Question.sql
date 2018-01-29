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


