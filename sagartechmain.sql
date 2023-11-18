-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 08:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sagartechmain`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients_logo`
--

CREATE TABLE `clients_logo` (
  `clogo_id` int(11) NOT NULL,
  `clogo_name` varchar(255) NOT NULL,
  `clogo_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_logo`
--

INSERT INTO `clients_logo` (`clogo_id`, `clogo_name`, `clogo_image`) VALUES
(4, 'Globex', '01 Globex.png'),
(7, 'UJSA Aircon Pvt. Ltd', '02 UJSA Aircon Pvt. Ltd.png'),
(8, 'Eperts4Expats', '05 Eperts4Expats.png'),
(9, 'M4 Group', '07 M4 Group.png'),
(10, 'Zodiac Classic', '13 Zodiac Classic.png'),
(11, 'ZZ Consultants', '14 ZZ Consultants.png'),
(12, 'Oasis Consulting', '15 Oasis Consulting.png'),
(13, 'Zoheb Lala', '18 Zoheb Lala.png'),
(14, 'Andhar', '19 Andhar.png'),
(15, 'Rapid Transport', '20 Rapid Transport.png'),
(16, 'Alhamd Group', '21 Alhamd Group.png'),
(17, 'Infinitus', '22 Infinitus.png'),
(18, 'AS Audio', '24 AS Audio.png'),
(19, 'Acero', '26 Acero.png'),
(20, 'Hadi International', '27 Hadi International.png'),
(21, 'Padmavati Chains', '29 Padmavati Chains.png'),
(22, 'Soot Boot Wala', '30 Soot Boot Wala.png'),
(23, 'Tasavvur', '31 Tasavvur.png'),
(24, 'Mithoyaj', 'mithoyaj logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_name` varchar(255) NOT NULL,
  `portfolio_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_name`, `portfolio_image`) VALUES
(1, 'Drilling', 'dpcsaudi_small.png'),
(3, 'Dunes Properties', 'dunes_properties-min.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 's.danish0827@gmail.com', '$2y$10$2IRO33Q7ovvbnIOLpRA7veItMqQg/H7UBEJtXLDLnRe/6GkyT./ky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients_logo`
--
ALTER TABLE `clients_logo`
  ADD PRIMARY KEY (`clogo_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients_logo`
--
ALTER TABLE `clients_logo`
  MODIFY `clogo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
