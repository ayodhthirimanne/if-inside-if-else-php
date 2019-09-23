-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 08:43 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `1`
--

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE IF NOT EXISTS `train` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `Sunday` tinyint(1) NOT NULL DEFAULT '0',
  `Monday` tinyint(1) NOT NULL DEFAULT '0',
  `Tuesday` tinyint(1) NOT NULL DEFAULT '0',
  `Wednesday` tinyint(1) NOT NULL DEFAULT '0',
  `Thursday` tinyint(1) NOT NULL DEFAULT '0',
  `Friday` tinyint(1) NOT NULL DEFAULT '0',
  `Saturday` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`Id`, `name`, `Sunday`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, 'panadura', 1, 0, 0, 0, 0, 0, 0),
(2, 'Kaluthara', 0, 0, 1, 0, 0, 0, 0),
(3, 'Aluthgama', 0, 0, 0, 0, 1, 0, 0),
(4, 'moratuwa', 0, 1, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
