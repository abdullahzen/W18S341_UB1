CREATE TABLE `soen341`.`notification` (
  `id` INT NOT NULL,
  `uid` INT NOT NULL,
  `fromUID` INT NOT NULL,
  `url` VARCHAR(45) NOT NULL,
  `content` VARCHAR(45) NULL,
  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

ALTER TABLE `soen341`.`notification` 
ADD COLUMN `notificationType` INT NOT NULL AFTER `url`;

ALTER TABLE `soen341`.`notification` 
ADD COLUMN `pid` INT NULL DEFAULT NULL AFTER `content`;

ALTER TABLE `soen341`.`notification` 
ADD COLUMN `read` INT NULL DEFAULT '0' AFTER `pid`;

ALTER TABLE `soen341`.`notification` 
CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT ;
