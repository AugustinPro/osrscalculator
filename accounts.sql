-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 27 sep. 2021 à 15:55
-- Version du serveur :  10.5.8-MariaDB-log
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--
CREATE DATABASE IF NOT EXISTS `accounts` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `accounts`;

#
# TABLE STRUCTURE FOR: Login
#

DROP TABLE IF EXISTS `Login`;

CREATE TABLE `Login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_uid` TINYTEXT NOT NULL,
  `login_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_password` LONGTEXT COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `login_email` (`login_email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- INSERT INTO `Login` (`login_id`, `login_uid`, `login_email`, `login_password`) VALUES (1,'augustin1999' 'reid.bailey@example.org', '216e94dfff121838862a70dc55c32526070023ee');
-- INSERT INTO `Login` (`login_id`, `login_uid`, `login_email`, `login_password`) VALUES (2,'nino1999' 'nsmith@example.org', '24be70f4196a7a9f9d4702c1de7009f326331630');
-- INSERT INTO `Login` (`login_id`, `login_uid`, `login_email`, `login_password`) VALUES (3,'tom2000' 'orosenbaum@example.com', 'cfe0ec5d7945b20f56325be2e8614c6d6ed9e722');
-- INSERT INTO `Login` (`login_id`, `login_uid`, `login_email`, `login_password`) VALUES (4,'alan2002' 'meghan.mcdermott@example.com', '3caa025fa2db99554bf4c89f7cfd81a2f6587058');
-- INSERT INTO `Login` (`login_id`, `login_uid`, `login_email`, `login_password`) VALUES (5,'willem2001' 'grant43@example.com', '4eae28a028265cb754ce3438f6825b432545fc49');
-- INSERT INTO `Login` (`login_id`, `login_uid`, `login_email`, `login_password`) VALUES (6,'henry42069' 'hills.otha@example.net', 'e30cd93a35394b2f4e8450063b2e8f31a8a2c4b3');

#
# TABLE STRUCTURE FOR: Account
#

DROP TABLE IF EXISTS `Account`;

CREATE TABLE `Account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `account_name` (`account_name`),
  KEY `login_id` (`login_id`),
  CONSTRAINT `Account_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `Login` (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- INSERT INTO `Account` (`account_id`, `account_name`, `login_id`) VALUES (1, 'von.laury', 1);
-- INSERT INTO `Account` (`account_id`, `account_name`, `login_id`) VALUES (2, 'alize86', 2);
-- INSERT INTO `Account` (`account_id`, `account_name`, `login_id`) VALUES (3, 'stephan56', 3);

#
# TABLE STRUCTURE FOR: Sets
#

DROP TABLE IF EXISTS `Sets`;

CREATE TABLE `Sets` (
  `sets_id` int(11) NOT NULL AUTO_INCREMENT,
  `sets_name` varchar(50) NOT NULL,
  `sets_weapon` int(11) DEFAULT NULL,
  `sets_shield` int(11) DEFAULT NULL,
  `sets_helmet` int(11) DEFAULT NULL,
  `sets_cape` int(11) DEFAULT NULL,
  `sets_neck` int(11) DEFAULT NULL,
  `sets_chest` int(11) DEFAULT NULL,
  `sets_legs` int(11) DEFAULT NULL,
  `sets_hands` int(11) DEFAULT NULL,
  `sets_feet` int(11) DEFAULT NULL,
  `sets_ring` int(11) DEFAULT NULL,
  `sets_ammo` int(11) DEFAULT NULL,
  `sets_spell` int(11) DEFAULT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`sets_id`),
  KEY `login_id` (`login_id`),
  CONSTRAINT `Sets_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `Login` (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- INSERT INTO `Sets` (`sets_id`, `sets_name`, `sets_weapon`, `sets_shield`, `sets_helmet`, `sets_cape`, `sets_neck`, `sets_chest`, `sets_legs`, `sets_hands`, `sets_feet`, `sets_ring`, `sets_ammo`, `sets_spell`, `login_id`) VALUES (1,'test1', 5, 5, 4, 7, 5, 6, 7, 8, 9, 7, 6, 3, 1);
-- INSERT INTO `Sets` (`sets_id`, `sets_name`, `sets_weapon`, `sets_shield`, `sets_helmet`, `sets_cape`, `sets_neck`, `sets_chest`, `sets_legs`, `sets_hands`, `sets_feet`, `sets_ring`, `sets_ammo`, `sets_spell`, `login_id`) VALUES (2,'test2', 4, 2, 1, 6, 1, 6, 8, 9, 0, 6, 3, 2, 2);
-- INSERT INTO `Sets` (`sets_id`, `sets_name`, `sets_weapon`, `sets_shield`, `sets_helmet`, `sets_cape`, `sets_neck`, `sets_chest`, `sets_legs`, `sets_hands`, `sets_feet`, `sets_ring`, `sets_ammo`, `sets_spell`, `login_id`) VALUES (3,'test3', 5, 3, 7, 2, 8, 8, 6, 8, 9, 3, 0, 1, 3);
-- INSERT INTO `Sets` (`sets_id`, `sets_name`, `sets_weapon`, `sets_shield`, `sets_helmet`, `sets_cape`, `sets_neck`, `sets_chest`, `sets_legs`, `sets_hands`, `sets_feet`, `sets_ring`, `sets_ammo`, `sets_spell`, `login_id`) VALUES (4,'test4', 0, 3, 8, 8, 1, 6, 7, 1, 3, 4, 0, 8, 4);


