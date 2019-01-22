-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 02:07 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `komunitas`
--
CREATE DATABASE IF NOT EXISTS `komunitas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `komunitas`;

-- --------------------------------------------------------

--
-- Table structure for table `table_hobbies`
--

CREATE TABLE IF NOT EXISTS `table_hobbies` (
  `id_hobbies` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Id Hobbies',
  `person_id` int(2) NOT NULL COMMENT 'Foreign Key',
  `name_hobbies` varchar(20) NOT NULL COMMENT 'Nama Hobby',
  PRIMARY KEY (`id_hobbies`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `table_hobbies`
--

INSERT INTO `table_hobbies` (`id_hobbies`, `person_id`, `name_hobbies`) VALUES
(1, 1, 'Bird watching'),
(2, 1, 'Martial arts'),
(3, 2, 'Hiking'),
(4, 1, 'Archery'),
(5, 2, 'Beekeeping'),
(6, 3, 'Book restoration');

-- --------------------------------------------------------

--
-- Table structure for table `table_persons`
--

CREATE TABLE IF NOT EXISTS `table_persons` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Id Persons',
  `nama_persons` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `table_persons`
--

INSERT INTO `table_persons` (`id`, `nama_persons`) VALUES
(1, 'Nurhadi'),
(2, 'Aldo'),
(3, 'Dodi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
