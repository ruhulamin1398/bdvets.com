-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 12:20 PM
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
-- Table structure for table `farmers_data`
--

CREATE TABLE `farmers_data` (
  `id` int(11) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `farmers_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `division` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `upazila` varchar(50) NOT NULL,
  `uni` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `farming_type` varchar(30) NOT NULL,
  `cattle` varchar(30) NOT NULL,
  `cattle_no` varchar(20) NOT NULL,
  `goat` varchar(30) NOT NULL,
  `goat_no` varchar(11) NOT NULL,
  `buffalo` varchar(30) NOT NULL,
  `buffalo_no` varchar(11) NOT NULL,
  `sheep` varchar(30) NOT NULL,
  `sheep_no` varchar(11) NOT NULL,
  `others` varchar(20) NOT NULL,
  `others_no` varchar(10) NOT NULL,
  `poultry_farming_type` varchar(50) NOT NULL,
  `poultry_type` varchar(20) NOT NULL,
  `chicken` varchar(30) NOT NULL,
  `chicken_no` varchar(11) NOT NULL,
  `pigeon` varchar(30) NOT NULL,
  `pigeon_no` varchar(11) NOT NULL,
  `duck` varchar(30) NOT NULL,
  `duck_no` varchar(11) NOT NULL,
  `turkey` varchar(30) NOT NULL,
  `turkey_no` varchar(11) NOT NULL,
  `others_poultry` varchar(30) NOT NULL,
  `others_poultry_no` varchar(11) NOT NULL,
  `entry_date` varchar(50) NOT NULL,
  `entry_by` varchar(50) NOT NULL,
  `last_updated` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers_data`
--
ALTER TABLE `farmers_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers_data`
--
ALTER TABLE `farmers_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=853;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
