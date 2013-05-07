SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `balance` DEFAULT CHARACTER SET utf8 ;
USE `balance` ;

-- -----------------------------------------------------
-- Table `balance`.`accounts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `balance`.`accounts` ;

CREATE  TABLE IF NOT EXISTS `balance`.`accounts` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(250) NULL DEFAULT NULL ,
  `balance` DECIMAL(10,2) NULL DEFAULT NULL ,
  `user_id` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `balance`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `balance`.`categories` ;

CREATE  TABLE IF NOT EXISTS `balance`.`categories` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(250) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 37
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `balance`.`entries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `balance`.`entries` ;

CREATE  TABLE IF NOT EXISTS `balance`.`entries` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `created` DATE NULL DEFAULT NULL ,
  `ammount` DECIMAL(10,2) NULL DEFAULT NULL ,
  `comment` TINYTEXT NULL DEFAULT NULL ,
  `type_id` INT(11) NULL DEFAULT NULL ,
  `user_id` INT(11) NULL DEFAULT NULL ,
  `category_id` INT(11) NULL DEFAULT NULL ,
  `account_id` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 3730
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `balance`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `balance`.`roles` ;

CREATE  TABLE IF NOT EXISTS `balance`.`roles` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `balance`.`tokens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `balance`.`tokens` ;

CREATE  TABLE IF NOT EXISTS `balance`.`tokens` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(11) NULL DEFAULT NULL ,
  `create_date` DATETIME NULL DEFAULT NULL ,
  `expire_date` DATETIME NULL DEFAULT NULL ,
  `token` CHAR(32) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 47
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `balance`.`types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `balance`.`types` ;

CREATE  TABLE IF NOT EXISTS `balance`.`types` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(250) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `balance`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `balance`.`users` ;

CREATE  TABLE IF NOT EXISTS `balance`.`users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(250) NULL DEFAULT NULL ,
  `lastname` VARCHAR(250) NULL DEFAULT NULL ,
  `email` VARCHAR(250) NULL DEFAULT NULL ,
  `password` CHAR(32) NULL DEFAULT NULL ,
  `role_id` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;

USE `balance` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
