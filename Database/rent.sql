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
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `city` varchar(120) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  `price` bigint(20) NOT NULL,
  `house_type` varchar(100) NOT NULL,
  `nb_bedrooms` int(11) NOT NULL,
  `nb_bathrooms` int(11) NOT NULL,
  `garage` tinyint(4) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `city`, `district`, `address`, `price`, `house_type`, `nb_bedrooms`, `nb_bathrooms`, `garage`, `description`, `image_url`) VALUES
(1, 'Montreal', 'Rivière-des-Prairies', '10568 Rue Beaumarchais', 2500, 'Two-Storey House', 3, 3, 1, 'This stunning semi-detached home boasts three generously sized bedrooms on the same floor. The elegant and spacious kitchen features an island that overlooks the dining area and opens into a roomy living space. Whether you\'re a new or young family in need of extra room or a larger family making use of an independent basement entrance, this home offers flexibility. The beautifully landscaped backyard includes a charming paver stone patio with a gazebo, a lush vineyard, a heated oval above-ground swimming pool, and a convenient shed. This unique home even possesses a wine cellar in its basement. Located in close proximity to parks, essential services, public transportation, Gare Rivière-des-Prairies, and scenic bike paths, this residence is perfectly situated for a balanced lifestyle.\r\n', 'property_images/property_13.jpg'),
(2, 'Montreal', 'Ville-Marie', '200 Rue St-Alexandre app. 110', 1350, 'Condominium', 1, 1, 0, 'Loft in prime location! industriel style , high ceilings. Open concept floor plan. Large windows that allow for lots of light. The building features a rooftop pool, a fully equipped gym and a common game room. Located in the heart of downtown . Close to universities, public transportation and famous \"Quartier de spectacle\"', 'property_images/property_14.jpg'),
(3, 'Montreal', 'Pierrefonds', '4477 Rue Fredmir', 1799, 'Bungalow', 4, 3, 1, 'Welcome to this beautifully renovated raised bungalow located adjacent to Westpark. Very spacious and bright rooms. 4 good size bedrooms and 3 NEW bathrooms. Gorgeous new open concept kitchen offers beautiful white cabinets, centre island and granite counter tops. New stainless appliances. It is an absolutely a must-see home.\r\nSale without legal warranty of quality, at the buyer\'s risk and peril.', 'property_images/property_15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD UNIQUE KEY `address` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
