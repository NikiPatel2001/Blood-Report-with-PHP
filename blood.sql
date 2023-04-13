-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 05:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `Height` varchar(10) NOT NULL,
  `Blood_Pressure` varchar(100) NOT NULL,
  `Sop2` varchar(100) NOT NULL,
  `Blood_Group` varchar(10) NOT NULL,
  `Blood_Glucose_level` varchar(50) NOT NULL,
  `BMI` varchar(100) NOT NULL,
  `Fluid` varchar(100) NOT NULL,
  `Fat` varchar(100) NOT NULL,
  `Muscle` varchar(100) NOT NULL,
  `Calories` varchar(100) NOT NULL,
  `Calcium` varchar(100) NOT NULL,
  `hide_group` int(11) NOT NULL,
  `hide_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Id`, `Name`, `Address`, `Gender`, `weight`, `Height`, `Blood_Pressure`, `Sop2`, `Blood_Group`, `Blood_Glucose_level`, `BMI`, `Fluid`, `Fat`, `Muscle`, `Calories`, `Calcium`, `hide_group`, `hide_level`) VALUES
(13, 'Jaydeep Patel', 'Morbi', 'Male', '60kg', '165cm', 'dfdf', 'dsfgdfg', '== Select ', 'gfhgfh', 'dfgfdgf', 'fgdfgf', 'xbbcv', 'fbfvbfvb', 'fbvbfgb', 'fbfvbfvbcvb', 0, 1),
(14, '', '', '', '', '', '', '', '== Select ', '', '', '', '', '', '', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
