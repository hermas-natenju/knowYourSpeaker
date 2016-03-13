-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 01:06 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kys`
--

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE IF NOT EXISTS `speaker` (
  `id_speaker` INT(11) UNSIGNED  NOT NULL AUTO_INCREMENT,
  `name`       VARCHAR(100)      NOT NULL,
  `fname`      VARCHAR(100)               DEFAULT NULL,
  `sex`        ENUM('M', 'F')             DEFAULT NULL,
  `age`        TINYINT(4)                 DEFAULT NULL,
  `avatar`     VARCHAR(255)      NOT NULL DEFAULT 'default_avatar.png',
  `visibility` ENUM('ON', 'OFF') NOT NULL DEFAULT 'ON'
  COMMENT 'on delete set to OFF',
  PRIMARY KEY (`id_speaker`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  AUTO_INCREMENT = 6;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id_speaker`, `name`, `fname`, `sex`, `age`, `avatar`, `visibility`) VALUES
  (1, 'TCHAPGA NANA', 'HERMAS', 'M', 21, 'default_avatar.png', 'ON'),
  (4, 'blue', 'sky', 'M', NULL, 'default_avatar.png', 'ON'),
  (5, 'Jesus', 'Christ', NULL, NULL, 'default_avatar.png', 'ON');

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
