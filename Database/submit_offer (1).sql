-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2023 at 10:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magicrealtors`
--

-- --------------------------------------------------------

--
-- Table structure for table `submit_offer`
--

CREATE TABLE `submit_offer` (
  `offer_id` int(11) NOT NULL,
  `broker_name_so` text NOT NULL,
  `offer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_offer`
--

INSERT INTO `submit_offer` (`offer_id`, `broker_name_so`, `offer`) VALUES
(13, 'Isabella Johnson', '1 000 000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submit_offer`
--
ALTER TABLE `submit_offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submit_offer`
--
ALTER TABLE `submit_offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
