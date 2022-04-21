-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 01:16 AM
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
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `currency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`user_id`, `order_id`, `transaction_id`, `amount`, `order_transaction`, `status`, `order_date`, `currency`) VALUES
(3, 2, 'SSLCZ_TEST_6259ee52762f8', 9095, '', 'success', '0000-00-00', 'BDT'),
(3, 3, 'SSLCZ_TEST_625b374a7915b', 3898, '', 'success', '0000-00-00', 'BDT'),
(3, 5, '', 6392, '', '', '0000-00-00', '');

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
(1, 5, 1, 2, 1299, 2598),
(2, 3, 1, 3, 1299, 3897),
(2, 3, 2, 2, 2599, 5198),
(0, 3, 2, 1, 2599, 2599),
(0, 3, 1, 1, 1299, 1299),
(0, 5, 2, 2, 2599, 5198),
(0, 3, 1, 3, 1299, 3897),
(0, 3, 9, 5, 499, 2495);

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
  ADD PRIMARY KEY (`order_id`);

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
