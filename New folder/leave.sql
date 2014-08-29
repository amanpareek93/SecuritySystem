-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 11:07 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `security2`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `name` varchar(100) NOT NULL,
  `reg` varchar(100) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `hours` int(3) NOT NULL,
  `place` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `leaveid` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  `out` varchar(100) NOT NULL,
  `in` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`name`, `reg`, `from`, `to`, `hours`, `place`, `purpose`, `leaveid`, `date`, `status`, `out`, `in`, `total`) VALUES
('Rohan', '12BCE0123', '12:00:00', '14:00:00', 3, 'Vellore', 'Mood', '456789', '2014-04-09', 3, '12:30', '12:30', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
