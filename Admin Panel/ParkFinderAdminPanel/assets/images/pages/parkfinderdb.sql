-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 05:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkfinderdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `NumberPhone` int(11) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role` varchar(50) DEFAULT 'admin',
  `photo` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `City` text DEFAULT NULL,
  `Country` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'authorized'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `FirstName`, `LastName`, `Email`, `NumberPhone`, `password`, `role`, `photo`, `address`, `City`, `Country`, `status`) VALUES
(1, 'abdo', 'misbah', 'abdo.misbah@parkFinder.com', 699013879, '$2a$10$b3ntR90C9BoBRHo2vYCQ0ev.fF728L8TtNyRUyx5rIzbqV963soF2', 'superAdmin', '../../assets/images/OurPicts/Misbah.jpg', 'Casablanca Nearshore Park, Shore 1', 'rabat', 'ghana', 'authorized'),
(3, 'Amine', 'Hafayan', 'Amine.Hafayan@parkFinder.com', 60000000, '$2a$10$HeMp5N2MTLY4SIaJ6yYcsemh15cx3zvw85IootnDoWeSrSWrqBkj6', 'admin', NULL, NULL, NULL, NULL, 'authorized'),
(7, 'Amiiine', 'Hafayan', 'Amiiine.Hafayan@parkFinder.com', 60000500, '$2a$10$K5nfQYIBSzqEGvrbHQ2e0.EwPFXVmV0kzof.iexlEyTtF9Y0gsAbO', 'admin', NULL, NULL, NULL, NULL, 'deleted'),
(8, NULL, NULL, 'undefined.undefined@parkFinder.com', NULL, '$2a$10$xTPKnnXReFp1YJonyB4qDO.PvMrtrc4xi/8K05vPZ80FXqEgiRrKa', 'admin', NULL, NULL, NULL, NULL, 'deleted'),
(9, 'abdelmounaim', 'Misbah', NULL, NULL, NULL, 'superAdmin', NULL, 'Casablanca Nearshore Park, Shore 1', 'casablanca', 'Morroco', 'authorized'),
(10, 'abdelmounaim', 'Misbah', 'abdelmounaim.Misbah@parkFinder.com', 2147483647, '$2a$10$kcJ4vmnEopTF0xbMYaqboez69gt6G7TCzGfAk9Y9/HRcW041S0KRG', 'superAdmin', NULL, 'Casablanca Nearshore Park, Shore 1', 'casablanca', 'Morroco', 'authorized'),
(11, 'test', 'test', 'test.test@parkFinder.com', 77777777, '$2a$10$DV.JgTN1g9PUskh/1wpCqOVgLJnIZkUXjNNt6GaYNkFgegqSDPOcO', 'admin', NULL, 'Casablanca Nearshore Park, Shore 1', 'casablanca', 'ghana', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `matricule` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `matricule`) VALUES
(1, '21/B1/1548');

-- --------------------------------------------------------

--
-- Table structure for table `parkings`
--

CREATE TABLE `parkings` (
  `id` varchar(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `NbPlace` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `coordX` float DEFAULT NULL,
  `coordY` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parkings`
--

INSERT INTO `parkings` (`id`, `Name`, `city`, `NbPlace`, `description`, `photo`, `coordX`, `coordY`) VALUES
('1', 'parking 1', 'casa', 40, 'parking hahahah', NULL, -6.58989, 33.6039),
('2', 'Parking 2', 'rabat', 60, 'parking description', NULL, -6.08989, 33.6039),
('3', 'Parking 3', 'Agadir', 50, 'PARKING RABAT', NULL, -6.08, 33.0039),
('A17', 'Aziz', 'casa', 20, 'test', NULL, -6, 33.9039),
('A18', 'parking 12', 'Casa', 50, 'test', NULL, -6.0555, 33.798),
('A19', 'parking 122', 'casa', 50, 'test', NULL, -6.544, 33.554);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` varchar(10) NOT NULL,
  `state` varchar(50) DEFAULT 'free',
  `id_parking` varchar(10) DEFAULT NULL,
  `id_reservation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `state`, `id_parking`, `id_reservation`) VALUES
('1', 'inUsed', '1', 5),
('2', 'inUsed', '2', NULL),
('3', 'free', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `dateTime_start_reservation` datetime DEFAULT current_timestamp(),
  `dateTime_end_reservation` datetime DEFAULT current_timestamp(),
  `username` varchar(100) DEFAULT NULL,
  `id_place` varchar(10) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `dateTime_start_reservation`, `dateTime_end_reservation`, `username`, `id_place`, `id_car`) VALUES
(5, '2021-06-14 21:26:26', '2021-06-14 21:26:27', 'amineElkhal12', '1', 1),
(6, '2021-08-14 20:10:10', '2021-06-16 01:04:42', 'User_12345', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `NumberPhone` int(11) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `NbPoints` float DEFAULT 0,
  `address` text DEFAULT NULL,
  `typePack` varchar(20) DEFAULT NULL,
  `packStart` date DEFAULT NULL,
  `packEnd` date DEFAULT NULL,
  `cardNumber` varchar(16) DEFAULT NULL,
  `cardEnd` date DEFAULT NULL,
  `cvc` varchar(3) DEFAULT NULL,
  `stateAccount` varchar(50) DEFAULT 'authorized',
  `isConnected` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `username`, `Email`, `NumberPhone`, `password`, `NbPoints`, `address`, `typePack`, `packStart`, `packEnd`, `cardNumber`, `cardEnd`, `cvc`, `stateAccount`, `isConnected`) VALUES
(1, 'amine', 'elkhal', 'amineElkhal12', 'amine@gmail.com', NULL, '$2a$10$zEF1kNbfbru4bSsSuc0kveAyaBZ29cKZTtxpmAXfxlEzmVnFyvI96', 0, NULL, NULL, '2021-06-14', '2021-06-14', NULL, NULL, NULL, 'blocked', 0),
(7, NULL, NULL, 'User_12345', 'user.user@gmail.com', NULL, '$2a$10$0P./cNr8sIFdgUGzB8K4/e7Q.FdNZHYCB1EZ3jQDDGJeU33phHJ.y', 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'deleted', NULL),
(9, NULL, NULL, 'abdooooomh10', 'www.abdo200@gmail.com', NULL, '$2a$10$YpCQDRBCQaF74UIDXRzFnen6wYnyFSFXFuyGH.McbZA3S.kmU4ipu', 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'deleted', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NumberPhone` (`NumberPhone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- Indexes for table `parkings`
--
ALTER TABLE `parkings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_parking` (`id_parking`),
  ADD KEY `id_reservation` (`id_reservation`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_place` (`id_place`),
  ADD KEY `username` (`username`),
  ADD KEY `id_car` (`id_car`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `NumberPhone` (`NumberPhone`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `cardNumber` (`cardNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`id_parking`) REFERENCES `parkings` (`id`),
  ADD CONSTRAINT `place_ibfk_2` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_place`) REFERENCES `place` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`id_car`) REFERENCES `car` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
