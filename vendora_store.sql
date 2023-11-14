-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 10:49 AM
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
-- Database: `vendora_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_produk`
--

CREATE TABLE `brand_produk` (
  `id_brand` int(11) NOT NULL,
  `brand` enum('Vans','Adidas','Nike','Puma') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand_produk`
--

INSERT INTO `brand_produk` (`id_brand`, `brand`) VALUES
(1, 'Vans'),
(2, 'Adidas'),
(3, 'Nike'),
(4, 'Puma');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `harga` decimal(11,0) DEFAULT NULL,
  `id_brand` int(11) DEFAULT NULL,
  `id_size` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `image`, `harga`, `id_brand`, `id_size`, `id_status`) VALUES
(1001, 'Air Max Excee', '../assets/images/Nike_1.png', 1279000, 3, 4, 1),
(1002, 'Air Force', '../assets/images/Nike_2.png', 1549000, 3, 4, 1),
(1003, 'Air Max Pulse', '../assets/images/Nike_3.png', 2379000, 3, 4, 1),
(1004, 'Air Max 1', '../assets/images/Nike_4.png', 2199000, 3, 4, 1),
(1005, 'Blazer Low', '../assets/images/Nike_6.png', 1199000, 3, 4, 1),
(1006, 'Dunk Low', '../assets/images/Nike_7.png', 2099000, 3, 4, 1),
(2001, 'Campus 80S', '../assets/images/Adidas_1.png', 2200000, 2, 3, 1),
(2002, 'Campus OG', '../assets/images/Adidas_3.png', 2200000, 2, 3, 1),
(2003, 'Superstar 82 Trainers', '../assets/images/Adidas_4.png', 2500000, 2, 3, 1),
(2004, 'Campus 00S', '../assets/images/Adidas_5.png', 1700000, 2, 3, 1),
(2005, 'NY 90', '../assets/images/Adidas_7.png', 1500000, 2, 3, 1),
(2006, 'Superstar XLG Atmos', '../assets/images/Adidas_8.png', 1800000, 2, 3, 1),
(3001, 'Old Skool low', '../assets/images/Vans_1.png', 799000, 1, 2, 1),
(3002, 'Knu Skool', '../assets/images/Vans_2.png', 21500000, 1, 2, 1),
(3003, 'Classic Slip On Checkboard', '../assets/images/Vans_3.png', 999000, 1, 2, 1),
(3004, 'Classic Slip On Full White', '../assets/images/Vans_4.png', 789000, 1, 2, 1),
(3005, 'Ultra Range EXO', '../assets/images/Vans_5.png', 2500000, 1, 2, 1),
(3006, 'Sk8-Hi BW', '../assets/images/Vans_6.png', 1250000, 1, 2, 1),
(4001, 'Velophasis Luxe Sport II', '../assets/images/Puma_1.png', 2599000, 4, 5, 1),
(4002, 'Fenty X Puma Avanti L', '../assets/images/Puma_2.png', 2499000, 4, 5, 1),
(4003, 'Puma x Ripndip Slipstream', '../assets/images/Puma_3.png', 2399000, 4, 5, 1),
(4004, 'Exotec Facades', '../assets/images/Puma_4.png', 2299000, 4, 5, 1),
(4005, 'RS-X Efekt Energy', '../assets/images/Puma_5.png', 2199000, 4, 5, 1),
(4006, 'RS-X Underground Drift', '../assets/images/Puma_9.png', 1999000, 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `size_produk`
--

CREATE TABLE `size_produk` (
  `id_size` int(11) NOT NULL,
  `size` enum('39','40','41','42','43','44') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size_produk`
--

INSERT INTO `size_produk` (`id_size`, `size`) VALUES
(1, '39'),
(2, '40'),
(3, '41'),
(4, '42'),
(5, '43'),
(6, '44');

-- --------------------------------------------------------

--
-- Table structure for table `status_produk`
--

CREATE TABLE `status_produk` (
  `id_status` int(11) NOT NULL,
  `status_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_produk`
--

INSERT INTO `status_produk` (`id_status`, `status_produk`) VALUES
(1, 'Ready'),
(2, 'Sold Out');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_produk`
--
ALTER TABLE `brand_produk`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_size` (`id_size`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `size_produk`
--
ALTER TABLE `size_produk`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `status_produk`
--
ALTER TABLE `status_produk`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_produk`
--
ALTER TABLE `brand_produk`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4007;

--
-- AUTO_INCREMENT for table `size_produk`
--
ALTER TABLE `size_produk`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status_produk`
--
ALTER TABLE `status_produk`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status_produk` (`id_status`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_size`) REFERENCES `size_produk` (`id_size`),
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_brand`) REFERENCES `brand_produk` (`id_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
