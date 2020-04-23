-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 04:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_userid` varchar(100) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `license_number` varchar(100) NOT NULL,
  `driver_mobile_number` bigint(20) NOT NULL,
  `driver_address` varchar(200) NOT NULL,
  `password1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_userid`, `driver_name`, `license_number`, `driver_mobile_number`, `driver_address`, `password1`) VALUES
('saumya33', 'saumya mishra', 'mt5555555555555', 9999999999, 'bangalore', 'saumya'),
('saum', 'saumya', 'mt6666666666666', 9999999999, 'bangalore', 'gggg'),
('vaskar32', 'chandra vaskar', 'kn8888888888888', 9999999999, 'bangalore', 'vaskar33'),
('ddds', 'david', 'mt6666666666666', 9999999999, 'bangalore', 'david'),
('rachel23', 'rachel', 'kn8888888888888', 9999999999, 'bangalore', 'rachel23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `mobile`, `feedback`, `rating`) VALUES
('sanskriti', 9999999999, 'very marvelous webpage', '4'),
('saumya mishra', 7788866771, 'nice', '4');

-- --------------------------------------------------------

--
-- Table structure for table `moneys`
--

CREATE TABLE `moneys` (
  `vehicle_id` varchar(100) NOT NULL,
  `driver_userid` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moneys`
--

INSERT INTO `moneys` (`vehicle_id`, `driver_userid`, `amount`) VALUES
('saumya44', 'saumya33', 44),
('saumya44', 'saum', 44),
('saumya44', 'saum', 44),
('saumya44', 'saum', 44),
('saumya44', 'saum', 44),
('vaskar33', 'vaskar32', 32),
('ddds', 'ddds', 32),
('rachel25', 'rachel23', 44),
('rachel25', 'rachel23', 44),
('rachel25', 'rachel23', 44);

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `name` varchar(100) NOT NULL,
  `driver_userid` varchar(100) NOT NULL,
  `password1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`name`, `driver_userid`, `password1`) VALUES
('chandra vaskar', 'vaskar32', 'vaskar33');

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE `validation` (
  `vehicle_id` varchar(100) NOT NULL,
  `driver_userid` varchar(100) NOT NULL,
  `expiry_of_vehicle` date NOT NULL,
  `expiry_of_license` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`vehicle_id`, `driver_userid`, `expiry_of_vehicle`, `expiry_of_license`) VALUES
('saumya44', 'saumya33', '2023-11-22', '2025-11-22'),
('saumya44', 'saum', '2019-11-23', '2019-11-23'),
('vaskar33', 'vaskar32', '2025-02-27', '2025-03-27'),
('ddds', 'ddds', '2025-03-27', '2025-02-26'),
('rachel25', 'rachel23', '2026-11-27', '2025-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` varchar(100) NOT NULL,
  `vehicle_type` enum('2','3','4') NOT NULL,
  `dates` date NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `vehicle_type`, `dates`, `vehicle_model`, `vehicle_number`) VALUES
('saumya44', '4', '2019-11-22', 'honda', 'up46s6599'),
('saumya44', '2', '2019-11-23', 'splendor', 'hr90e5643'),
('vaskar33', '4', '2019-11-23', 'suzuki', 'up46s6599'),
('ddds', '2', '2019-11-23', 'splendor', 'kn06s6543'),
('rachel25', '4', '2019-11-27', 'suzuki', 'kn06s6543'),
('ddd23', '2', '2019-11-30', 'splendor', 'up46s6543');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD KEY `driver_userid` (`driver_userid`),
  ADD KEY `password1` (`password1`);

--
-- Indexes for table `moneys`
--
ALTER TABLE `moneys`
  ADD KEY `vehicle_id` (`vehicle_id`),
  ADD KEY `driver_userid` (`driver_userid`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD KEY `driver_userid` (`driver_userid`),
  ADD KEY `password1` (`password1`);

--
-- Indexes for table `validation`
--
ALTER TABLE `validation`
  ADD KEY `vehicle_id` (`vehicle_id`),
  ADD KEY `driver_userid` (`driver_userid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `moneys`
--
ALTER TABLE `moneys`
  ADD CONSTRAINT `moneys_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`),
  ADD CONSTRAINT `moneys_ibfk_2` FOREIGN KEY (`driver_userid`) REFERENCES `driver` (`driver_userid`);

--
-- Constraints for table `sign`
--
ALTER TABLE `sign`
  ADD CONSTRAINT `sign_ibfk_1` FOREIGN KEY (`driver_userid`) REFERENCES `driver` (`driver_userid`),
  ADD CONSTRAINT `sign_ibfk_2` FOREIGN KEY (`password1`) REFERENCES `driver` (`password1`);

--
-- Constraints for table `validation`
--
ALTER TABLE `validation`
  ADD CONSTRAINT `validation_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`),
  ADD CONSTRAINT `validation_ibfk_2` FOREIGN KEY (`driver_userid`) REFERENCES `driver` (`driver_userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
