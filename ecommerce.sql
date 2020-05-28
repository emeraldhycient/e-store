-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 06:25 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `p_title` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `shop_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paid` tinyint(4) NOT NULL DEFAULT '0',
  `delivered` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `shop_id` int(11) NOT NULL,
  `shopusername` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `phone1` int(100) NOT NULL,
  `phone2` int(100) NOT NULL,
  `state` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `joined_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logo` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`shop_id`, `shopusername`, `address1`, `address2`, `phone1`, `phone2`, `state`, `email`, `verified`, `joined_on`, `logo`, `pass`) VALUES
(1, 'raldinc', '4 edidi street', '4 edidi street', 90786874, 90786874, '', 'igwezehycient86@gmail.com', 0, '2019-10-06 20:01:10', 'Moncler_The_Bubble_Sneaker_White_Blue_Red__0736_540x.jpg', 'love'),
(2, 'mycomp', '4 edidi street', '4 edidi street', 7088, 7088, '', 'igwezehycient86@gmail.com', 0, '2019-10-09 17:10:48', 'Nike_Air_Force_1_Low_CMFT_Equality_White_Black_AQ2118_100_9605_720x-1-600x600.jpg', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `productid` int(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paid` tinyint(4) NOT NULL DEFAULT '0',
  `delivered` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_title` varchar(100) NOT NULL,
  `longdesc` varchar(255) NOT NULL,
  `shortdesc` varchar(255) NOT NULL,
  `shop_id` int(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `size` int(100) DEFAULT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `submitted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int(255) NOT NULL,
  `discount` int(100) DEFAULT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_title`, `longdesc`, `shortdesc`, `shop_id`, `photo`, `quantity`, `color`, `size`, `approved`, `submitted_on`, `price`, `discount`, `cat`) VALUES
(18, 'new puppies', 'just grabed sum random things sha just grabed sum random things shajust grabed sum random things sha just grabed sum random things shajust grabed sum random things sha just grabed sum random things sha', 'just grabed sum random things sha just grabed sum random things sha', 2, 'images (5).jpeg', 40, 'brown', 30, 0, '2020-02-16 15:03:33', 400, 10, 'Afador'),
(24, 'new puppies', 'we have a lot to erite about but we are gonna limit it to only ths two for the mean while our manager will update you on the rest we have a lot to erite about but we are gonna limit it to only ths two for the mean while our manager will update you on the ', 'we have a lot to erite about but we are gonna limit it to only ths two for the mean while our manager will update you on the rest', 2, 'images (1).jpeg', 200, 'brown', 20, 0, '2020-02-16 17:41:18', 2000, 10, 'Dachsadar'),
(25, 'new puppies', 'we have a lot to erite about but we are gonna limit it to only ths two for the mean while our manager will update you on the rest we have a lot to erite about but we are gonna limit it to only ths two for the mean while our manager will update you on the ', 'we have a lot to erite about but we are gonna limit it to only ths two for the mean while our manager will update you on the rest', 2, 'IMG-20200216-WA0002.jpg', 5, 'gold', 30, 0, '2020-02-16 17:42:39', 200, 5, 'Cairn_Terrier'),
(26, 'new puppies', 'mashmellom randommashmellom random mashmellom randommashmellom random mashmellom randommashmellom random mashmellom randommashmellom random mashmellom randommashmellom random', 'mashmellom randommashmellom random', 2, 'IMG-20200216-WA0004.jpg', 300, 'gray', 20, 0, '2020-02-16 17:43:42', 200, 2, 'English_foxhound'),
(27, 'cute puppies', 'just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum r', 'just grabed sum random things sha', 2, 'images (4).jpeg', 100, 'lightblue', 10, 0, '2020-02-16 17:45:21', 300, 5, 'Canaan'),
(28, 'happy puppy', 'happy puppy did woo woo happy puppy did woo woo happy puppy did woo woo happy puppy did woo woo happy puppy did woo woo happy puppy did woo woo happy puppy did woo woo happy puppy did woo woo', 'happy puppy did woo woo', 2, 'images (3).jpeg', 10, 'green', 20, 0, '2020-02-16 17:46:43', 20, 0, 'Basenji'),
(29, 'sweet puppy', 'just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum r', 'just grabed sum random things sha just grabed sum random things sha', 2, '20200215_202853.png', 20, 'red', 30, 0, '2020-02-16 17:47:54', 10000, 10, 'Afghan_hound'),
(30, 'sweet puppy', 'just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum random things sha just grabed sum r', 'just grabed sum random things sha just grabed sum random things sha', 2, 'images (2).jpeg', 20, 'red', 30, 0, '2020-02-16 17:48:16', 10000, 10, 'Afghan_hound');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `phone1` int(100) NOT NULL,
  `phone2` int(100) DEFAULT NULL,
  `state` text,
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`, `photo`, `address1`, `address2`, `phone1`, `phone2`, `state`, `verified`, `firstname`, `lastname`, `date`) VALUES
(1, '', '', '', '', NULL, NULL, 0, NULL, NULL, 0, '', '', '2019-10-01 16:26:28'),
(2, 'igwezehycient', 'igwezehycient86@gmail.com', '12345', 'watch1.jpeg', NULL, NULL, 70886, NULL, NULL, 0, 'igweze', 'hycient', '2019-10-01 16:33:18'),
(3, 'igwezehycient', 'igwezehycient86@gmail.com', '12345', 'watch1.jpeg', NULL, NULL, 70886, NULL, NULL, 0, 'igweze', 'hycient', '2019-10-01 16:33:53'),
(4, 'igwezehycient', 'igwezehycient86@gmail.com', '12345', 'watch1.jpeg', NULL, NULL, 70886, NULL, NULL, 0, 'igweze', 'hycient', '2019-10-01 16:34:13'),
(5, 'igwezehycient', 'igwezehycient86@gmail.com', '12345', 'watch1.jpeg', NULL, NULL, 70886, NULL, NULL, 0, 'igweze', 'hycient', '2019-10-01 16:34:31'),
(6, 'igwezehycient', 'igwezehycient86@gmail.com', '12345', 'watch1.jpeg', NULL, NULL, 70886, NULL, NULL, 0, 'igweze', 'hycient', '2019-10-01 16:34:52'),
(7, 'igwezehycient', 'igwezehycient86@gmail.com', 'qwer', 'wristwatchonhand.jpeg', NULL, NULL, 70886, NULL, NULL, 0, 'igweze', 'hycient', '2019-10-01 16:46:26'),
(8, 'igwezehycient', 'igwezehycient86@gmail.com', 'qwer', 'wristwatchonhand.jpeg', NULL, NULL, 70886, NULL, NULL, 0, 'igweze', 'hycient', '2019-10-01 17:12:48'),
(9, 'test2', 'igwezehycient86@gmail.com', '12345', 'Nike_Air_Force_1_Low_CMFT_Equality_White_Black_AQ2118_100_9605_720x-1-600x600.jpg', NULL, NULL, 639675, NULL, NULL, 0, 'test', 'text', '2019-10-06 15:05:34'),
(10, 'user4', 'igwezehycient86@gmail.com', '12qw', 'Black_White_BV4594_001_6872_540x.jpg', NULL, NULL, 70886, NULL, NULL, 0, 'users', 'usain', '2019-10-10 17:47:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
