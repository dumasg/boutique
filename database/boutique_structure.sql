-- MySQL Script generated by MySQL Workbench
-- Thu Feb  1 13:55:44 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema boutique
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `categories` ;

CREATE TABLE IF NOT EXISTS `categories` (
                                            `id` INT NOT NULL AUTO_INCREMENT,
                                            `name` VARCHAR(45) NOT NULL,
                                            PRIMARY KEY (`id`))
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tva`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tva` ;

CREATE TABLE IF NOT EXISTS `tva` (
                                     `id` INT NOT NULL AUTO_INCREMENT,
                                     `rate_tva` FLOAT UNSIGNED NULL,
                                     PRIMARY KEY (`id`))
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `products` ;

CREATE TABLE IF NOT EXISTS `products` (
                                          `id` INT NOT NULL AUTO_INCREMENT,
                                          `name` VARCHAR(55) NULL,
                                          `description` VARCHAR(255) NULL,
                                          `stock` INT UNSIGNED NULL,
                                          `path_img` VARCHAR(255) NULL,
                                          `price_ht` FLOAT NULL,
                                          `price_ttc` FLOAT NULL,
                                          `price_tva` FLOAT NULL,
                                          `weight` FLOAT UNSIGNED NULL,
                                          `categories_id` INT NULL,
                                          `tva_id` INT NULL,
                                          PRIMARY KEY (`id`, `categories_id`, `tva_id`),
                                          CONSTRAINT `fk_produits_categories1`
                                              FOREIGN KEY (`categories_id`)
                                                  REFERENCES `categories` (`id`)
                                                  ON DELETE NO ACTION
                                                  ON UPDATE NO ACTION,
                                          CONSTRAINT `fk_produits_tva1`
                                              FOREIGN KEY (`tva_id`)
                                                  REFERENCES `tva` (`id`)
                                                  ON DELETE NO ACTION
                                                  ON UPDATE NO ACTION)
    ENGINE = InnoDB;

CREATE INDEX `fk_produits_categories1_idx` ON `products` (`categories_id` ASC) VISIBLE;

CREATE INDEX `fk_produits_tva1_idx` ON `products` (`tva_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `customers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `customers` ;

CREATE TABLE IF NOT EXISTS `customers` (
                                           `id` INT NOT NULL AUTO_INCREMENT,
                                           `email` VARCHAR(255) NOT NULL,
                                           `pwd` VARCHAR(255) NOT NULL,
                                           `name` VARCHAR(45) NOT NULL,
                                           `firstName` VARCHAR(45) NOT NULL,
                                           PRIMARY KEY (`id`))
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `orders` ;

CREATE TABLE IF NOT EXISTS `orders` (
                                        `id` INT NOT NULL AUTO_INCREMENT,
                                        `number` VARCHAR(45) NOT NULL,
                                        `date_order` DATETIME NOT NULL DEFAULT NOW(),
                                        `date_delivery` DATETIME NOT NULL,
                                        `customers_id` INT NOT NULL,
                                        PRIMARY KEY (`id`),
                                        CONSTRAINT `fk_orders_customers1`
                                            FOREIGN KEY (`customers_id`)
                                                REFERENCES `customers` (`id`)
                                                ON DELETE NO ACTION
                                                ON UPDATE NO ACTION)
    ENGINE = InnoDB;

CREATE INDEX `fk_orders_customers1_idx` ON `orders` (`customers_id` ASC) VISIBLE;

CREATE UNIQUE INDEX `number_UNIQUE` ON `orders` (`number` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `products_orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `products_orders` ;

CREATE TABLE IF NOT EXISTS `products_orders` (
                                                 `orders_id` INT NOT NULL,
                                                 `products_id` INT NOT NULL,
                                                 `quantity` INT UNSIGNED NOT NULL,
                                                 PRIMARY KEY (`orders_id`, `products_id`),
                                                 CONSTRAINT `fk_commandes_has_produits_commandes`
                                                     FOREIGN KEY (`orders_id`)
                                                         REFERENCES `orders` (`id`)
                                                         ON DELETE NO ACTION
                                                         ON UPDATE NO ACTION,
                                                 CONSTRAINT `fk_commandes_has_produits_produits1`
                                                     FOREIGN KEY (`products_id`)
                                                         REFERENCES `products` (`id`)
                                                         ON DELETE NO ACTION
                                                         ON UPDATE NO ACTION)
    ENGINE = InnoDB;

CREATE INDEX `fk_commandes_has_produits_produits1_idx` ON `products_orders` (`products_id` ASC) VISIBLE;

CREATE INDEX `fk_commandes_has_produits_commandes_idx` ON `products_orders` (`orders_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `rights`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rights` ;

CREATE TABLE IF NOT EXISTS `rights` (
                                        `id` INT NOT NULL AUTO_INCREMENT,
                                        `right` VARCHAR(45) NOT NULL DEFAULT 'visitor',
                                        PRIMARY KEY (`id`))
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `customers_rights`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `customers_rights` ;

CREATE TABLE IF NOT EXISTS `customers_rights` (
                                                  `customers_id` INT NOT NULL,
                                                  `rights_id` INT NOT NULL,
                                                  PRIMARY KEY (`customers_id`, `rights_id`),
                                                  CONSTRAINT `fk_users_has_rights_users1`
                                                      FOREIGN KEY (`customers_id`)
                                                          REFERENCES `customers` (`id`)
                                                          ON DELETE NO ACTION
                                                          ON UPDATE NO ACTION,
                                                  CONSTRAINT `fk_users_has_rights_rights1`
                                                      FOREIGN KEY (`rights_id`)
                                                          REFERENCES `rights` (`id`)
                                                          ON DELETE NO ACTION
                                                          ON UPDATE NO ACTION)
    ENGINE = InnoDB;

CREATE INDEX `fk_users_has_rights_rights1_idx` ON `customers_rights` (`rights_id` ASC) VISIBLE;

CREATE INDEX `fk_users_has_rights_users1_idx` ON `customers_rights` (`customers_id` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
