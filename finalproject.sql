-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 02:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `street1` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `Source` enum('Friend','Facebook','Twitter','Instagram') NOT NULL,
  `recommend` enum('yes','no') NOT NULL,
  `liked` enum('Design','Information','Product') NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fName`, `lName`, `Country`, `city`, `street1`, `email`, `phone`, `Source`, `recommend`, `liked`, `feedback`) VALUES
('lama', 'khaled', 'l', 'jeddah', '', 'hotmail.com', 5597772152, 'Friend', 'yes', '', ' m'),
('lama', 'khaled', 'kk', 'jeddah', '', 'k@hotmail.com', 5597772159, 'Friend', 'no', '', ' m'),
('lama', 'khaled', 's', 'jeddah', '', 'l.com', 5597774215, 'Friend', 'no', '', ' x'),
('lama', 'khaled', 'dd', 'jeddah', '', 'otmail.com', 559777215, 'Friend', 'yes', '', ' m'),
('lama', 'khaled', 'jvndl', 'jeddah', '', 'rano00osha@hotmail.com', 559777215, 'Friend', 'no', '', ' s'),
('lama', 'khaled', 'l', 'jeddah', '', 'rano0otmail.com', 559777215, 'Friend', 'yes', '', ' l'),
('lama', 'khaled', 'a', 'jeddah', '', 'rano0ss0osha@hotmail.com', 559777215, 'Friend', 'no', '', ' a'),
('lama', 'khaled', 'l', 'jeddah', '', 'rano0ssotmail.com', 559777215, 'Friend', 'no', '', ' ll'),
('lama', 'khaled', 's', 'jeddah', '', 's', 559777215, 'Friend', 'no', '', ' s'),
('lama', 'khaled', 'd', 'jeddah', '', 'tmail.com', 5597772153, 'Friend', 'no', '', ' s'),
('lama', 'khaled', 'z', 'jeddah', '', 'x', 559777215, 'Friend', 'yes', '', ' s');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `City` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`City`, `Country`, `name`) VALUES
('jeddah', 'saudi arabia', 'lama'),
('makkah', 'saudi arabia', 'Raneem'),
('riyadh', 'Saudi Arabia', 'Rana'),
('Makkah', 'Saudi Arabia', 'Albaraa'),
('Dubai', 'UAE', 'Khaled'),
('Salmiya', 'Kuwait', 'Jaber');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`Name`, `Address`, `Number`) VALUES
('Albaraa', 'jhnjbn', 9382),
('Jaber', 'ijijiji', 8484),
('Khaled', 'jnihjioj', 98302),
('lama', 'gfrgghf ', 9883),
('Rana', 'jfsnfj', 559777215),
('Raneem', 'kjfkrjnfjre', 523);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD UNIQUE KEY `Supplier’s name` (`name`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
