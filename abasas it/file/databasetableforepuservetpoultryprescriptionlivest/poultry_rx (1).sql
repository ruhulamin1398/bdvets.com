-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 12:25 PM
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
-- Table structure for table `poultry_rx`
--

CREATE TABLE `poultry_rx` (
  `poultry_rx_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `farmers_id` int(11) NOT NULL,
  `farmers_mobile` varchar(15) NOT NULL,
  `farmers_name` varchar(100) NOT NULL,
  `species` varchar(20) NOT NULL,
  `for_type` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `birds_no` varchar(10) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `feeding` varchar(20) NOT NULL,
  `water_intake` varchar(20) NOT NULL,
  `oc` varchar(100) NOT NULL,
  `oc1` varchar(100) NOT NULL,
  `illness_seen` varchar(20) NOT NULL,
  `affected_no` varchar(10) NOT NULL,
  `dead_no` varchar(10) NOT NULL,
  `medication` varchar(50) NOT NULL,
  `medication1` varchar(50) NOT NULL,
  `respiratory_signs` varchar(100) NOT NULL,
  `digestive_signs` varchar(100) NOT NULL,
  `musculoskeletal_signs` varchar(100) NOT NULL,
  `bursa` varchar(50) NOT NULL,
  `proventriculus` varchar(50) NOT NULL,
  `airsac` varchar(50) NOT NULL,
  `liver` varchar(50) NOT NULL,
  `kidney` varchar(30) NOT NULL,
  `yolksac` varchar(30) NOT NULL,
  `heart` varchar(100) NOT NULL,
  `ceca` varchar(50) NOT NULL,
  `td` varchar(20) NOT NULL,
  `td1` varchar(20) NOT NULL,
  `td2` varchar(20) NOT NULL,
  `td3` varchar(20) NOT NULL,
  `td4` varchar(20) NOT NULL,
  `advice` varchar(200) NOT NULL,
  `advice1` varchar(150) NOT NULL,
  `rx_date` varchar(20) NOT NULL,
  `antibiotics` varchar(100) NOT NULL,
  `dose` varchar(150) CHARACTER SET utf8 NOT NULL,
  `duration` varchar(100) NOT NULL,
  `antimicrobials` varchar(150) NOT NULL,
  `antimicrobials_dose` varchar(150) NOT NULL,
  `antimicrobials_duration` varchar(100) NOT NULL,
  `antivirals` varchar(150) NOT NULL,
  `antivirals_dose` varchar(100) NOT NULL,
  `antivirals_duration` varchar(100) NOT NULL,
  `vitamins` varchar(150) NOT NULL,
  `vitamins_dose` varchar(100) NOT NULL,
  `vitamins_duration` varchar(100) NOT NULL,
  `lktonics` varchar(255) NOT NULL,
  `lktonics_dose` varchar(255) NOT NULL,
  `lktonics_duration` varchar(100) NOT NULL,
  `probiotics` varchar(255) NOT NULL,
  `probiotics_dose` varchar(200) NOT NULL,
  `probiotics_duration` varchar(255) NOT NULL,
  `anticoccidials` varchar(150) NOT NULL,
  `anticoccidials_dose` varchar(150) NOT NULL,
  `anticoccidials_duration` varchar(100) NOT NULL,
  `antiinflammatories` varchar(150) NOT NULL,
  `antiinflammatories_dose` varchar(150) NOT NULL,
  `antiinflammatories_duration` varchar(150) NOT NULL,
  `acidifiers` varchar(250) NOT NULL,
  `acidifiers_dose` varchar(250) NOT NULL,
  `acidifiers_duration` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poultry_rx`
--

INSERT INTO `poultry_rx` (`poultry_rx_id`, `dr_id`, `farmers_id`, `farmers_mobile`, `farmers_name`, `species`, `for_type`, `age`, `birds_no`, `weight`, `feeding`, `water_intake`, `oc`, `oc1`, `illness_seen`, `affected_no`, `dead_no`, `medication`, `medication1`, `respiratory_signs`, `digestive_signs`, `musculoskeletal_signs`, `bursa`, `proventriculus`, `airsac`, `liver`, `kidney`, `yolksac`, `heart`, `ceca`, `td`, `td1`, `td2`, `td3`, `td4`, `advice`, `advice1`, `rx_date`, `antibiotics`, `dose`, `duration`, `antimicrobials`, `antimicrobials_dose`, `antimicrobials_duration`, `antivirals`, `antivirals_dose`, `antivirals_duration`, `vitamins`, `vitamins_dose`, `vitamins_duration`, `lktonics`, `lktonics_dose`, `lktonics_duration`, `probiotics`, `probiotics_dose`, `probiotics_duration`, `anticoccidials`, `anticoccidials_dose`, `anticoccidials_duration`, `antiinflammatories`, `antiinflammatories_dose`, `antiinflammatories_duration`, `acidifiers`, `acidifiers_dose`, `acidifiers_duration`) VALUES
(104, 0, 802, '1234567889', 'Taslima Begum ', 'Duck', 'Duck', '120   days', '', '    gm', '   gm', '   Liter', 'Diziness', '', '2019-11-25', '', '', '', '', '', '', '', '', '', '', 'Enlargement of the liver', '', '', '', '', 'DP', '', '', '', '', '', '', '2019-12-04', 'AD Flor 200 Sol. - 100 ml ', 'Sig.  à§§ à¦®à¦¿à¦²à¦¿ à¦ªà§à¦°à¦¤à¦¿ à§¨ à¦²à¦¿à¦Ÿà¦¾à¦° à¦–à¦¾à¦¬à¦¾à¦° à¦ªà¦¾à¦¨à¦¿à¦¤à§‡ ', 'à¦¸à¦•à¦¾à¦², à¦¦à§à¦ªà§à¦° à¦“ à¦¬à¦¿à¦•à¦¾à¦² à§© à¦¦à¦¿à¦¨ ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poultry_rx`
--
ALTER TABLE `poultry_rx`
  ADD PRIMARY KEY (`poultry_rx_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poultry_rx`
--
ALTER TABLE `poultry_rx`
  MODIFY `poultry_rx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
