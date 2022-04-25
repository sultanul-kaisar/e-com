-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 11:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `admin`, `name`, `email`, `password`) VALUES
(1, 'superadmin', 'Super Admin', 'superadmin@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'admin', 'Admin', 'admin@email.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, '  Mens'),
(2, ' Womens'),
(3, ' Boys'),
(4, ' Girls');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `amount`, `address`, `address2`, `city`, `state`, `country`, `zip`, `status`, `transaction_id`, `currency`) VALUES
(1, 0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265c15a40734', 'BDT'),
(2, 0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265c1efa425e', 'BDT'),
(3, 0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265c26573597', 'BDT'),
(4, 0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265c2b56ca30', 'BDT'),
(5, 0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265c304ebad5', 'BDT'),
(6, 0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265c32071312', 'BDT'),
(7, 0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265c3593f572', 'BDT'),
(8, 0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265c3a70cd09', 'BDT'),
(9, 0, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 2297, 'Dhaka', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_6265d986e8136', 'BDT'),
(10, 0, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 2598, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_6265ded6d2b8f', 'BDT'),
(11, 1, 'Sultanul', 'admin@skaisar.com', '01711111111', 3097, 'Dhaka', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_62667a5cadb31', 'BDT'),
(12, 3, 'Sultanul', 'admin@skaisar.com', '01711111111', 499, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_62667f07c86b9', 'BDT'),
(13, 3, 'Sultanul', 'admin@skaisar.com', '01711111111', 499, 'Dhaka', '', '', '', '', '', 'Pending', 'SSLCZ_TEST_62667f3cf1524', 'BDT'),
(14, 3, 'Sultanul', 'admin@skaisar.com', '01711111111', 499, 'Dhaka', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_62667fa299ae1', 'BDT'),
(15, 7, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 1299, 'Dhaka', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_6266802d756a7', 'BDT'),
(16, 5, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 350, 'Dhaka', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_626682a871c41', 'BDT'),
(17, 3, 'Kaisar', 'admin@skaisar.com', '01711111111', 5198, 'Dhaka', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_6266891471988', 'BDT'),
(18, 4, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 799, 'Dhaka', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_62668b6c771d5', 'BDT'),
(19, 7, 'Kaisar', 'admin@skaisar.com', '01711111111', 5198, 'Uttara sector-5', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_6266e84a81650', 'BDT'),
(20, 5, 'Kaisar', 'admin@skaisar.com', '01711111111', 1297, 'Uttara sector-5', '', '', '', '', '', 'Processing', 'SSLCZ_TEST_6266ea9952615', 'BDT'),
(21, 3, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 998, 'Uttara sector-5', 'Road# 6/A', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'Processing', 'SSLCZ_TEST_6266ed1767915', 'BDT'),
(22, 3, 'Kaisar', 'admin@skaisar.com', '01711111111', 350, 'Uttara sector-5', 'Road# 6/A', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'Processing', 'SSLCZ_TEST_6266ee04362e4', 'BDT'),
(23, 3, 'Kaisar', 'admin@skaisar.com', '01711111111', 499, 'Uttara sector-5', 'Road# 6/A', 'Rajshahi', 'Rajshahi', 'Bangladesh', '6000', 'Pending', 'SSLCZ_TEST_6266eeb9d3308', 'BDT'),
(24, 7, 'Kaisar', 'admin@skaisar.com', '01711111111', 299, 'Uttara sector-5', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'Processing', 'SSLCZ_TEST_6266ef9f06a56', 'BDT'),
(25, 7, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 499, 'Uttara sector-5', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'Processing', 'SSLCZ_TEST_62670fa3dd700', 'BDT');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` double NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `user_id`, `product_id`, `quantity`, `rate`, `amount`) VALUES
(10, 1, 3, 2, 1299, 2598),
(10, 1, 12, 1, 499, 499),
(11, 3, 12, 1, 499, 499),
(12, 3, 12, 1, 499, 499),
(13, 3, 12, 1, 499, 499),
(14, 7, 3, 1, 1299, 1299),
(15, 5, 13, 1, 350, 350),
(0, 3, 2, 2, 2599, 5198),
(18, 4, 1, 1, 799, 799),
(19, 7, 2, 2, 2599, 5198),
(19, 7, 2, 2, 2599, 5198),
(20, 5, 12, 1, 499, 499),
(20, 5, 10, 1, 299, 299),
(20, 5, 14, 1, 499, 499),
(21, 3, 12, 2, 499, 998),
(22, 3, 13, 1, 350, 350),
(23, 3, 12, 1, 499, 499),
(24, 7, 10, 1, 299, 299),
(25, 7, 12, 1, 499, 499);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(1, 'Girls T-shirt', 2, 799, 15, 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum. Aenean non odio et lorem convallis consectetur. Nam finibus volutpat nulla. Donec sed ultrices felis. Integer vel eleifend mauris, id eleifend eros. Donec a sagittis urna. ', 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum.      ', 'the-graphic-space-FTrGeAy0RW4-unsplash.jpg'),
(2, 'product 2', 1, 2599, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales condimentum quam, ut blandit nisi interdum sed. Duis ac imperdiet est. Etiam non pharetra dui. Vestibulum lectus leo, condimentum ut leo sit amet, vestibulum tempor est. Nulla a dui at dui mollis aliquet. Fusce at felis nisi. Curabitur est nunc, congue a scelerisque non, pharetra ac ante. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales condimentum quam, ut blandit nisi interdum sed. Duis ac imperdiet est', 'meysam-jarahkar-NMYG69BG_Jg-unsplash.jpg'),
(3, 'product 3', 2, 1299, 5, 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum. Aenean non odio et lorem convallis consectetur. Nam finibus volutpat nulla. Donec sed ultrices felis. Integer vel eleifend mauris, id eleifend eros. Donec a sagittis urna. ', 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum.', 'mediamodifier-ogmenj2NGho-unsplash.jpg'),
(9, 'Product z', 1, 499, 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales condimentum quam, ut blandit nisi interdum sed. Duis ac imperdiet est ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ', 'marlon-alves-A0mSSCEVh9A-unsplash.jpg'),
(10, 'Product x', 2, 299, 45, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales condimentum quam, ut blandit nisi interdum sed. Duis ac imperdiet est ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ', 'luis-santoyo-eyUOuA6hIMA-unsplash.jpg'),
(12, 'Product zy', 2, 499, 27, 'sdgjkhzlllllllfi gk. dfgk.dfkg. dodsy jkghis swg jweriowetjwertg wiler wilert ewrjg wlei yweit ', 'iedghi edgherhgh etgoeriyhtgeo', 'good-faces-aP8KhiHbSvo-unsplash.jpg'),
(13, 'Product zx', 1, 350, 11, 'dfhdzs dyeru yyuersys yesuyusdf ujhr5suhsreusr5dtrujstru urt urt ur ur rt ujrtturttu r', ' rtsurtsu rtsu rttu rurtururturtu rt', 'giacomo-lucarini--pOMjxrXBIY-unsplash.jpg'),
(14, 'Product xdf', 1, 499, 50, 'gdanberynqwbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'bwewewewewewewewewer', 'bao-bao-TysFvOl78u0-unsplash.jpg'),
(15, 'Product xd', 1, 499, 35, 'sejkgfksd kutgy it yerikt errikt erikt erikt yerioty erkt eoteot ', 'sdgesdg erer ger er ger', 'bao-bao-mlKE8dEMc_8-unsplash.jpg'),
(18, 'product 111', 3, 499, 23, 'fgdhjnklm ydtfghlj; tyuihjnklm;', 'szdfcghjnkml', 'Boy-T-Shirt-Free-Mock-Up-1500x1125.jpg'),
(19, 'Girls T-shirt', 7, 499, 24, 'aaaaaaaaaaaaaaaaaaaaa', 'aaaaaaa', 'Creative-Kids-T-Shirt-Mockups.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `timestamp`) VALUES
(3, 'user1', 'user1@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-04-21 02:51:54'),
(4, 'user247', 'user1123@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-04-21 02:51:54'),
(5, 'user2', 'user2@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-04-21 02:51:54'),
(6, 'user3', 'user3@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-04-21 02:51:54'),
(7, 'user4', 'user4@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-04-21 02:51:54'),
(12, 'user5', 'user5@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-04-21 02:51:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
