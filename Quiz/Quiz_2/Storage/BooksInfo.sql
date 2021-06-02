-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 17:02 PM
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
-- Database: `Books`
--

-- --------------------------------------------------------

--
-- Table structure for table `BooksInfo`
--

CREATE TABLE `BooksInfo` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float NOT NULL,
  `product_count` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_maker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BooksInfo`
--

INSERT INTO `BooksInfo` (`id`, `BookName`, `PageNumber`, `Price`, `BarCode`, `Author`) VALUES
(3, 'Civil War', 350, 120, 11020123, 'William'),
(7, 'Jinsebis Taoba ', 180, 23, 110011023, 'Davit Turashvili');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` text NOT NULL,
  `user_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `reg_date`) VALUES
(1, 'Goga', 'goga@gmail.com', 'goga@gmail.com', '2021-05-26 17:58:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `BooksInfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `BooksInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;