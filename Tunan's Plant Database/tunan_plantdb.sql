-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 10:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunan_plantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `AdminID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `care_schedule`
--

CREATE TABLE `care_schedule` (
  `CareID` int(11) NOT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Sub_Type` varchar(50) DEFAULT NULL,
  `Size` varchar(20) DEFAULT NULL,
  `Instructions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `care_schedule`
--

INSERT INTO `care_schedule` (`CareID`, `Category`, `Sub_Type`, `Size`, `Instructions`) VALUES
(1, 'Indoor', 'Fern', 'Medium', 'Place in a well-lit room with indirect sunlight. Keep soil consistently moist.'),
(2, 'Indoor', 'Cactus', 'Small', 'Water sparingly, allow soil to dry between waterings. Place in a sunny spot.'),
(3, 'Outdoor', 'Maple', 'Large', 'Plant in well-draining soil. Water regularly, especially during dry spells.'),
(4, 'Outdoor', 'Pine', 'Large', 'Prefers acidic soil. Water deeply but infrequently.'),
(5, 'Flowering', 'Rose', 'Medium', 'Water every 7 days. Provide sunlight for at least 6 hours a day.'),
(6, 'Flowering', 'Lily', 'Small', 'Keep soil consistently moist. Place in a location with bright, indirect sunlight.'),
(7, 'Non-flowering', 'Apple', 'Medium', 'Plant in well-drained soil. Prune in late winter for shape and structure.'),
(8, 'Flowering', 'Tulip', 'Small', 'Plant bulbs in the fall. Provide well-drained soil and full sun.'),
(9, 'Outdoor', 'Oak', 'Large', 'Plant in a location with full sun. Water regularly, especially in the first year.'),
(10, 'Indoor', 'Sunflower', 'Medium', 'Needs full sun. Water consistently and provide support for tall stems.'),
(11, 'Flowering', 'Carnation', 'Small', 'Water when soil is dry to the touch. Provide bright, indirect sunlight.'),
(12, 'Flowering', 'Tulip', 'Small', 'Plant bulbs in the fall. Provide well-drained soil and full sun.'),
(13, 'Flowering', 'Lavender', 'Small', 'Plant in well-drained soil. Prune after flowering to encourage bushiness.'),
(14, 'Outdoor', 'Pine', 'Large', 'Prefers acidic soil. Water deeply but infrequently.');

-- --------------------------------------------------------

--
-- Table structure for table `event_database`
--

CREATE TABLE `event_database` (
  `EventID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `EventName` varchar(255) DEFAULT NULL,
  `EventType` varchar(255) DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plant_database`
--

CREATE TABLE `plant_database` (
  `PlantDataID` int(11) NOT NULL,
  `Species` varchar(255) DEFAULT NULL,
  `Plant_Name` varchar(255) DEFAULT NULL,
  `Season` varchar(50) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Soil_Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant_database`
--

INSERT INTO `plant_database` (`PlantDataID`, `Species`, `Plant_Name`, `Season`, `Category`, `Soil_Type`) VALUES
(1, 'Rosa spp.', 'Rose', 'All year', 'Flowering', 'Well-draining soil'),
(2, 'Sansevieria trifasciata', 'Snake Plant', 'All year', 'Indoor', 'Sandy soil'),
(3, 'Helianthus annuus', 'Sunflower', 'Summer', 'Outdoor', 'Loamy soil'),
(4, 'Ficus lyrata', 'Fiddle Leaf Fig', 'All year', 'Indoor', 'Well-draining soil'),
(5, 'Lavandula spp.', 'Lavender', 'Spring-Summer', 'Outdoor', 'Sandy soil'),
(6, 'Aloe barbadensis miller', 'Aloe Vera', 'All year', 'Indoor', 'Sandy soil'),
(7, 'Bambusoideae', 'Bamboo', 'All year', 'Outdoor', 'Well-draining soil'),
(8, 'Epipremnum aureum', 'Pothos', 'All year', 'Indoor', 'Well-draining soil'),
(9, 'Solanum lycopersicum', 'Tomato Plant', 'Spring-Summer', 'Outdoor', 'Loamy soil'),
(10, 'Chlorophytum comosum', 'Spider Plant', 'All year', 'Indoor', 'Well-draining soil'),
(11, 'Jasminum spp.', 'Jasmine', 'All year', 'Outdoor', 'Well-draining soil'),
(12, 'Zamioculcas zamiifolia', 'ZZ Plant', 'All year', 'Indoor', 'Sandy soil'),
(13, 'Narcissus pseudonarcissus', 'Daffodil', 'Spring', 'Outdoor', 'Loamy soil'),
(14, 'Cactaceae family', 'Cactus', 'All year', 'Indoor', 'Well-draining soil'),
(15, 'Mentha spp.', 'Mint', 'All year', 'Outdoor', 'Loamy soil'),
(16, 'Pachira aquatica', 'Money Tree', 'All year', 'Indoor', 'Sandy soil'),
(17, 'Bellis perennis', 'Daisy', 'All year', 'Outdoor', 'Loamy soil'),
(18, 'Ocimum basilicum', 'Basil', 'All year', 'Outdoor', 'Well-draining soil'),
(19, 'Matricaria chamomilla', 'Chamomile', 'All year', 'Outdoor', 'Loamy soil'),
(20, 'Tulipa spp.', 'Tulip', 'Winter-Spring', 'Outdoor', 'Well-draining soil'),
(21, 'Mango indica', 'Mango Tree', 'Summer', 'Outdoor', 'Well-draining soil'),
(22, 'Cymbopogon citratus', 'Lemon Grass', 'All year', 'Outdoor', 'Loamy soil'),
(23, 'Nymphaea spp.', 'Water Lily', 'Spring-Summer', 'Outdoor', 'Aquatic soil'),
(24, 'Psidium guajava', 'Guava Tree', 'All year', 'Outdoor', 'Well-draining soil'),
(25, 'Alocasia odora', 'Giant Taro', 'All year', 'Outdoor', 'Moist soil'),
(26, 'Jatropha curcas', 'Physic Nut', 'All year', 'Outdoor', 'Well-draining soil'),
(27, 'Morus spp.', 'Mulberry Tree', 'Spring', 'Outdoor', 'Well-draining soil'),
(28, 'Coccinia grandis', 'Ivy Gourd', 'Summer', 'Outdoor', 'Well-draining soil'),
(29, 'Santalum album', 'Sandalwood Tree', 'All year', 'Outdoor', 'Well-draining soil'),
(30, 'Ficus racemosa', 'Cluster Fig Tree', 'All year', 'Outdoor', 'Well-draining soil'),
(31, 'Bambusa vulgaris', 'Bamboo', 'All year', 'Outdoor', 'Well-draining soil'),
(32, 'Mimusops elengi', 'Spanish Cherry', 'All year', 'Outdoor', 'Well-draining soil'),
(33, 'Catharanthus roseus', 'Madagascar Periwinkle', 'All year', 'Outdoor', 'Well-draining soil'),
(34, 'Terminalia arjuna', 'Arjun Tree', 'All year', 'Outdoor', 'Well-draining soil'),
(35, 'Syzygium cumini', 'Jamun Tree', 'Summer', 'Outdoor', 'Well-draining soil'),
(36, 'Artocarpus heterophyllus', 'Jackfruit Tree', 'All year', 'Outdoor', 'Well-draining soil'),
(37, 'Cinnamomum verum', 'Cinnamon Tree', 'All year', 'Outdoor', 'Well-draining soil'),
(38, 'Morus alba', 'White Mulberry Tree', 'Spring', 'Outdoor', 'Well-draining soil'),
(39, 'Bauhinia variegata', 'Kachnar Tree', 'Spring', 'Outdoor', 'Well-draining soil'),
(40, 'Cassia fistula', 'Golden Shower Tree', 'Summer', 'Outdoor', 'Well-draining soil'),
(41, 'Camellia sinensis', 'Tea Plant', 'All year', 'Outdoor', 'Well-draining soil'),
(42, 'Fragaria x ananassa', 'Strawberry', 'Spring-Summer', 'Outdoor', 'Loamy soil'),
(43, 'Zingiber officinale', 'Ginger Plant', 'All year', 'Outdoor', 'Loamy soil'),
(44, 'Betula utilis', 'Himalayan Birch', 'All year', 'Outdoor', 'Well-draining soil'),
(45, 'Quercus serrata', 'Japanese Oak', 'All year', 'Outdoor', 'Well-draining soil'),
(46, 'Lagerstroemia spp.', 'Crape Myrtle', 'Summer', 'Outdoor', 'Well-draining soil'),
(47, 'Prunus serrulata', 'Japanese Cherry Blossom', 'Spring', 'Outdoor', 'Well-draining soil'),
(48, 'Citrus reticulata', 'Mandarin Orange Tree', 'Winter', 'Outdoor', 'Well-draining soil'),
(49, 'Morus mongolica', 'Korean Mulberry', 'Spring', 'Outdoor', 'Well-draining soil'),
(50, 'Phoenix dactylifera', 'Date Palm', 'All year', 'Outdoor', 'Well-draining soil'),
(51, 'Fernus Nonflorus', 'Green Fern', 'Spring', 'Non-flowering', 'Humus-rich soil'),
(52, 'Palmus Leaficus', 'Palm Leaf', 'Summer', 'Non-flowering', 'Sandy soil'),
(53, 'Cactus Nonblossomus', 'Spiky Cactus', 'Desert', 'Non-flowering', 'Well-draining soil'),
(54, 'Aloevira Succulentia', 'Aloe Vera', 'All seasons', 'Non-flowering', 'Sandy loam'),
(55, 'Bamboonus Leafensis', 'Bamboo', 'Autumn', 'Non-flowering', 'Moist soil'),
(56, 'Ficus Greenia', 'Ficus Tree', 'Year-round', 'Non-flowering', 'Well-drained soil'),
(57, 'Dracaena Spikalis', 'Dragon Plant', 'Winter', 'Non-flowering', 'Potting mix'),
(58, 'Snakeus Plantus', 'Snake Plant', 'All seasons', 'Non-flowering', 'Sandy loam'),
(59, 'Spiderus Chlorophytus', 'Spider Plant', 'Spring', 'Non-flowering', 'Well-drained soil'),
(60, 'Philodendron Leafyensis', 'Philodendron', 'Summer', 'Non-flowering', 'Peat-based mix'),
(61, 'Roses Bloomensis', 'Red Rose', 'Spring', 'Flowering', 'Well-drained soil'),
(62, 'Tulipus Coloris', 'Tulip', 'Spring', 'Flowering', 'Loamy soil'),
(63, 'Daisyus Petalum', 'White Daisy', 'Summer', 'Flowering', 'Rich soil'),
(64, 'Sunflowerus Brightus', 'Sunflower', 'Summer', 'Flowering', 'Sandy loam'),
(65, 'Lily Blossomia', 'Lily', 'Spring', 'Flowering', 'Moist soil'),
(66, 'Sansevieria Indooris', 'Snake Plant', 'Year-round', 'Indoor', 'Well-drained soil'),
(67, 'Pothos Greenia', 'Pothos', 'Year-round', 'Indoor', 'Moist soil'),
(68, 'Ficus Elastica', 'Rubber Plant', 'Year-round', 'Indoor', 'Well-drained soil'),
(69, 'Spiderus Chlorophytus', 'Spider Plant', 'Year-round', 'Indoor', 'Well-drained soil'),
(70, 'Spathiphyllum Peacefulis', 'Peace Lily', 'Year-round', 'Indoor', 'Moist soil');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TransactionID` int(11) NOT NULL,
  `BuyerID` int(11) DEFAULT NULL,
  `SellerID` int(11) DEFAULT NULL,
  `PlantID` int(11) DEFAULT NULL,
  `Transaction_Type` varchar(50) DEFAULT NULL,
  `Transaction_Date_Time` datetime DEFAULT NULL,
  `Payment_Method` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Registration_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`UserID`, `Username`, `Password`, `Email`, `Phone_Number`, `Registration_Date`) VALUES
(21, 'Username', '$2y$10$mKqpf940A3lWjnwF/gMFcer3ibCsX8Ec69IOdFVLaIf4142sqBKhK', 'username@gmail.com', NULL, NULL),
(22, 'Tunan', '$2y$10$f8U5uloBCY3KgsToWwr6eepY.sNLLLth.hfi6OzsdcBm3LTo9ccem', 'tunan@gmail.com', NULL, NULL),
(23, 'Saiara', '$2y$10$2RVsGNIzpG6TL36gC6veq.uMPug17nHEXPfiq8suZmfiCh3anaPfm', 'saiara@nothing.com', '999999999999', NULL),
(24, 'HafezAhmedMunna', '$2y$10$ZlqkAeZJOuP1vO.av7J6Gu6HYuBiv6qefbM9/ZlbItAu/qSs6jlxO', 'hafezahmed@gmail.com', '01937053977', NULL),
(25, 'Neeha', '$2y$10$tNuAectpPeh5M.xeLDF.weFncRIoM.PDtYa7VjdmloFjto2d5dTti', 'neeha@something.com', '55555555555', NULL),
(26, 'Arnob', '$2y$10$7WFzEGNAxwpbF63Jf75uFubX97Ath0hiVJZUt9F4FUFpboiw69GYC', 'arnob@gmail.com', '44444444444', NULL),
(27, 'ABCD', '$2y$10$oAzQfXWJdTH4CizUt27Uoe/R1THqbJ0u.LZoc.hvvkzKt7yNPzXki', 'abcd@gmail.com', '0123456987', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_plant`
--

CREATE TABLE `user_plant` (
  `PlantID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Species` varchar(255) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `ShortDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_plant`
--

INSERT INTO `user_plant` (`PlantID`, `UserID`, `Name`, `Species`, `Category`, `Age`, `ShortDescription`) VALUES
(41, 24, 'Money Plant', 'Devil\'s ivy', 'Indoor', 2, 'Healthy '),
(42, 22, 'Tulip', 'Tulipa xgesneriana', 'Flowering', 2, 'Very pleasing looking'),
(43, 24, 'Rose', 'Rosa sativa', 'Flowering', 1, 'Decorative'),
(44, 24, 'Cactus ', 'Catus ', 'Indoor', 1, 'Sharp'),
(45, 22, 'Aloe Vera', 'Aloe aculeata', 'Indoor ', 3, 'Price Negotiable '),
(50, 24, 'Aloe Vera', 'Aloe', 'Indoor', 2, 'None'),
(52, 23, 'Rose', 'Rose Merry', 'Flowering', 2, 'Beautiful'),
(55, 23, 'Money Plant', 'Devil\'s ivy', 'Indoor', 4, 'Simple'),
(57, 23, 'Fiddle Leaf Fig', 'Ficus lyrata', 'Indoor', 2, 'Well'),
(58, 25, 'Spanish Cherry', 'Mimusops elengi', 'Outdoor', 5, 'Good'),
(59, 25, 'Pothos', 'Pothos Greenia', 'Indoor', 2, 'Cute'),
(60, 22, 'Red Rose', 'Roses Bloomensis', 'Flowering', 2, 'Red'),
(61, 22, 'Tulip', 'Tulipus Coloris', 'Flowering', 2, 'Pinkish White'),
(62, 22, 'White Daisy', 'Daisyus Petalum', 'Flowering', 3, 'Bright Orange  '),
(63, 22, 'Lily', 'Lily Blossomia', 'Flowering', 4, 'Yellowish '),
(64, 23, 'Sunflower', 'Sunflowerus Brightus', 'Flowering', 5, 'Sunny looking'),
(65, 25, 'Snake Plant', 'Sansevieria Indooris', 'Indoor', 1, 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `care_schedule`
--
ALTER TABLE `care_schedule`
  ADD PRIMARY KEY (`CareID`);

--
-- Indexes for table `event_database`
--
ALTER TABLE `event_database`
  ADD PRIMARY KEY (`EventID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `plant_database`
--
ALTER TABLE `plant_database`
  ADD PRIMARY KEY (`PlantDataID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `BuyerID` (`BuyerID`),
  ADD KEY `SellerID` (`SellerID`),
  ADD KEY `PlantID` (`PlantID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `user_plant`
--
ALTER TABLE `user_plant`
  ADD PRIMARY KEY (`PlantID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `care_schedule`
--
ALTER TABLE `care_schedule`
  MODIFY `CareID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event_database`
--
ALTER TABLE `event_database`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plant_database`
--
ALTER TABLE `plant_database`
  MODIFY `PlantDataID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_plant`
--
ALTER TABLE `user_plant`
  MODIFY `PlantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_database`
--
ALTER TABLE `event_database`
  ADD CONSTRAINT `event_database_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user_info` (`UserID`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`BuyerID`) REFERENCES `user_info` (`UserID`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`SellerID`) REFERENCES `user_info` (`UserID`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`PlantID`) REFERENCES `user_info` (`UserID`);

--
-- Constraints for table `user_plant`
--
ALTER TABLE `user_plant`
  ADD CONSTRAINT `user_plant_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user_info` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
