-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 12:28 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poultryrx`
--

-- --------------------------------------------------------

--
-- Table structure for table `vet_data`
--

CREATE TABLE `vet_data` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `bvc_reg` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `division` varchar(55) NOT NULL,
  `district` varchar(55) NOT NULL,
  `upazila` varchar(255) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Job_Type` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vet_data`
--

INSERT INTO `vet_data` (`id`, `Name`, `blood_group`, `bvc_reg`, `Mobile`, `email`, `Gender`, `division`, `district`, `upazila`, `Designation`, `Job_Type`, `Address`) VALUES
(14, 'Dr. Mitun sarkar', 'AB+', '3210', '01743430971', 'vetmitun@gmail.com', 'male', '3', '12', 'Narsingdi Sadar Upazila', 'Veterinary Surgeon', 'Government', 'Upazila Livestock Office, Narsingdi Sadar, Narsingdi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vet_data`
--
ALTER TABLE `vet_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vet_data`
--
ALTER TABLE `vet_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
