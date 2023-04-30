-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 05:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbscanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `bvs_admin`
--

CREATE TABLE `bvs_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bvs_admin`
--

INSERT INTO `bvs_admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin@12345');

-- --------------------------------------------------------

--
-- Table structure for table `bvs_booths`
--

CREATE TABLE `bvs_booths` (
  `booth_id` int(11) NOT NULL,
  `booth_strand` varchar(255) NOT NULL,
  `booth_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bvs_booths`
--

INSERT INTO `bvs_booths` (`booth_id`, `booth_strand`, `booth_password`) VALUES
(1, 'it mawd', 'it mawd'),
(2, 'cart', 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `bvs_scanned_users`
--

CREATE TABLE `bvs_scanned_users` (
  `fk_booth_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `vote_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bvs_scanned_users`
--

INSERT INTO `bvs_scanned_users` (`fk_booth_id`, `fk_user_id`, `vote_time`) VALUES
(1, 1, '2023-04-17 11:36:29'),
(2, 2, '2023-04-17 11:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'Marcus', 'Marcus'),
(2, 'Jairus', 'Jairus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bvs_admin`
--
ALTER TABLE `bvs_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bvs_booths`
--
ALTER TABLE `bvs_booths`
  ADD PRIMARY KEY (`booth_id`),
  ADD UNIQUE KEY `strand` (`booth_strand`);

--
-- Indexes for table `bvs_scanned_users`
--
ALTER TABLE `bvs_scanned_users`
  ADD UNIQUE KEY `user_id` (`fk_user_id`),
  ADD KEY `booth_id` (`fk_booth_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bvs_admin`
--
ALTER TABLE `bvs_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bvs_booths`
--
ALTER TABLE `bvs_booths`
  MODIFY `booth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bvs_scanned_users`
--
ALTER TABLE `bvs_scanned_users`
  ADD CONSTRAINT `fk_booth_id` FOREIGN KEY (`fk_booth_id`) REFERENCES `bvs_booths` (`booth_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
