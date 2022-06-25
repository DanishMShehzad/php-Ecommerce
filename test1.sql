-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Product_Enter`
--

CREATE TABLE `Product_Enter` (
  `id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productImage` varchar(191) NOT NULL,
  `productColor` mediumtext NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product_Enter`
--

INSERT INTO `Product_Enter` (`id`, `productName`, `productImage`, `productColor`, `quantity`, `price`) VALUES
(9, 'gold', 'Bracelet-1.png', 'Grey', 12, 12000),
(10, 'metal', 'butterfly - Copy.jpg', 'Silver', 12, 13000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product_Enter`
--
ALTER TABLE `Product_Enter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Product_Enter`
--
ALTER TABLE `Product_Enter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
