-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 06:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `VaccineID` int(11) NOT NULL,
  `VaccineName` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `StockQuantity` int(11) NOT NULL,
  `Dosage` varchar(1000) NOT NULL,
  `ExpirationDate` date NOT NULL,
  `DateAdded` date NOT NULL DEFAULT current_timestamp(),
  `Remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`VaccineID`, `VaccineName`, `Brand`, `StockQuantity`, `Dosage`, `ExpirationDate`, `DateAdded`, `Remarks`) VALUES
(60, 'Aztrazeneca', 'America', 23, '40ml', '2023-09-05', '2023-09-16', 'Available'),
(88, 'Camon', 'America', 3423, '23', '2023-09-05', '2023-09-18', 'Not Available'),
(91, 'Pfizer', 'America', 23, '10ml', '2023-09-24', '2023-09-27', 'Out of Stock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`VaccineID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `VaccineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
