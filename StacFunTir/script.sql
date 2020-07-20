-- Creation de la BDD du Fun Tir STAC --
CREATE DATABASE `stac`;

-- Entrée dans la BDD du STAC --
USE `stac`;

-- Creation de la table des membres --
CREATE TABLE `users`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstname` VARCHAR(20) NOT NULL,
    `lastname` VARCHAR(25) NOT NULL,
    `password` VARCHAR(25) NOT NULL,
    `licenceNumber` INT NOT NULL,
    `mailAddress` VARCHAR(100)NOT NULL,
    `phoneNumber` INT NOT NULL)
    ENGINE=InnoDB;

-- Creation de la table de résultats --
CREATE TABLE `Results`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `shootingPoints` INT NOT NULL,
    `nonShoot` INT NOT NULL,
    `shootingTime` TIME NOT NULL,
    `shootingRatio` FLOAT NOT NULL)
    ENGINE=InnoDB;
