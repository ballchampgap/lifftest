-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 08:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
CREATE TABLE `dataEpi` (
  `ID2` int(255) NOT NULL COMMENT 'รหัส',
  `Name2` text NOT NULL COMMENT 'ชื่อ',
  `lat2` text NOT NULL COMMENT 'ละติจูด',
  `lon2` text NOT NULL COMMENT 'ลองติจูด',
  `Plant2` text NOT NULL COMMENT 'พืชเศรษฐกิจ',
  `Pest2` text NOT NULL COMMENT 'ศัตรูพืช',
  `Details2` text NOT NULL COMMENT 'รายละเอียด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `products`
--

-- INSERT INTO `products` (`ProductID`, `ProductName`, `Picture`, `Category`, `ProductDescription`, `Price`, `QuantityStock`) VALUES
-- (1, 'LIFX', 'https://www.muzzley.com/uploads/devices/main_56001ea6215708f9755113ed.png', 'Lighting', 'The brightest, most efficient Wi-Fi LED light bulb.', 150, 48),
-- (2, 'Amazone Echo', 'https://www.muzzley.com/uploads/devices/main_56f44bc87570537d86229100.png', 'Voice', 'Use your voice to control your Muzzley devices.\r\n', 151, 102),
-- (3, 'Nest Learning Thermostat', 'https://www.muzzley.com/uploads/devices/main_56001d0b215708f9755113e4.jpg\r\n', 'Thermostats', 'Set the perfect temperature and save money while you\'re away.', 152, 77),
-- (4, 'Nest Protect: Smoke + Carbon Monoxident', 'https://www.muzzley.com/uploads/devices/main_56097e0b6cab5e733821638e.jpg', 'Detectors & Sensors', 'It speaks up to tell you if there\'s smoke or CO and tells you where the problem is so you know what to do.\r\n', 168, 145),
-- (5, 'ecobee3', 'https://www.muzzley.com/uploads/devices/main_5605eade6cab5e733821637b.png', 'Thermostats', 'ecobee3 is an Apple HomeKit enabled smart thermostat with wireless remote sensors.', 169, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
  ALTER TABLE `dataEpi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `dataEpi`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
