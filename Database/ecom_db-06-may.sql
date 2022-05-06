-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 12:37 PM
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
(1, 3, 'Kaisar', 'admin@skaisar.com', '01711111111', 2097, 'Uttara sector-5', 'Road# 6/A', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'Pending', 'SSLCZ_TEST_626853058fea7', 'BDT'),
(2, 5, 'Sultanul', 'admin@skaisar.com', '01711111111', 499, 'Uttara sector-5', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'Processing', 'SSLCZ_TEST_6268563d4ebfe', 'BDT'),
(3, 4, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 499, 'Uttara sector-5', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'Processing', 'SSLCZ_TEST_626856d03f240', 'BDT'),
(4, 3, 'Sultanul Kaisar', 'admin@skaisar.com', '01711111111', 499, 'Uttara sector-5', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'VALIDATED', 'SSLCZ_TEST_62685a6625320', 'BDT'),
(5, 1, 'Kaisar', 'admin@skaisar.com', '01711111111', 350, 'Uttara sector-5', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1230', 'Processing', 'SSLCZ_TEST_626b59f40eb0f', 'BDT');

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
(1, 3, 20, 2, 799, 1598),
(1, 3, 19, 1, 499, 499),
(2, 5, 18, 1, 499, 499),
(3, 4, 14, 1, 499, 499),
(4, 3, 19, 1, 499, 499),
(5, 1, 21, 1, 350, 350);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_sub_cat_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_sub_cat_id`, `brand`, `product_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(1, 'Girls T-shirt', 2, 2, 'H&M', 799, 15, 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum. Aenean non odio et lorem convallis consectetur. Nam finibus volutpat nulla. Donec sed ultrices felis. Integer vel eleifend mauris, id eleifend eros. Donec a sagittis urna. ', 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum.      ', 'the-graphic-space-FTrGeAy0RW4-unsplash.jpg'),
(3, 'product 3', 2, 2, 'H&M', 1299, 5, 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum. Aenean non odio et lorem convallis consectetur. Nam finibus volutpat nulla. Donec sed ultrices felis. Integer vel eleifend mauris, id eleifend eros. Donec a sagittis urna. ', 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum.', 'mediamodifier-ogmenj2NGho-unsplash.jpg'),
(9, 'Product z', 1, 1, 'H&M', 499, 25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales condimentum quam, ut blandit nisi interdum sed. Duis ac imperdiet est ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ', 'marlon-alves-A0mSSCEVh9A-unsplash.jpg'),
(10, 'Product x', 2, 2, 'H&M', 299, 45, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales condimentum quam, ut blandit nisi interdum sed. Duis ac imperdiet est ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ', 'luis-santoyo-eyUOuA6hIMA-unsplash.jpg'),
(12, 'Product zyx', 2, 2, 'H&M', 499, 27, 'sdgjkhzlllllllfi gk. dfgk.dfkg. dodsy jkghis swg jweriowetjwertg wiler wilert ewrjg wlei yweit ', 'iedghi edgherhgh etgoeriyhtgeo ', ''),
(13, 'Product zx', 1, 1, 'H&M', 350, 11, 'dfhdzs dyeru yyuersys yesuyusdf ujhr5suhsreusr5dtrujstru urt urt ur ur rt ujrtturttu r', ' rtsurtsu rtsu rttu rurtururturtu rt', 'giacomo-lucarini--pOMjxrXBIY-unsplash.jpg'),
(14, 'Product xdf', 1, 1, 'H&M', 499, 50, 'gdanberynqwbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'bwewewewewewewewewer', 'bao-bao-TysFvOl78u0-unsplash.jpg'),
(15, 'Product xd', 1, 1, 'H&M', 499, 35, 'sejkgfksd kutgy it yerikt errikt erikt erikt yerioty erkt eoteot ', 'sdgesdg erer ger er ger', 'bao-bao-mlKE8dEMc_8-unsplash.jpg'),
(18, 'product 111', 3, 3, 'H&M', 499, 23, 'fgdhjnklm ydtfghlj; tyuihjnklm;', 'szdfcghjnkml', 'Boy-T-Shirt-Free-Mock-Up-1500x1125.jpg'),
(19, 'Girls T-shirt', 4, 4, 'H&M', 499, 24, 'aaaaaaaaaaaaaaaaaaaaa', 'aaaaaaa', 'Creative-Kids-T-Shirt-Mockups.jpg'),
(20, 'Girls T-shirt', 4, 4, 'GAP', 799, 40, 'Girl\'s Premium Quality Half Sleeve T-Shirt\r\nItem Code: EI000742\r\nStyle code: E-585\r\nProduct type: T-Shirt\r\nFabric: Cotton\r\nSleeve    Half Sleeve\r\nGender: Girls\r\nStyle: Casual\r\nFit Type: Regular Fit\r\nFeatures: Fashionable And Comfortable, Stylish Design. Premium Quality Product. Best for all season.\r\nCare; Hand Wash in normal water with mild detergent. Please don’t use the washing machine, Wash smoothly.\r\nColor: Cream (As given picture)\r\nSize: 6 Y, 7 Y, 8 Y, 9 Y, 10 Y, 11 Y, 12 Y, 13 Y, 14 Y.', 'Girl\'s Premium Quality Half Sleeve T-Shirt', '0383210_girls-premium-quality-half-sleeve-t-shirt.jpeg'),
(21, 'Boys T-shirt', 3, 3, 'GAP', 350, 30, 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse tempus arcu quis leo congue bibendum. Aenean non odio et lorem convallis consectetur. Nam finibus volutpat nulla. Donec sed ultrices felis. Integer vel eleifend mauris, id eleifend eros. Donec a sagittis urna. ', 'Suspendisse potenti. Aliquam erat volutpat. Morbi lacinia hendrerit nisi. Suspendisse ', 'Kids-T-Shirt-Mockups-Free-1000x750.jpg');

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
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_cat_id` int(11) NOT NULL,
  `parent_cat_id` int(11) NOT NULL,
  `sub_cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_cat_id`, `parent_cat_id`, `sub_cat_title`) VALUES
(1, 1, 'T-shirt'),
(2, 2, 'Kamiz'),
(3, 3, 'T-shirt'),
(4, 4, 'T-shirt'),
(5, 1, 'Pant');

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
(3, 'user1', 'user1@email.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-04-21 02:51:54'),
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
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_cat_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
