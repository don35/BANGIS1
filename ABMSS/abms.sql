-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 05:20 AM
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
-- Database: `abms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userid`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin@123', 'admin'),
(3, 'Agri-Vet Office', 'Agri@123', 'Agri'),
(5, 'Don Ernesto Malaluan', 'DEM@123', 'ABTC'),
(6, 'Batangas Provincial Health Office', 'BPHO@123', 'ABTC'),
(7, 'Laurel Memorial District Hospital', 'LMDH@123', 'ABTC'),
(8, 'Lipa City District Hospital', 'LCDH@123', 'ABTC'),
(9, 'Lobo Municipal Hospital', 'LMH@123', 'ABTC'),
(10, 'Batangas Provincial Hospital', 'BPO@123', 'ABTC'),
(11, 'Don Manuel Lopez Memorial District Hospital', 'DMLMDH@123', 'ABTC'),
(12, 'Lian-Nasugbu Interlocal Health Zone', 'LNIHZ', 'ABTC'),
(13, 'laboratory', 'lab@123', 'LABORATORY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
