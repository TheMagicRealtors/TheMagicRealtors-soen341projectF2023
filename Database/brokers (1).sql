-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2023 at 10:22 PM
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
-- Table structure for table `brokers`
--

CREATE TABLE `brokers` (
  `broker_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `broker_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `broker_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `broker_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brokers`
--

INSERT INTO `brokers` (`broker_name`, `broker_email`, `broker_phone`, `broker_address`) VALUES
('Isabella Johnson\r\n', 'isabella.johnson1@gmail.com', '+1 514 646 6446', 'Montreal'),
('Samuel Williams', 'sam_williams@yahoo.com', '+1 418 289 2874', 'Montreal'),
('Sophia Brown', 'sophiabrown@outlook.com', '+1 824 693 9785', 'Quebec'),
('Oliver Davis', 'olidavis@hotmail.com', '+1 514 165 5971', 'Laval'),
('Mia Wilson', 'mia.wilson123@gmail.com', '+1 418 198 4541', 'Laval'),
('Ben Smith', 'benjamin1smtih1@yahoo.com', '+1 514 611 478', 'Montreal'),
('Ava taylor', 'ayataylor5@outlook.com', '+1 621 681 4412', 'Toronto'),
('James Anderson', 'anderson_j@hotmail.com', '+1 797 324 5412', 'Ottawa'),
('Lily Martinez', 'lilymartinez@gmail.com', '+1 418 813 8133', 'Montreal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
