-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 04:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgets`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `photo` varchar(120) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `photo`, `date`) VALUES
(1, 'Headphones', 'uploads/1751040763_tab-1.png', '2025-06-27 18:12:43.032296'),
(2, 'Gaming Mouse', 'uploads/1751040816_rec-2.png', '2025-06-27 18:13:36.148534'),
(3, 'MacBook/PCs', 'uploads/1751040847_product-5b.png', '2025-06-27 18:14:07.294705'),
(4, 'RGB Keyboard', 'uploads/1751040872_list-5.png', '2025-06-27 18:14:32.689150'),
(5, 'Playstation', 'uploads/1751040914_main-image.png', '2025-06-27 18:15:14.593819'),
(6, 'Gaming Headphones', 'uploads/1751040933_cart-image-1.png', '2025-06-27 18:15:33.857469'),
(7, 'Apple LED', 'uploads/1751040949_list-2.png', '2025-06-27 18:15:49.690829'),
(8, 'Samsung Phone', 'uploads/1751040966_cart-image-2.png', '2025-06-27 18:16:06.530548'),
(9, 'Min Ipad', 'uploads/1751041033_product-4b.png', '2025-06-27 18:17:13.351880'),
(10, 'Earbuds', 'uploads/1751041060_tab-10.png', '2025-06-27 18:17:40.919660');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `title` varchar(120) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `photo` varchar(120) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category`, `price`, `qty`, `photo`, `description`, `date`) VALUES
(3, 'Ultra Bright LCD', 'Apple LED', '4545', 3, 'uploads/1751030551_list-2.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 15:22:31.617471'),
(4, 'Elite Audio Gear', 'Headphones', '786', 45, 'uploads/1751030795_list-1.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 15:26:35.278608'),
(13, 'Nexus Mobile Pro', 'Samsung Phone', '120', 3, 'uploads/1751541636_banner-sub-2.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:37:17.029344'),
(14, 'Ultra Tech Book Plus', 'MacBook/PCs', '4545', 2, 'uploads/1751035219_product-5b.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:40:19.961853'),
(15, 'Radiant View LCD', 'MacBook/PCs', '786', 4, 'uploads/1751035482_rec-5.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:44:42.968568'),
(16, 'Bass Headphones', 'Headphones', '443', 2, 'uploads/1751035644_product-2b.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:47:24.941323'),
(17, 'Aero Pro Joysticks', 'Gaming Mouse', '786', 45, 'uploads/1751035720_product-10.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:48:40.259573'),
(18, 'Supreme Tech Phone', 'Samsung Phone', '56', 11, 'uploads/1751035793_product-3b.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:49:53.944660'),
(19, 'Hyper Glide Mouse', 'Gaming Mouse', '875', 21, 'uploads/1751035884_rec-2.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:51:24.367288'),
(20, 'iPad Standard Plus', 'Min Ipad', '56', 9, 'uploads/1751036047_product-4b.png', 'Lorem ipsum dolor sit amet consectetur. Id viverr', '2025-06-27 16:54:07.316133'),
(21, 'White Earbuds', 'Headphones', '786', 45, 'uploads/1751036161_rec-1.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:56:01.671782'),
(22, 'Gaming RBG Mouse', 'Gaming Mouse', '786', 5, 'uploads/1751036246_list-3.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:57:26.946607'),
(23, 'Key Master Elite', 'RGB Keyboard', '56', 20, 'uploads/1751036330_rec-3.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 16:58:50.926078'),
(24, 'Ultra Sport Watch', 'MacBook/PCs', '675', 13, 'uploads/1751037001_rec-4.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra ', '2025-06-27 17:10:01.645506'),
(25, 'Radiant View LCD', 'Apple LED', '443', 45, 'uploads/1751037091_product-1b.png', 'Lorem ipsum dolor sit amet consectetur. Id viverra', '2025-06-27 17:11:31.889921'),
(26, 'Wired Head Free', 'Headphones', '786', 3, 'uploads/1751037147_rec-6.png', 'Lorem ipsum dolor sit amet consectetur. Id viverr', '2025-06-27 17:12:27.501521');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date`) VALUES
(4, 'admin', 'admin1', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
