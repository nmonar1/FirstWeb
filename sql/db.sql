-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 08:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essence`
--
CREATE DATABASE IF NOT EXISTS `essence` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `essence`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `messageId` bigint(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `dateSubmitted` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`messageId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`messageId`, `fullname`, `email`, `message`, `dateSubmitted`) VALUES
(1, 'Nicole', 'nicole.monari@strathmore.edu', 'Do you have products for oily skin', '2024-06-30 18:32:44'),
(3, 'Muna', 'nmuna@gmail.com', 'do you have uncover branded products', '2024-07-06 20:44:11');




-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `total_amount` decimal(10,2) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `order_item_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `order_id` bigint(11) NOT NULL,
  `product_id` bigint(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`order_item_id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skin_analysis`
--

DROP TABLE IF EXISTS `skin_analysis`;
CREATE TABLE IF NOT EXISTS `skin_analysis` (
  `analysisId` bigint(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('female','male','non_binary','prefer_not_to_say') NOT NULL,
  `skin_type` enum('normal','dry','oily','combination','sensitive') NOT NULL,
  `skin_concerns` text NOT NULL,
  `allergies` text DEFAULT NULL,
  `current_products` text DEFAULT NULL,
  `dateSubmitted` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`analysisId`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skin_analysis`
--

INSERT INTO `skin_analysis` (`analysisId`, `fullname`, `email`, `age`, `gender`, `skin_type`, `skin_concerns`, `allergies`, `current_products`, `dateSubmitted`) VALUES
(3, 'Nicole', 'nicole.monari@strathmore.edu', 19, 'female', 'oily', 'oily skin', 'none', 'cerave', '2024-06-30 20:33:59'),
(4, 'Neesh', 'neesh@yahoo.com', 23, 'male', 'combination', 'hyperpigmentation', 'none', 'la roche posay', '2024-07-06 21:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fullname`, `email`, `username`, `password`, `dateCreated`, `dateUpdated`) VALUES
(1, 'Nicole', 'nicole.monari@strathmore.edu', '', '', '2024-06-30 20:33:59', '2024-06-30 20:33:59'),
(3, 'Neesh', 'neesh@yahoo.com', 'neesh', '', '2024-07-06 21:10:20', '2024-07-06 21:10:20');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`userId`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `skin_analysis`
--
ALTER TABLE `skin_analysis`
  ADD CONSTRAINT `skin_analysis_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
