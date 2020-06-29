-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 11:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_selling_products`
--

CREATE TABLE `best_selling_products` (
  `best_id` int(11) NOT NULL,
  `best_file1` varchar(100) NOT NULL,
  `best_file2` varchar(100) NOT NULL,
  `best_name` varchar(50) NOT NULL,
  `best_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_selling_products`
--

INSERT INTO `best_selling_products` (`best_id`, `best_file1`, `best_file2`, `best_name`, `best_price`) VALUES
(1, 'uploads/Chocolate-cake-recipe-1200a-500x500.jpg', 'uploads/Chocolate-cake-recipe-1200a-500x500.jpg', 'Chocolate Cake', '1199');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `c_number` varchar(20) NOT NULL,
  `quantity` int(5) NOT NULL,
  `c_delivery_address` varchar(200) NOT NULL,
  `c_delivery_date` datetime(6) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`c_id`, `c_name`, `c_address`, `c_number`, `quantity`, `c_delivery_address`, `c_delivery_date`, `p_id`) VALUES
(1, 'Ms. Maham', 'North Nazimabad near aptech', '03052196493', 1, 'North Nazimabad near aptech', '2020-08-15 02:49:40.000000', 58);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_file` varchar(200) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_file`, `p_name`, `p_price`) VALUES
(58, 'uploads/Chocolate-cake-recipe-1200a-500x500.jpg', 'Chocolate ', 1399),
(59, 'uploads/1502397750-delish-death-by-chocolate-cake-3.jpg', 'Chocolate Chips Cake', 1599),
(60, 'uploads/vanilla.jpg', 'Vanilla Cake', 999),
(61, 'uploads/oggy.jpg', 'Oggy Cake', 1699),
(62, 'uploads/Perfect-Chocolate-Cake-IMAGE-2.jpg', 'Chocolate cake', 1399),
(64, 'uploads/Strawberry.jpg', 'Strawberry Cake', 1299);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'usman', '$2y$10$HbV2P5LtUOZ9ocCB42beWOPTFNQe.a5X3EMbKb8Kq8qkrMzWOPp2G', '2020-06-28 10:00:47'),
(2, 'uzair', '$2y$10$kEbfvH25gerur4KfCGucieeHwEWw.vITawtnurdLxnWDy62GgGi8.', '2020-06-29 01:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_selling_products`
--
ALTER TABLE `best_selling_products`
  ADD PRIMARY KEY (`best_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best_selling_products`
--
ALTER TABLE `best_selling_products`
  MODIFY `best_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD CONSTRAINT `customer_orders_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
