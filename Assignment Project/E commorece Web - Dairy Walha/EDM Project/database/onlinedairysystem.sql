-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 06:14 AM
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
-- Database: `onlinedairysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(4) NOT NULL,
  `userid` int(5) NOT NULL,
  `product_id` int(3) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 1,
  `product_Image` varchar(255) NOT NULL,
  `dropdown` varchar(255) NOT NULL,
  `flag` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`id`, `userid`, `product_id`, `productname`, `price`, `description`, `quantity`, `product_Image`, `dropdown`, `flag`) VALUES
(7, 3, 3, 'Bread', 220, '450 g Pack of 4', 1, 'bread.png', 'Bakery', 0),
(8, 3, 1, 'Amul Taaza', 72, '1 liter', 1, 'amul.png', 'Milk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `confirmorder`
--

CREATE TABLE `confirmorder` (
  `orderid` int(3) NOT NULL,
  `userid` int(3) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `dropdown` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmorder`
--

INSERT INTO `confirmorder` (`orderid`, `userid`, `productname`, `price`, `dropdown`, `description`, `order_date`, `status`) VALUES
(1, 4, 'Amul Taaza', 72, 'Milk', '1 liter', '2023-03-03 12:58:00', 0),
(2, 4, 'Amul Taaza', 72, 'Milk', '1 liter', '2023-03-03 12:58:00', 0),
(3, 2, 'Kaju Katli', 199, 'Sweet', '200 g Mono Carton', '2023-03-03 12:58:26', 0),
(4, 2, 'Kaju Katli', 199, 'Sweet', '200 g Mono Carton', '2023-03-03 12:58:26', 0),
(5, 2, 'Kaju Katli', 199, 'Sweet', '200 g Mono Carton', '2023-03-03 12:58:26', 0),
(6, 2, 'Amul butter', 56, 'Milk', 'Amul Pasteurised Butter, 100 g Carton', '2023-03-06 07:38:34', 0),
(7, 2, 'Amul butter', 56, 'Milk', 'Amul Pasteurised Butter, 100 g Carton', '2023-03-06 07:38:34', 0),
(8, 2, 'Amul butter', 56, 'Milk', 'Amul Pasteurised Butter, 100 g Carton', '2023-03-06 07:38:34', 0),
(9, 2, 'Amul butter', 56, 'Milk', 'Amul Pasteurised Butter, 100 g Carton', '2023-03-06 07:38:34', 0),
(10, 2, 'Kaju Katli', 199, 'Sweet', '200 g Mono Carton', '2023-03-07 08:36:21', 0),
(11, 1, 'Amul Taaza', 72, 'Milk', '1 liter', '2023-04-04 13:53:02', 0),
(12, 1, 'Amul Taaza', 72, 'Milk', '1 liter', '2023-04-04 13:53:02', 0),
(13, 2, 'Amul Taaza', 72, 'Milk', '1 liter', '2023-04-07 08:16:16', 0),
(14, 2, 'Kaju Katli', 199, 'Sweet', '200 g Mono Carton', '2023-06-06 07:01:50', 0),
(15, 1, 'Bread', 220, 'Bakery', '450 g Pack of 4', '2023-06-06 07:07:21', 0),
(16, 1, 'Bread', 220, 'Bakery', '450 g Pack of 4', '2023-06-06 07:07:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(2, 'brij', 'brijpatel0028@gmail.com', 'late delivery of milk'),
(4, 'satish', 'satish@gmail.com', 'when the xyz product available'),
(9, 'devansh', 'devansh@gmail.com', 'xyz'),
(10, 'jaydeep', 'jaydeep@gmail.com', 'abcd'),
(12, 'abhay', 'abhay@gmail.com', 'not well');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `product_Image` varchar(255) NOT NULL,
  `dropdown` varchar(255) NOT NULL,
  `oprice` int(4) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `price`, `description`, `product_Image`, `dropdown`, `oprice`, `flag`) VALUES
(1, 'Amul Taaza', 72, '1 liter', 'amul.png', 'Milk', 80, 0),
(2, 'Kaju Katli', 199, '200 g Mono Carton', 'kajukatli.png', 'Sweet', 220, 0),
(3, 'Bread', 220, '450 g Pack of 4', 'bread.png', 'Bakery', 250, 0),
(7, 'Amul butter', 56, 'Amul Pasteurised Butter, 100 g Carton', 'butter.jpg', 'Milk', 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `user_type` int(255) NOT NULL DEFAULT 0,
  `last_name` varchar(255) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `first_name`, `email`, `pasword`, `user_type`, `last_name`, `mobile_no`, `adress`) VALUES
(1, 'brij', 'brij@gmail.com', '123', 1, 'dedakiya', 9898989898, 'abcd'),
(2, 'satish', 'satish@gmail.com', '321', 0, 'koringa', 7474747474, 'zxcv'),
(3, 'devansh', 'devansh@gmail.com', '456', 0, 'bhatt', 9595959595, 'xyz'),
(4, 'jaydeep', 'jaydeep@gmail.com', '789', 0, 'dhadhal', 8855885587, 'abc'),
(10, 'abhay', 'abhay@gmail.com', '999', 0, 'kacha', 999999999, 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmorder`
--
ALTER TABLE `confirmorder`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `confirmorder`
--
ALTER TABLE `confirmorder`
  MODIFY `orderid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
