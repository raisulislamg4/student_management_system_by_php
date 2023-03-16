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

--CREATE ADMISSIONS TABLE
CREATE TABLE `pdbsms`.`ADMISSIONS` (
`ID` INT( 11 ) NOT NULL AUTO_INCREMENT,
`NAME` VARCHAR( 50 ) NOT NULL ,
`EMAIL` VARCHAR( 55 ) NOT NULL ,
`PHONE` VARCHAR( 20 ) NOT NULL ,
`MESSAGE` VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY ( `ID` )
) ENGINE = INNODB;

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
	'81dc9bdb52d04dc20036dbd8313ed055'
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
	'81dc9bdb52d04dc20036dbd8313ed055'
	);

-------------------------create teachers table------------
CREATE TABLE `teachers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `EXPERTIZE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `teachers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
