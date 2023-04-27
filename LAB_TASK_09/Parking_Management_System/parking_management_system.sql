-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 06:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(4) NOT NULL,
  `name` varchar(18) NOT NULL,
  `email` varchar(40) NOT NULL,
  `user_name` varchar(18) NOT NULL,
  `password` varchar(80) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `date` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `email`, `user_name`, `password`, `gender`, `date`) VALUES
(8, 'Nafi Hasan', 'nafi123@gmail.com', 'nafi123', '$2y$12$RYW9GHAfRc0iH7MHwLYA.e5', 'male', '1999-11-10'),
(12, 'ABC DE', 'abc123@gmail.com', 'abc123', '$2y$12$joiJW5rqrzOAQLbQT8ZK1.T', 'male', '2002-08-20'),
(14, 'xyz ghj', 'xy123@gmail.com', 'xy123', '$2y$12$bkNyYYDDBm92th5QZOtY.eB', 'male', '2007-02-26'),
(15, 'ghi jk', 'gh123@gmail.com', 'gh123', 'gh123', 'male', '2004-02-26'),
(16, 'Bijoy Paul', 'bijoy123@gmail.com', 'bijoy123', '$2y$12$rwZzqGR0ATOasc.JhYk0FOtgbdy8CvxXavlu50R1BypOsVlwB4YE.', 'male', '2002-11-14'),
(19, 'PROMIT PAUL BIJOY', 'paul.promit.42904@gmail.com', 'promit078', 'promit80', 'male', '2000-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(4) NOT NULL,
  `name` varchar(18) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `salary` int(7) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(98) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `gender`, `salary`, `password`, `image`) VALUES
(4, 'Karim', 'male', 8000, '$2y$12$G3rpCrX7gw2l7', '1678818140.jpeg'),
(5, 'Naim', 'male', 15000, '$2y$12$vTUiKkxI4CqgF', '1678761886.png'),
(6, 'Rafi', 'male', 12000, '$2y$12$7Au/JuimWPTIm', 'pp.png'),
(7, 'Abc', 'male', 5000, '$2y$12$aXV7Gf2V3U3ne', 'logo.png'),
(8, 'DEF', 'male', 5000, '$2y$12$Uo4kK.adgiJsH', 'pp.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
