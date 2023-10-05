-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 07:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `risto`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordered_in`
--

CREATE TABLE `ordered_in` (
  `Screen_ID` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `Order_Paid` tinyint(1) DEFAULT NULL,
  `Order_Date` datetime DEFAULT NULL,
  `Order_Ready` tinyint(1) NOT NULL,
  `Order_List` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Order_Paid`, `Order_Date`, `Order_Ready`, `Order_List`) VALUES
(1, 0, '2021-12-15 11:45:02', 0, '{Total=40.0 DH, Orange Juice=2}'),
(2, 0, '2021-12-15 13:23:41', 0, '{Total=25.0 DH, Fries=1, Orange Juice=1}'),
(4, 1, '2021-12-15 13:34:06', 1, '{Total=5.0 DH, Fries=1}'),
(5, 1, '2021-12-15 13:35:44', 0, '{Total=5.0 DH, Fries=1}'),
(6, 1, '2021-12-15 13:40:56', 1, '{Total=50.0 DH, Burger=1}'),
(7, 1, '2021-12-15 13:42:08', 0, '{Total=50.0 DH, Burger=1}'),
(8, 1, '2021-12-15 13:43:23', 0, '{Total=5.0 DH, Fries=1}'),
(9, 0, '2021-12-15 13:46:52', 0, '{Total=50.0 DH, Burger=1}'),
(10, 1, '2021-12-15 13:48:16', 0, '{Total=40.0 DH, Orange Juice=2}'),
(11, 0, '2021-12-15 13:50:23', 0, '{Total=50.0 DH, Burger=1}'),
(12, 0, '2021-12-15 13:53:12', 0, '{Total=20.0 DH, Orange Juice=1}'),
(13, 0, '2021-12-15 13:56:49', 0, '{Total=20.0 DH, Orange Juice=1}'),
(14, 0, '2021-12-15 13:58:15', 0, '{Total=5.0 DH, Fries=1}'),
(15, 0, '2021-12-15 13:59:46', 0, '{Total=40.0 DH, Orange Juice=2}'),
(16, 0, '2021-12-15 14:00:11', 0, '{Total=75.0 DH, Burger=1, Fries=1, Orange Juice=1}'),
(17, 0, '2021-12-15 14:04:07', 1, '{Total=100.0 DH, Burger=2}'),
(18, 1, '2021-12-15 14:06:20', 0, '{Total=60.0 DH, Orange Juice=3}'),
(19, 0, '2021-12-16 09:32:56', 0, '{Total=30.0 DH, Fries=2, Orange Juice=1}'),
(20, 1, '2021-12-16 10:29:00', 0, '{Total=110.0 DH, Burger=2, Fries=2}'),
(21, 1, '2021-12-16 11:29:04', 0, '{Total=25.0 DH, Fries=1, Orange Juice=1}'),
(22, 1, '2021-12-16 12:28:48', 1, '{Total=130.0 DH, Burger=2, Fries=2, Orange Juice=1}'),
(23, 0, '2021-12-16 16:20:38', 0, '{Total=25.0 DH, Fries=1, Orange Juice=1}');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` text DEFAULT NULL,
  `Product_Price` int(11) DEFAULT NULL,
  `Product_Picture` text DEFAULT NULL,
  `Product_Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Product_Name`, `Product_Price`, `Product_Picture`, `Product_Category`) VALUES
(1, 'Burger', 50, 'products/p1.jpg', 'food'),
(2, 'Orange Juice', 20, 'products/p2.jpg', 'drink'),
(12, 'Fries', 5, 'products\\p3.jpg', 'fries');

-- --------------------------------------------------------

--
-- Table structure for table `ready`
--

CREATE TABLE `ready` (
  `Order_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Product_Is_Ready` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `User_Type` text DEFAULT NULL,
  `User_Email` varchar(100) DEFAULT NULL,
  `User_Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Type`, `User_Email`, `User_Password`) VALUES
(1, 'Cashier', 'Cashier1@risto.com', 'Cashier1'),
(2, 'Chef', 'Chef1@risto.com', 'Chef1'),
(6, 'Screen', 'Screen1@risto.com', 'Screen1'),
(7, 'Screen', 'Screen2@risto.com', 'Screen2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordered_in`
--
ALTER TABLE `ordered_in`
  ADD PRIMARY KEY (`Screen_ID`,`Order_ID`),
  ADD KEY `FK_Ordered_In_Order_ID` (`Order_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `ready`
--
ALTER TABLE `ready`
  ADD PRIMARY KEY (`Order_ID`,`Product_ID`),
  ADD KEY `FK_Ready_Product_ID` (`Product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordered_in`
--
ALTER TABLE `ordered_in`
  MODIFY `Screen_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ready`
--
ALTER TABLE `ready`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordered_in`
--
ALTER TABLE `ordered_in`
  ADD CONSTRAINT `FK_Ordered_In_Order_ID` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`Order_ID`),
  ADD CONSTRAINT `FK_Ordered_In_Screen_ID` FOREIGN KEY (`Screen_ID`) REFERENCES `screens` (`Screen_ID`);

--
-- Constraints for table `ready`
--
ALTER TABLE `ready`
  ADD CONSTRAINT `FK_Ready_Order_ID` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`Order_ID`),
  ADD CONSTRAINT `FK_Ready_Product_ID` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`Product_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
