-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 05:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `sku` varchar(255) NOT NULL,
  `price_buy` int(11) NOT NULL,
  `price_sell` int(11) NOT NULL,
  `price_net` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`sku`, `price_buy`, `price_sell`, `price_net`) VALUES
('NB01', 10000, 12000, 11500),
('NB03', 0, 20000, 19500),
('NB04', 20000, 21000, 20500),
('NB02', 15000, 17000, 16300);

-- --------------------------------------------------------

--
-- Table structure for table `product_nb`
--

CREATE TABLE `product_nb` (
  `id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `name_nb` varchar(255) NOT NULL,
  `stock_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_nb`
--

INSERT INTO `product_nb` (`id`, `sku`, `name_nb`, `stock_id`) VALUES
(1, 'NB01', 'MSI GF66 Thin I5 gen12', 0),
(2, 'NB02', 'ASUS TUF F15 RTX3060', 0),
(3, 'NB03', 'LENOVO IDEAPAD', 0),
(4, 'NB04', 'ASUS TUF A18', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_nb`
--
ALTER TABLE `product_nb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_nb`
--
ALTER TABLE `product_nb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
