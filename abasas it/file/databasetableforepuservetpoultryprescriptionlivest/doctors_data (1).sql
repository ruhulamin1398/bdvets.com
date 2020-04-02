-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 12:15 PM
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
-- Table structure for table `doctors_data`
--

CREATE TABLE `doctors_data` (
  `rx_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `mobile` int(13) NOT NULL,
  `dfullname` varchar(200) NOT NULL,
  `degree_varsity` varchar(50) NOT NULL,
  `dreg_no` varchar(13) NOT NULL,
  `dcadre` varchar(200) NOT NULL,
  `ddesignation` varchar(50) NOT NULL,
  `doffice` varchar(50) NOT NULL,
  `dupazila` varchar(50) NOT NULL,
  `ddistrict` varchar(50) NOT NULL,
  `dmobile` varchar(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_data`
--

INSERT INTO `doctors_data` (`rx_id`, `id`, `mobile`, `dfullname`, `degree_varsity`, `dreg_no`, `dcadre`, `ddesignation`, `doffice`, `dupazila`, `ddistrict`, `dmobile`) VALUES
(34, 2, 1743430971, 'Dr. Mitun Sarkar', 'DVM (SAU)', '3210', 'BCS (Livestock)', 'Veterinary Surgeon', 'Upazila Livestock Office', 'Narsingdi Sadar', 'Narsingdi', '01743430971');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_data`
--
ALTER TABLE `doctors_data`
  ADD PRIMARY KEY (`rx_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_data`
--
ALTER TABLE `doctors_data`
  MODIFY `rx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
