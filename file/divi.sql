-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2019 at 10:05 PM
-- Server version: 10.3.20-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vetmitun_draft`
--

-- --------------------------------------------------------

--
-- Table structure for table `divi`
--

CREATE TABLE `divi` (
  `id` int(2) NOT NULL,
  `division` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `upazila` varchar(30) NOT NULL,
  `unions` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divi`
--

INSERT INTO `divi` (`id`, `division`, `district`, `upazila`, `unions`) VALUES
(1, '3', '12', '228', '22'),
(2, '3', '12', '228', 'Alokbali'),
(3, '3', '12', '228', 'Alokbali'),
(4, '3', '12', '228', 'Chardighaldi'),
(5, '1', '', '', ''),
(6, '3', '12', '228', 'Mahishasura'),
(7, 'Dhaka', '', '', ''),
(8, '3', '12', '228', 'Hajipur'),
(9, '3', '12', '228', 'Chardighaldi'),
(10, '3', '12', '228', 'Alokbali'),
(11, 'Dhaka', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '3', '12', '228', 'Mahishasura'),
(17, '3', '12', '228', 'Meherpara'),
(18, '3', '12', '228', 'Chardighaldi'),
(19, '3', '12', '228', 'Alokbali'),
(20, '3', '12', '228', 'Alokbali'),
(21, '3', '12', '228', 'Alokbali'),
(22, '3', '12', '228', 'Alokbali'),
(23, '3', '12', '228', 'Alokbali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divi`
--
ALTER TABLE `divi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divi`
--
ALTER TABLE `divi`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
