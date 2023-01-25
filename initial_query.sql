-- execute the queries before run the application

-- database create
CREATE DATABASE pdbsms;

-- user table create
CREATE TABLE `pdbsms`.`users` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT , 
	`USERNAME` VARCHAR(55) NOT NULL , 
	`EMAIL` VARCHAR(55) NOT NULL , 
	`PHONE` VARCHAR(20) NOT NULL , 
	`ROLE` VARCHAR(20) NOT NULL , 
	`PASSWORD` VARCHAR(255) NOT NULL , 
	PRIMARY KEY (`ID`)) 
ENGINE = InnoDB;

-- insert two initial users to the USER table
INSERT INTO `users` (
	`ID`, 
	`USERNAME`, 
	`EMAIL`, 
	`PHONE`, 
	`ROLE`, 
	`PASSWORD`) 
VALUES (
	NULL, 
	'admin', 
	'raisulislamg4@gmail.com', 
	'01772154668', 
	'admin', 
	'1234'
	);

INSERT INTO `users` (
	`ID`, 
	`USERNAME`, 
	`EMAIL`, 
	`PHONE`, 
	`ROLE`, 
	`PASSWORD`) 
VALUES (
	NULL, 
	'student', 
	'raisulislamg4@gmail.com', 
	'01772154668', 
	'student', 
	'1234'
	);