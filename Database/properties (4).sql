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
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `properties_id` int(11) NOT NULL,
  `city` varchar(120) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  `price` bigint(20) NOT NULL,
  `house_type` varchar(100) NOT NULL,
  `nb_bedrooms` int(11) NOT NULL,
  `nb_bathrooms` int(11) NOT NULL,
  `garage` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`properties_id`, `city`, `district`, `address`, `price`, `house_type`, `nb_bedrooms`, `nb_bathrooms`, `garage`, `description`, `image_url`) VALUES
(1, 'Laval', 'Chomedy', '4752 Rue Guénette', 769000, 'Two-Storey House', 3, 1, 1, 'Situated in the desirable Chomedey neighborhood, this residence boasts an exceptional location, in close proximity to schools, parks, shopping centers, and public transportation. Furthermore, it provides effortless access to major highways, ensuring a stress-free commute.\r\nUpon stepping inside this abode, you\'ll be instantly captivated by its refined charm and well-thought-out design. The sunlit, open-concept first floor encompasses a cozy living area and a four-season solarium, an ideal space for unwinding with family or hosting gatherings. The kitchen boasts ample countertop space, catering to culinary enthusiasts.\r\nOne of the standout features of this property is the inclusion of a garage, offering convenient shelter for your vehicle and extra storage space.\r\nAscending the staircase to the upper level, you\'ll discover three generously-sized bedrooms, each affording private living quarters for every family member. Abundant windows flood the rooms with natural light, creating a warm and inviting ambiance.\r\n', 'property_images/property_1.jpg'),
(2, 'Montreal', 'Pierrefonds', '4445 Rue Johnson', 699000, 'Bungalow', 4, 2, 1, 'Greetings to 4445 Rue Johnson in Pierrefonds! This completely remodeled one-story home boasts four bedrooms, two bathrooms, a fully finished basement, and a convenient garage. The airy open-concept design showcases bespoke touches and meticulous craftsmanship, ideal for hosting gatherings with friends and family. Embrace all that the West Island has to offer in this ready-to-move-in residence! You\'ll appreciate the proximity to Saint-Charles, Gouin, Highway 40, Park Duval, and numerous schools. Schedule your visit today to see this inviting property.', 'property_images/property_2.jpg'),
(3, 'Longueuil', 'Saint-Hubert', '4782 Rue Chataigniers', 949000, 'Two-Storey House', 5, 2, 1, 'Explore this stunning contemporary property, situated in a family-friendly neighborhood overlooking a serene protected forested area. This residence welcomes an abundance of natural light through its expansive windows and boasts four bedrooms, each with its own walk-in closet, a versatile mezzanine perfect for office space, two bathrooms, and an additional powder room. Bond with your family in the fully finished basement, or invite friends to relish the spacious fenced backyard featuring a terrace and a heated in-ground pool. The beautifully landscaped grounds bask in sunlight all day long, providing a delightful outdoor oasis. Moreover, you\'ll benefit from the convenience of nearby parks and amenities, including Parc de la Cité, Promenades Saint Bruno, Quartier DIX30, elementary and high schools, the library, and public transit lines (10 and 30), not to mention the new REM train for effortless access to downtown Montreal! Don\'t miss out on the numerous offerings of this residence—schedule your visit today!', 'property_images/property_3.jpg'),
(4, 'Sainte-Catherine', 'Sainte-Catherine', '440 Rue Duparc', 659000, 'Two-Storey House', 3, 1, 1, 'Discover this well-maintained 3-bedroom home, built in 1999 with a cozy interior featuring 1 bathroom, a powder room, and ample natural light from sliding and casement windows. The exterior boasts durable brick and vinyl siding, an attached single-width garage, and a flat, corner lot. Inside, find melamine kitchen cabinets, a separate shower in the bathroom, and a finished basement with flexible living space. With an asphalt driveway offering parking for two additional vehicles, you\'ll appreciate the convenience of this location, close to schools, public transportation, parks, and more. Make this charming property your next home sweet home!', 'property_images/property_4.jpg'),
(5, 'Laval', 'Auteuil', '2382 Rue de Marsala', 979900, 'Two-Storey House', 4, 2, 1, 'Discover a luxurious haven in the sought-after Auteuil neighborhood. This meticulously maintained property boasts a fully renovated kitchen with high-end features, a spacious dining area, and a welcoming living room on the ground floor. Upstairs, four spacious bedrooms, including a master with a walk-in closet, and a renovated bathroom with dual quartz countertops await. The basement offers a furnished space with an extra bedroom and family room for guests or a home office. Outdoors, a heated pool, shaded balcony with a new awning, and private hedges create a tranquil retreat. Conveniently located near amenities, schools, parks, and shops, this exceptional home offers a life of comfort and luxury in Auteuil—an opportunity not to be missed!', 'property_images/property_5.jpg'),
(6, 'Sainte-Adele', 'Mont-Rolland', '3450 Rue des Buses', 1650000, 'Bungalow', 4, 1, 1, 'Welcome to your dream home! This meticulously crafted 4-bedroom residence built in 2013 offers 3,510 square feet of luxurious living space. With PVC windows, stone and wood siding, and a durable roof, it boasts quality and charm. Inside, you\'ll find two bathrooms, a powder room, and a fully finished basement. The property, spanning approximately 84,230 square feet, features panoramic mountain views, no rear neighbors, and a tranquil cul-de-sac setting. A heated double-width garage, carport, and roomy driveway for 12 cars provide ample parking space. Enjoy the heated inground pool and proximity to schools, parks, and more. This is your chance to own a piece of paradise with abundant space and stunning mountain views!', 'property_images/property_6.jpg'),
(7, 'Drummondville', 'Drummondville', '603 - 605 Rue Melançon', 374000, 'Duplex', 3, 1, 1, 'Welcome to this charming 3-bedroom, 1-bathroom home, showcasing timeless character and situated on a flat lot of approximately 449.70 square meters. Built in 1951, this well-maintained residence offers a comfortable living area of 178.60 square meters and features PVC windows, a classic brick exterior, and a single-width detached garage with a two-car driveway. The kitchen boasts wood and melamine cabinets, and the partially finished basement provides additional space. With proximity to parks, schools, daycare centers, CEGEP, and hospitals, this property is perfect for families seeking convenience. It comes complete with electric baseboard heating, an electric heating system, and municipal water and sewage systems. Don\'t miss your chance to call this cozy house your home!', 'property_images/property_7.jpg'),
(8, 'Montreal', 'Mercier', '3164 Rue Baldwin', 399000, 'Two-Storey House', 3, 1, 0, 'This charming home combines comfort and convenience seamlessly. Nestled in the prime location of Mercier on the island of Montreal, this property boasts easy access to essential amenities. The highway ensures a smooth daily commute, while a nearby daycare center provides a convenience for parents of young kids. Access to the metro and public transportation simplifies city travel, and the adjacent park and bicycle path offer opportunities for outdoor leisure. Families will appreciate the proximity of an elementary school and high school. In terms of its interior, the ground floor of his home welcomes you with a spacious living room, a well-equipped kitchen, and an inviting dining room for family gatherings. A convenient powder room and a practical laundry room add to its functionality. Upstairs, you will find the primary bedroom with wood flooring, along with two additional bedrooms, also featuring wood flooring. The ceramic-tiled bathroom completes the second level. This property offers a blend of location and interior comfort, making it a perfect choice for those seeking a balanced and accessible lifestyle.', 'property_images/property_8.jpg'),
(9, 'Montreal', 'Outremont', '1275 Av. Van Horne app. 61', 1149000, 'Condominium', 2, 2, 1, 'Discover a rare gem in this top-floor condo with a stunning terrace and Mount Royal views. This bright unit offers a spacious master bedroom with an ensuite bathroom, a second bedroom, another bathroom, a well-equipped kitchen, double living spaces, a laundry room, a private garage, and ample storage, all within a well-managed condominium. Inside, enjoy over 1,550 sq ft of elegant space with hardwood floors and clever storage. The sizable terrace provides breathtaking views and ample sunshine. The location is ideal, just a short walk from the Outremont metro station, John F. Kennedy Park, bakeries, restaurants, and shops. It\'s also convenient for schools and essential services as it is near elementary schools, high schools and the MIL campus of UDeM. This condo offers both a beautiful living space and a vibrant neighborhood, making it the perfect place to call home.', 'property_images/property_9.jpg'),
(10, 'Laval', 'Sainte-Dorothee', '438 Rue des Anemones', 3088000, 'Two-Storey House', 5, 5, 1, 'This prestigious home showcases luxury and attention to detail in a serene setting. Boasting four spacious bedrooms, each with its ensuite bathroom, and a convenient top-floor laundry room, it ensures privacy and practicality for your family. Upon entry, a grand foyer leads to the heart of the home: an open main level seamlessly connecting the living room, dining area, and gourmet kitchen. This kitchen, a haven for culinary enthusiasts, features top-tier appliances and ample counter space, making it ideal for gatherings. One of the home\'s highlights is the large in-ground saltwater pool, creating a private oasis for relaxation. The pool area is enhanced by a well-planned outdoor kitchen. Beyond the impressive interior, this residence offers a spacious two-car garage with built-in storage, ensuring secure parking for your vehicles. Nestled in a highly sought-after neighborhood, it has the advantage of being close to amenities, schools, and recreational facilities, making it an ideal harmonious homespace in a prime location.', 'property_images/property_10.jpg'),
(11, 'Montreal', 'Ville-Marie', '1010-628 Rue St-Jacques', 575000, 'Condominium', 2, 2, 0, 'This corner unit condo is located on the 10th floor, with an exceptional view of the city and an interior that is bathed in natural light from numerous windows. This condo offers 2 bedrooms, 2 bathrooms, including an ensuite, and comes complete with 5 appliances. Be the first to reside in this upscale condominium, ideally situated across from Parc Square-Victoria, with immediate occupancy available, making it unbeatable value for the money. Inclusions comprise a refrigerator, stove, dishwasher, washer & dryer, custom window coverings, and all electric light fixtures. The building features amenities like elevators, a sauna, and a central heat pump, along with an inground pool and common spa. Additionally, the location provides easy access to highways, schools, universities, parks, public transportation, and more. With its modern design and prime location, this condo is a remarkable find.', 'property_images/property_11.jpg'),
(12, 'Blainville', 'Blainville Nord', '37 Rue du Commandant', 699000, 'Two-Storey House', 4, 2, 1, 'Situated on a tranquil street, this delightful home offers an exceptionally private backyard, shielded from view with no rear neighbors and a lush cedar hedge. This charming cottage, complete with a garage, caters perfectly to your family\'s needs, featuring three spacious bedrooms on the upper floor. The basement received a modern update in 2023, now housing an up-to-date bathroom and a fourth bedroom. The main floor is inviting, with a welcoming entrance, a wood-burning fireplace in the living room, and a dining area connected to the well-appointed kitchen, featuring ample storage space. The location is ideal, within walking distance to Semailles school, close to the commuter train, cycling paths, an equestrian park, and all essential amenities. ', 'property_images/property_12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`properties_id`),
  ADD UNIQUE KEY `address` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `properties_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
