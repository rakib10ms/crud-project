-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 10:25 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `Address`) VALUES
(20, 'Rasel hossain', 'rasel111@gmail.com', '0195544643', ''),
(21, 'Jobayer Hasasn', 'zobayer5161@gmail.com', '01922334655', ''),
(22, 'Robin Hossain', 'robin10@gmail.com', '0166645214', ''),
(23, 'Ahmed Ovi', 'ovi10@gmail.com', '0187774656', ''),
(24, 'Zisan Ahmed', 'zisan999@gmail.com', '0145233523', ''),
(25, 'Rafan Ahmed', 'raaafan1212@gmail.com', '0199785466', ''),
(26, 'minhaj ', 'minhajd@gmail.com', '0178845654', ''),
(27, 'Raiyahan', 'raiyan121@gmail.com', '0199784555', ''),
(28, 'Raisah ', 'raisha221@gmail.com', '0175462554', ''),
(29, 'Zaman', 'zaman10921@gmail.com', '0134578456', ''),
(30, 'Zedith Rahman', 'zedith@gmail.com', '01624025656', ''),
(31, 'Rashed', 'rashed12@gmail.com', '0196456563', ''),
(32, 'Zunayd', 'zonayed10ms@gmail.com', '0162454753', ''),
(33, 'Raafi', 'rafi10ms@gmail.com', '0155475646', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
