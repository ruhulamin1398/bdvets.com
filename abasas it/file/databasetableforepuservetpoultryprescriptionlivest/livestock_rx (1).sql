-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 12:23 PM
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
-- Table structure for table `livestock_rx`
--

CREATE TABLE `livestock_rx` (
  `livestock_rx_id` int(13) NOT NULL,
  `dr_id` int(13) NOT NULL,
  `farmers_id` int(13) NOT NULL,
  `farmers_mobile` varchar(17) NOT NULL,
  `farmers_name` varchar(30) NOT NULL,
  `species` varchar(30) NOT NULL,
  `for_type` varchar(20) NOT NULL,
  `age` varchar(30) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `pregnancy` varchar(30) NOT NULL,
  `oc` varchar(30) NOT NULL,
  `oc1` varchar(30) NOT NULL,
  `illness_seen` varchar(20) NOT NULL,
  `affected_no` varchar(10) NOT NULL,
  `medication` varchar(40) NOT NULL,
  `medication1` varchar(40) NOT NULL,
  `respiratory_signs` varchar(50) NOT NULL,
  `digestive_signs` varchar(50) NOT NULL,
  `urogenital_signs` varchar(20) NOT NULL,
  `musculoskeletal_signs` varchar(50) NOT NULL,
  `integumentary_signs` varchar(55) NOT NULL,
  `other_signs` varchar(30) NOT NULL,
  `temperature` varchar(10) NOT NULL,
  `td` varchar(30) NOT NULL,
  `td1` varchar(30) NOT NULL,
  `td2` varchar(30) NOT NULL,
  `td3` varchar(30) NOT NULL,
  `td4` varchar(30) NOT NULL,
  `advice` varchar(250) NOT NULL,
  `rx_date` varchar(20) NOT NULL,
  `antibiotics` varchar(50) NOT NULL,
  `quantity` varchar(3) NOT NULL,
  `dose` varchar(150) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `antihistaminics` varchar(55) NOT NULL,
  `antihistaminics_quantity` varchar(3) NOT NULL,
  `antihistaminics_dose` varchar(150) NOT NULL,
  `antihistaminics_duration` varchar(50) NOT NULL,
  `antiinflammatories` varchar(50) NOT NULL,
  `antiinflammatories_quantity` varchar(3) NOT NULL,
  `antiinflammatories_dose` varchar(150) NOT NULL,
  `antiinflammatories_duration` varchar(50) NOT NULL,
  `antidiarrhoeals` varchar(50) NOT NULL,
  `antidiarrhoeals_quantity` varchar(3) NOT NULL,
  `antidiarrhoeals_dose` varchar(150) NOT NULL,
  `antidiarrhoeals_duration` varchar(50) NOT NULL,
  `rumenotorics` varchar(50) NOT NULL,
  `rumenotorics_quantity` varchar(3) NOT NULL,
  `rumenotorics_dose` varchar(150) NOT NULL,
  `rumenotorics_duration` varchar(100) NOT NULL,
  `vitamins` varchar(50) NOT NULL,
  `vitamins_quantity` varchar(3) NOT NULL,
  `vitamins_dose` varchar(150) NOT NULL,
  `vitamins_duration` varchar(50) NOT NULL,
  `lktonics` varchar(50) NOT NULL,
  `lktonics_quantity` varchar(3) NOT NULL,
  `lktonics_dose` varchar(150) NOT NULL,
  `lktonics_duration` varchar(50) NOT NULL,
  `probiotics` varchar(100) NOT NULL,
  `probiotics_quantity` varchar(3) NOT NULL,
  `probiotics_dose` varchar(200) NOT NULL,
  `probiotics_duration` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livestock_rx`
--

INSERT INTO `livestock_rx` (`livestock_rx_id`, `dr_id`, `farmers_id`, `farmers_mobile`, `farmers_name`, `species`, `for_type`, `age`, `weight`, `pregnancy`, `oc`, `oc1`, `illness_seen`, `affected_no`, `medication`, `medication1`, `respiratory_signs`, `digestive_signs`, `urogenital_signs`, `musculoskeletal_signs`, `integumentary_signs`, `other_signs`, `temperature`, `td`, `td1`, `td2`, `td3`, `td4`, `advice`, `rx_date`, `antibiotics`, `quantity`, `dose`, `duration`, `antihistaminics`, `antihistaminics_quantity`, `antihistaminics_dose`, `antihistaminics_duration`, `antiinflammatories`, `antiinflammatories_quantity`, `antiinflammatories_dose`, `antiinflammatories_duration`, `antidiarrhoeals`, `antidiarrhoeals_quantity`, `antidiarrhoeals_dose`, `antidiarrhoeals_duration`, `rumenotorics`, `rumenotorics_quantity`, `rumenotorics_dose`, `rumenotorics_duration`, `vitamins`, `vitamins_quantity`, `vitamins_dose`, `vitamins_duration`, `lktonics`, `lktonics_quantity`, `lktonics_dose`, `lktonics_duration`, `probiotics`, `probiotics_quantity`, `probiotics_dose`, `probiotics_duration`) VALUES
(31, 0, 602, '123456789', 'Md. Alamgir', '', '', '   months', '    kg', '   months', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-11-12', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '', '', '0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livestock_rx`
--
ALTER TABLE `livestock_rx`
  ADD PRIMARY KEY (`livestock_rx_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livestock_rx`
--
ALTER TABLE `livestock_rx`
  MODIFY `livestock_rx_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
