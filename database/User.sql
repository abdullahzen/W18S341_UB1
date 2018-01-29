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


