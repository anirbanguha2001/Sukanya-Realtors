-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 08:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sukanya_realtors`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `CID` int(11) NOT NULL,
  `CProject` text NOT NULL,
  `CName` varchar(50) NOT NULL,
  `CNumber` varchar(20) NOT NULL,
  `CEmail` varchar(50) NOT NULL,
  `CMessage` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`CID`, `CProject`, `CName`, `CNumber`, `CEmail`, `CMessage`) VALUES
(1, 'Sky Height', 'Anirban Guha', '6297317526', 'aaassa@gmail.com', 'gdffafagsehsrgsf'),
(2, '', 'Anirban Guha', '6297317526', 'aaassa@gmail.com', 'DSFSGDHDX'),
(3, 'Urban Height', 'Anirban Guha', '06297317526', 'aaassa@gmail.com', 'vsdvadAFawgfesg'),
(4, 'Godhuli', 'Anirban Guha', '122337736123', 'ZSAsdfdfsd@gmail.com', 'zsgdrgawfrAWG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
