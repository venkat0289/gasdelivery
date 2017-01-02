-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 07:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gas_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `client_name` varchar(250) NOT NULL,
  `consumer_number` varchar(250) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `area` varchar(250) NOT NULL,
  `type_of_cylinder` int(11) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` enum('A','D') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_name`, `consumer_number`, `mobile_number`, `address`, `area`, `type_of_cylinder`, `created_datetime`, `updated_datetime`, `flag`) VALUES
(1, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(2, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(3, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(4, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(5, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(6, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(7, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(8, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(9, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(10, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(11, 'venkatk', '123456', '9600934808', 'sirkali', 'Railway street', 1, '2016-12-18 07:21:31', '2016-12-18 07:21:31', 'A'),
(12, 'Client ABC', '5454', '9878654345', 'Test', 'Test', 2, '2016-12-18 14:50:41', '2016-12-18 14:50:41', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `cylinder_rate`
--

CREATE TABLE `cylinder_rate` (
  `id` int(11) NOT NULL,
  `cylinder_type` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `flag` enum('A','D') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cylinder_rate`
--

INSERT INTO `cylinder_rate` (`id`, `cylinder_type`, `price`, `flag`) VALUES
(1, 'Subsidy', 25.897, 'A'),
(2, 'Non-subsidy', 20.98, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `id` int(11) NOT NULL,
  `delivery_boy_name` varchar(250) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `assigned_area` varchar(250) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` enum('A','D') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_boy`
--

INSERT INTO `delivery_boy` (`id`, `delivery_boy_name`, `contact_number`, `assigned_area`, `created_datetime`, `updated_datetime`, `flag`) VALUES
(1, 'venkat', '9600934808', 'bangalore', '2016-12-18 07:52:43', '2016-12-18 07:52:43', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cylinder_rate`
--
ALTER TABLE `cylinder_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cylinder_rate`
--
ALTER TABLE `cylinder_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
