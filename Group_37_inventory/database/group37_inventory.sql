-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 13, 2022 at 03:57 PM
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
-- Database: `group37_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `user_id`, `user_name`, `password`, `cpassword`, `date`) VALUES
(1, 586501, 'Group37', 'group37', 'group37', '2022-05-20 10:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `appetizers_bev`
--

CREATE TABLE `appetizers_bev` (
  `id` int(11) NOT NULL,
  `dish` text NOT NULL,
  `cost` text NOT NULL,
  `duration` text NOT NULL,
  `ingredients` text NOT NULL,
  `make_it` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appetizers_bev`
--

INSERT INTO `appetizers_bev` (`id`, `dish`, `cost`, `duration`, `ingredients`, `make_it`, `date`) VALUES
(1, 'Chicken/Fish Pie', 'N600', '15 minutes', 'Integer vitae accumsan urna. \r\nMaecenas interdum ipsum erat. \r\nMaecenas fermentum accumsan felis, \r\nid tristique justo volutpat in. \r\nNulla facilisi. \r\nCras a dolor euismod, \r\nfaucibus dui hendrerit, \r\nporttitor neque. \r\nPraesent sed tempus odio. \r\nVivamus orci nulla, \r\nsemper non iaculis vel, \r\nscelerisque convallis elit. \r\nMauris fringilla dapibus blandit. ', 'Lorem ipsum dolor sit amet, \r\nconsectetur adipiscing elit. \r\nProin eu tempus justo, \r\nconsectetur dapibus ligula. \r\nSuspendisse venenatis scelerisque molestie. Maecenas ac urna efficitur, \r\npulvinar lacus tristique, \r\nfermentum magna. \r\nUt blandit dui id felis aliquet pharetra. In vulputate leo at consequat congue. Quisque vel nulla eu felis rutrum ultrices. ', '2022-06-02 00:17:18'),
(2, 'Coke (Soda) 50cl', 'N200', '-', '', '', '2022-05-30 23:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

CREATE TABLE `desserts` (
  `id` int(11) NOT NULL,
  `dish` text NOT NULL,
  `cost` text NOT NULL,
  `duration` text NOT NULL,
  `ingredients` text NOT NULL,
  `make_it` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`id`, `dish`, `cost`, `duration`, `ingredients`, `make_it`, `date`) VALUES
(1, 'Jell-O', 'N900', '10 minutes', '', '', '2022-05-31 14:34:49'),
(2, 'Chocolate Chip Cookies', 'N400', '15 minutes', '', '', '2022-05-31 14:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `main_dish`
--

CREATE TABLE `main_dish` (
  `id` int(11) NOT NULL,
  `dish` text NOT NULL,
  `cost` text NOT NULL,
  `duration` text NOT NULL,
  `ingredients` text NOT NULL,
  `make_it` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_dish`
--

INSERT INTO `main_dish` (`id`, `dish`, `cost`, `duration`, `ingredients`, `make_it`, `date`) VALUES
(1, 'Jollof Rice', 'N2100', '45 minutes', '', '', '2022-05-31 14:41:31'),
(2, 'Ogbono Soup', '-', '30 minutes', '', '', '2022-05-31 14:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `orders` varchar(100) NOT NULL,
  `quantity` int(5) NOT NULL,
  `cost` text NOT NULL,
  `contact` bigint(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `cust_name`, `orders`, `quantity`, `cost`, `contact`, `date`) VALUES
(7, 'Rubylenshy', 'reergef', 7, 'N20000', 8843692099, '2022-05-31 13:48:26'),
(8, 'egrsrgaer', 'A plate of Egusi, 2 chicken and 2 wraps of Eba', 4, 'N20000', 8843692099, '2022-05-31 13:48:36'),
(9, 'Tom Holland', 'Two plates of fried rice, Two plates of jollof rice and 2 turkey', 5, 'N40000', 8783593379, '2022-05-31 13:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `side_dish`
--

CREATE TABLE `side_dish` (
  `id` int(11) NOT NULL,
  `dish` text NOT NULL,
  `cost` text NOT NULL,
  `duration` text NOT NULL,
  `ingredients` text NOT NULL,
  `make_it` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `side_dish`
--

INSERT INTO `side_dish` (`id`, `dish`, `cost`, `duration`, `ingredients`, `make_it`, `date`) VALUES
(1, 'Asun (Spicy Smoked Goat Meat)', 'N1200', '20 minutes', '', '', '2022-05-31 14:51:04'),
(3, 'Akara (Beans Cake)', 'N400', '15 minutes', '', '', '2022-05-30 22:53:20'),
(4, 'Moin Moin', 'N300', '25 minutes', '', '', '2022-05-31 05:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `stock_level`
--

CREATE TABLE `stock_level` (
  `id` int(11) NOT NULL,
  `item` text NOT NULL,
  `quantity` text NOT NULL,
  `cost_per_unit` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_level`
--

INSERT INTO `stock_level` (`id`, `item`, `quantity`, `cost_per_unit`, `date`) VALUES
(1, 'Maggi(Knorr)', '20 Medium Packs', 'N900', '2022-05-31 13:48:58'),
(2, 'Peanut butter', '2 Jars', 'N1500', '2022-05-31 13:50:01'),
(3, 'Cabbage', '10', 'N600', '2022-05-31 20:13:18'),
(4, 'Tomato', '9 Rubbers', 'N450', '2022-05-31 20:13:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appetizers_bev`
--
ALTER TABLE `appetizers_bev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_dish`
--
ALTER TABLE `main_dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `side_dish`
--
ALTER TABLE `side_dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_level`
--
ALTER TABLE `stock_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appetizers_bev`
--
ALTER TABLE `appetizers_bev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_dish`
--
ALTER TABLE `main_dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `side_dish`
--
ALTER TABLE `side_dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_level`
--
ALTER TABLE `stock_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
