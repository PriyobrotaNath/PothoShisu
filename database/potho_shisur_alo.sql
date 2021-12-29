-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 09:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `potho_shisur_alo`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `teacher_available_time` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_donation`
--

CREATE TABLE `food_donation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(12) NOT NULL,
  `pick_up_address` varchar(255) NOT NULL,
  `donation_school_name` varchar(255) DEFAULT NULL,
  `food_type` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cooked_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `desire_donation_date` date DEFAULT NULL,
  `delivary_system` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `manpower_id` int(11) DEFAULT NULL,
  `donar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_donation`
--

INSERT INTO `food_donation` (`id`, `name`, `contact`, `pick_up_address`, `donation_school_name`, `food_type`, `item_name`, `quantity`, `cooked_date`, `expire_date`, `desire_donation_date`, `delivary_system`, `status`, `manpower_id`, `donar_id`) VALUES
(1, 'Laila Israt Jahan', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Laila Israt Jahan', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'p', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'g', 1789989668, 'H-66,Bank Colony ,Savar,Dhaka', 'g', 'Cooked', 'g', 10, '2019-01-01', '2020-01-01', '2019-01-02', 'Self Service', NULL, NULL, NULL),
(5, 'g', 1789989668, 'H-66,Bank Colony ,Savar,Dhaka', 'g', 'Cooked', 'g', 10, '2019-01-01', '2020-01-01', '2019-01-02', 'Self Service', NULL, NULL, NULL),
(6, 'g', 1789985678, 'H-66,Bank Colony ,Savar,Dhaka', 'f', 'Cooked', 'e', 4, '2019-01-01', '2020-01-01', '2019-01-22', 'Self Service', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manpower_donation`
--

CREATE TABLE `manpower_donation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(12) NOT NULL,
  `nid` int(26) DEFAULT NULL,
  `birth_certificate_number` int(30) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `desire_working_area` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `donar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(12) NOT NULL,
  `nid` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `contact`, `nid`, `email`, `address`, `category`, `password`) VALUES
(3, 'laib', 1789985668, 5675, 'lailaisrat1195@gmail.com', 'H-66,Bank Colony ,Savar,Dhaka', 'Donar', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `yy` (`teacher_id`);

--
-- Indexes for table `food_donation`
--
ALTER TABLE `food_donation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donar_id` (`donar_id`),
  ADD KEY `manpower_id` (`manpower_id`);

--
-- Indexes for table `manpower_donation`
--
ALTER TABLE `manpower_donation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donar_id` (`donar_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_donation`
--
ALTER TABLE `food_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manpower_donation`
--
ALTER TABLE `manpower_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `yy` FOREIGN KEY (`teacher_id`) REFERENCES `manpower_donation` (`id`);

--
-- Constraints for table `food_donation`
--
ALTER TABLE `food_donation`
  ADD CONSTRAINT `food_donation_ibfk_1` FOREIGN KEY (`donar_id`) REFERENCES `registration` (`id`),
  ADD CONSTRAINT `food_donation_ibfk_2` FOREIGN KEY (`manpower_id`) REFERENCES `manpower_donation` (`id`);

--
-- Constraints for table `manpower_donation`
--
ALTER TABLE `manpower_donation`
  ADD CONSTRAINT `manpower_donation_ibfk_1` FOREIGN KEY (`donar_id`) REFERENCES `registration` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
