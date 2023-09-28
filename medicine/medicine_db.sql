-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 01:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `exp_date`, `name`, `price`, `quantity`) VALUES
(17, '2022-06-26', 'Antacid', '30', 1),
(18, '2022-06-17', 'Aspirin', '60', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `exp_date`) VALUES
(1, 'Napa', 21, '2022-04-29'),
(2, 'Aspirin', 60, '2022-06-17'),
(5, 'Antacid', 30, '2022-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `number`, `method`, `address`, `city`, `total_products`, `total_price`) VALUES
(6, 'abcd', '12345678', 'cash on delivery', '', '', 'Napa (1) ', 21),
(7, 'abcd', '12345678', 'cash on delivery', '', '', 'Napa (1) ', 21),
(8, 'cdef', '67890', 'credit cart', '', '', 'Napa (1) , Aspirin (1) ', 81),
(9, 'abcd', '12345678', 'cash on delivery', '', '', 'Napa (2) , Aspirin (1) ', 102),
(10, 'abcd', '1234', 'BKASH', '', '', 'Napa (1) , Aspirin (1) ', 81),
(11, 'abcd', '123456', 'credit cart', '', '', 'Napa (1) ', 21),
(12, 'efgh', '5678', 'cash on delivery', '', '', 'Napa (10) , Aspirin (10) , Antacid (10) ', 812),
(13, 'efgh', '5678', 'cash on delivery', '', '', 'Napa (10) , Aspirin (10) , Antacid (10) ', 812),
(14, 'niladri', '98765', 'BKASH', '', '', 'Napa (10) , Aspirin (10) , Antacid (10) ', 1110),
(15, 'abcd', '123456', 'cash on delivery', '132,gulshan', 'dhaka', 'Aspirin (1) , Antacid (1) , Napa (1) ', 111),
(16, 'abcd', '1234', 'cash on delivery', '132,gulshan', 'dhaka', 'Antacid (1) , Aspirin (1) ', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
