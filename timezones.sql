-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema timezones
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema timezones
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `timezones` DEFAULT CHARACTER SET utf8 ;
USE `timezones` ;

-- -----------------------------------------------------
-- Table `timezones`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `timezones`.`roles` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `timezones`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `timezones`.`users` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(32) NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(500) NOT NULL,
  `roleId` BIGINT(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username` (`username` ASC) ,
  INDEX `roleId` (`roleId` ASC) ,
  CONSTRAINT `users_ibfk_1`
    FOREIGN KEY (`roleId`)
    REFERENCES `timezones`.`roles` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 22
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `timezones`.`timezones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `timezones`.`timezones` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(32) NULL DEFAULT NULL,
  `name` VARCHAR(100) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `differenceGMT` VARCHAR(3) NOT NULL,
  `currentTime` VARCHAR(50) NULL DEFAULT NULL,
  `userId` BIGINT(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name` (`name` ASC) ,
  INDEX `userId` (`userId` ASC) ,
  CONSTRAINT `timezones_ibfk_1`
    FOREIGN KEY (`userId`)
    REFERENCES `timezones`.`users` (`id`)
    ON DELETE SET NULL)
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8;


insert into timezones.roles(id, name) values (1,'admin'),(2,'regularUser'),(3,'userManager');
 
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
