-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2021 at 05:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

DROP TABLE IF EXISTS `appointmenttb`;
CREATE TABLE IF NOT EXISTS `appointmenttb` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(80) NOT NULL,
  `doctor` varchar(80) NOT NULL,
  `appointmentdate` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fname` (`fname`,`lname`,`gender`,`contact`,`doctor`,`payment`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`id`, `fname`, `lname`, `gender`, `contact`, `doctor`, `appointmentdate`, `payment`) VALUES
(1, 'archit', 'arora', 'male', '7589090900', 'Dr. Punam Shaw', '2021-11-15', ' Rs 300/-'),
(5, 'hartik', 'gandhi', 'male', '9996299335', 'Dr. Punam Shaw', '2021-11-17', ''),
(4, 'archit', 'arora', 'male', '7589090900', 'Dr. Ashok Goyal', '2021-11-25', ' Rs 300/-'),
(6, 'hartik', 'gandhi', 'male', '7589090900', 'Dr. Punam Shaw', '2021-11-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

DROP TABLE IF EXISTS `doctb`;
CREATE TABLE IF NOT EXISTS `doctb` (
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`name`) VALUES
('Dr. Ashok Kumar'),
('Dr. Pravin Malotra'),
('Dr. Prithwiraj Dutta'),
('Dr. Rohit Mehta'),
('Dr. Ankit'),
('Dr. Amardeep Singh');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

DROP TABLE IF EXISTS `logintb`;
CREATE TABLE IF NOT EXISTS `logintb` (
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  UNIQUE KEY `username` (`username`,`password`),
  UNIQUE KEY `username_3` (`username`,`password`),
  UNIQUE KEY `username_5` (`username`,`password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('archit', 'archit');

-- --------------------------------------------------------

--
-- Table structure for table `testtb`
--

DROP TABLE IF EXISTS `testtb`;
CREATE TABLE IF NOT EXISTS `testtb` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `test` varchar(255) NOT NULL,
  `testdate` varchar(255) NOT NULL,
  `tpayment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtb`
--

INSERT INTO `testtb` (`id`, `fname`, `lname`, `gender`, `contact`, `test`, `testdate`, `tpayment`) VALUES
(6, 'archit', 'arora', 'male', '7589090900', 'bp', '2021-11-15', 'Rs-20'),
(2, 'archit', 'arora', 'male', '7589090900', 'sugar', '14-11-2021', 'Rs-50 sugar'),
(4, 'archit', 'arora', 'male', '7589090900', 'ultrasound', '2021-11-17', 'Rs-800'),
(5, 'archit', 'arora', 'male', '7589090900', 'blood_test', '2021-11-26', 'Rs-50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logintb`
--
ALTER TABLE `logintb` ADD FULLTEXT KEY `username_2` (`username`,`password`);
ALTER TABLE `logintb` ADD FULLTEXT KEY `username_4` (`username`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
