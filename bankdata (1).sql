-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 04:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Current_Balance` int(10) NOT NULL,
  `account_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`Name`, `Email`, `Current_Balance`, `account_no`) VALUES
('Sharan Prasath', 'sharan@gmail.com', 40000, 123456),
('Vignesh', 'vignesh@gmail.com', 60000, 234567),
('Lokesh', 'lokesh@gmail.com', 78000, 345678),
('Priyanka', 'priyanka@gmail.com', 92000, 456789),
('Srujana', 'srujana@gmail.com', 42655, 567890),
('Manish', 'manish@gmail.com', 32345, 678901),
('Deepak', 'deepak@gmail.com', 20000, 789012),
('prasath', 'prasath@gmail.com', 25000, 890123),
('Ganesh', 'ganesh@gmail.com', 47655, 901234),
('Sambath Kumar', 'sambath@gmail.com', 62345, 12345);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
