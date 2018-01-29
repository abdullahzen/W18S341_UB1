CREATE TABLE Category
(
  category_ID   INT(10) AUTO_INCREMENT,
  category_name VARCHAR(20) NOT NULL,
  CONSTRAINT category_ID_UNIQUE
  UNIQUE (category_ID)
)
  ENGINE = InnoDB;


