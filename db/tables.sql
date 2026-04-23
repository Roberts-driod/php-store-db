-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema store_dev
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema store_dev
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `store_dev` DEFAULT CHARACTER SET utf8 ;
USE `store_dev` ;

-- -----------------------------------------------------
-- Table `store_dev`.`Customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `store_dev`.`Customers` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NULL,
  `surname` VARCHAR(45) NULL,
  `birthdate` DATE NULL,
  `email` VARCHAR(255) NULL,
  `points` INT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `store_dev`.`Orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `store_dev`.`Orders` (
  `order_id` INT NOT NULL AUTO_INCREMENT,
  `Customers_Id` INT NOT NULL,
  `status` VARCHAR(255) NULL,
  `delivery_date` DATETIME NULL,
  `order_date` DATE NOT NULL,
  `comments` TEXT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Orders_Customers_idx` (`Customers_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Orders_Customers`
    FOREIGN KEY (`Customers_Id`)
    REFERENCES `store_dev`.`Customers` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- sample data

insert into Customers()
values(default,"Jame","Rokc",date(now() - interval 20 year), "lostFather@gmail.com", 10),
(default,"Diana","Riame",date(now() - interval 30 year), "DianaNN@gmail.com", 0),
(default,"Jim","Care",date(now() - interval 60 year), "Careman@gmail.com", 0),
(default,"Richard","Hellno",date(now() - interval 25 year), "Rihardoo@gmail.com", 0);

insert into Orders()
values
(default, 1, "Ordered", null, date(now() - interval 2 month), null),
(default, 1, "Ordered", null, date(now() - interval 4 month), null),
(default, 1, "shipped", null, date(now() - interval 7 month), null),
(default, 2, "Ordered", null, date(now() - interval 22 month), null),
(default, 3, "Ordered", null, date(now() - interval 4 month), null),
(default, 3, "delivered", now(), date(now() - interval 8 month), null),
(default, 1, "Ordered", null, date(now() - interval 2 month), null);

