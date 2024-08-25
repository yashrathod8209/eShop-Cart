DROP DATABASE IF EXISTS `Auth_system`;
CREATE DATABASE `Auth_system`;

USE `Auth_system`;

CREATE TABLE `Users`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL,
    `Password` VARCHAR(255) NOT NULL
);

CREATE TABLE `Products`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `ProductName` VARCHAR(255) NOT NULL,
    `ProductPrise` VARCHAR(255) NOT NULL
);

CREATE TABLE `cart`(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `ProductId` INT NOT NULL,
    `UserId` INT NOT NULL,
    `ProductName` VARCHAR(255) NOT NULL,
    `ProductPrise` VARCHAR(255) NOT NULL
);
