-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2019 at 12:30 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` varchar(10) NOT NULL,
  `adm_name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `adm_name`, `password`) VALUES
('ad01', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `userName` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tel` int(15) NOT NULL,
  `id` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userName`, `password`, `dateOfBirth`, `gender`, `tel`, `id`, `age`, `email`) VALUES
('shashani', '12345', '1996-02-13', 'female', 711727227, '965442723v', 22, 'shashni2gmail.com'),
('amal', '852', '1996-02-13', 'male', 778246390, '965442723', 45, 'shashanidhanujika@gmail.com'),
('dhanujika', '789', '2004-01-16', 'male', 452233665, '945698723', 85, 'dulmina@gmail.com'),
('dulmina', '456', '1996-02-13', 'Male', 778246390, '945698723', 19, 'shashanidhanujika@gmail.com'),
('dulmina', '789', '1996-07-02', 'Male', 778246390, '9621458356', 23, 'shashanidhanujika@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

DROP TABLE IF EXISTS `flight`;
CREATE TABLE IF NOT EXISTS `flight` (
  `userName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `to` varchar(50) NOT NULL,
  `from` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `adult` int(10) NOT NULL,
  `kids` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `return` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`userName`, `email`, `to`, `from`, `class`, `adult`, `kids`, `date`, `return`) VALUES
('kamal', '', '', '', '', 0, 0, NULL, NULL),
('shashani', '', '', '', '', 0, 0, NULL, NULL),
('shashani', '', '', '', '', 0, 0, NULL, NULL),
('shashani', '', '', '', '', 0, 0, NULL, NULL),
('shashani', '', '', '', '', 0, 0, NULL, NULL),
('shashani', '', '', '', '', 0, 0, NULL, NULL),
('shashani', '', 'AL', '', '', 0, 0, NULL, NULL),
('shashani', '', 'Choose Nationality', '', '', 0, 0, '2019-09-02', NULL),
('shashani', '', 'AF', 'AF', 'Business', 3, 3, '2019-09-26', '2019-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `userName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adult` int(3) NOT NULL,
  `kids` int(3) NOT NULL,
  `date` date NOT NULL,
  `return` date NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`userName`, `email`, `adult`, `kids`, `date`, `return`, `type`) VALUES
('shashani', 'shashanidhanujika@gmail.com', 2, 2, '2019-11-01', '2019-11-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `message`) VALUES
('shashani', 'shashanidhanujika@gmail.com', 'This is a test'),
('shashani', 'shashanidhanujika@gmail.com', 'fgh'),
('shashani dhanujika', 'dulmina@gmail.com', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `flightNo` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `des` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `ass` varchar(30) NOT NULL,
  `seat` int(3) NOT NULL,
  `cap` varchar(20) NOT NULL,
  PRIMARY KEY (`flightNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`flightNo`, `date`, `des`, `time`, `ass`, `seat`, `cap`) VALUES
('229', '2019-11-20', 'Chicago', '00:00:00', 'DC9', 166, ''),
('154', '2019-11-23', 'Chicagoo', '00:00:00', 'DC1', 162, ''),
('224', '2019-11-12', 'Los Angeles', '22:10:00', 'Boeing 727', 230, '60');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(6) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`) VALUES
('002', 'dilshannn', 'dulminaa'),
('001', 'shashani', 'dha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
