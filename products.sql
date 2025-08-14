-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 03:55 PM
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
-- Database: `productsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_ons`
--

CREATE TABLE `add_ons` (
  `addons_id` int(11) NOT NULL,
  `category` varchar(8) NOT NULL,
  `addons_name` varchar(25) NOT NULL,
  `product_image` varchar(30) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_ons`
--

INSERT INTO `add_ons` (`addons_id`, `category`, `addons_name`, `product_image`, `Price`) VALUES
(1, 'c1', 'Pearl', 'img/NO PICTURE YET.png', 9),
(2, 'c1', 'Crystal', 'img/NO PICTURE YET.png', 9),
(3, 'c1', 'Cream Cheese', 'img/NO PICTURE YET.png', 9),
(4, 'c1', 'Coffee Jelly', 'img/NO PICTURE YET.png', 9),
(5, 'c1', 'Crushed Oreo', 'img/NO PICTURE YET.png', 9),
(6, 'c1', 'Cream Puff', 'img/NO PICTURE YET.png', 9),
(7, 'c1', 'Cheesecake', 'img/NO PICTURE YET.png', 9),
(8, 'c1', 'Brown Sugar Jelly', 'img/NO PICTURE YET.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` varchar(8) NOT NULL,
  `category_name` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`, `category_name`) VALUES
('c1', 'add ons'),
('c2', 'fruit'),
('c3', 'hot drinks'),
('c4', 'ice coffee'),
('c5', 'milktea'),
('c6', 'praf');

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `category` varchar(8) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(13) NOT NULL,
  `product_image` varchar(39) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`category`, `product_id`, `product_name`, `product_image`) VALUES
('c2', 1, 'Kiwi', 'img/Fruit Tea/Kiwi.png'),
('c2', 2, 'Lychee', 'img/NO PICTURE YET.png'),
('c2', 3, 'Green Apple', 'img/Fruit Tea/Green Apple Fruit Tea.png'),
('c2', 4, 'Lemon', 'img/Fruit Tea/Lemon Fruit Tea.png'),
('c2', 5, 'Honey Peach', 'img/NO PICTURE YET.png'),
('c2', 6, 'Mango', 'img/NO PICTURE YET.png'),
('c2', 7, 'Blueberry', 'img/NO PICTURE YET.png'),
('c2', 8, 'Strawberry', 'img/NO PICTURE YET.png'),
('c2', 9, 'Passion Fruit', 'img/NO PICTURE YET.png'),
('c2', 10, 'Water Melon', 'img/Fruit Tea/Watermelon.png');

-- --------------------------------------------------------

--
-- Table structure for table `hot_drinks`
--

CREATE TABLE `hot_drinks` (
  `product_id` int(11) NOT NULL,
  `category` varchar(5) NOT NULL,
  `product_name` varchar(12) NOT NULL,
  `product_image` varchar(27) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hot_drinks`
--

INSERT INTO `hot_drinks` (`product_id`, `category`, `product_name`, `product_image`, `Price`) VALUES
(1, 'c3', 'Hot Brusko', 'img/Hotbrew/Hot Brusko.png', 35),
(2, 'c3', 'Hot Choko', 'img/Hotbrew/Hot Choco.png', 35),
(3, 'c3', 'Hot Moca', 'img/Hotbrew/Hot Moca.png', 35),
(4, 'c3', 'Hot Macha', 'img/Hotbrew/Hot Matcha.png', 35),
(5, 'c3', 'Hot Karamel', 'img/Hotbrew/Hot Karamel.png', 35);

-- --------------------------------------------------------

--
-- Table structure for table `ice_coffee`
--

CREATE TABLE `ice_coffee` (
  `product_id` int(11) NOT NULL,
  `category` varchar(8) NOT NULL,
  `product_name` varchar(12) NOT NULL,
  `product_image` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ice_coffee`
--

INSERT INTO `ice_coffee` (`product_id`, `category`, `product_name`, `product_image`) VALUES
(1, 'c4', 'Kape Brusko', 'img/Iced Coffee/Kape Brusko.png'),
(2, 'c4', 'Kape Macch', 'img/NO PICTURE YET.png'),
(3, 'c4', 'Kape Moca', 'img/Iced Coffee/Kape Mocha.png'),
(4, 'c4', 'Kape Vanilla', 'img/Iced Coffee/Kape Vanilla.png'),
(5, 'c4', 'Kape Fudge', 'img/Iced Coffee/Kape Fudge.png'),
(6, 'c4', 'Kape Matcha', 'img/NO PICTURE YET.png'),
(7, 'c4', 'Kape Karamel', 'img/Iced Coffee/Kape Karamel.png'),
(8, 'c4', 'Taro', 'img/NO PICTURE YET.png');

-- --------------------------------------------------------

--
-- Table structure for table `milktea`
--

CREATE TABLE `milktea` (
  `category` varchar(8) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(17) NOT NULL,
  `product_image` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `milktea`
--

INSERT INTO `milktea` (`category`, `product_id`, `product_name`, `product_image`) VALUES
('c5', 1, 'Okinawa', 'img/Milktea/Okinawa.png'),
('c5', 2, 'Winter Melon', 'img/NO PICTURE YET.png'),
('c5', 3, 'Red Velvet', 'img/Milktea/Red Velvet.png'),
('c5', 4, 'Matcha', 'img/Milktea/Matcha.png'),
('c5', 5, 'Double Dutch', 'img/NO PICTURE YET.png'),
('c5', 6, 'Cheesecake', 'img/NO PICTURE YET.png'),
('c5', 7, 'Dark Choco', 'img/Milktea/Dark Choco.png'),
('c5', 8, 'Choco Kisses', 'img/NO PICTURE YET.png'),
('c5', 9, 'Chocolate', 'img/NO PICTURE YET.png'),
('c5', 10, 'Salted Caramel', 'img/NO PICTURE YET.png'),
('c5', 11, 'Cookies and Cream', 'img/NO PICTURE YET.png'),
('c5', 12, 'Strawberry', 'img/NO PICTURE YET.png');

-- --------------------------------------------------------

--
-- Table structure for table `praf`
--

CREATE TABLE `praf` (
  `product_id` int(11) NOT NULL,
  `category` varchar(8) NOT NULL,
  `product_name` varchar(17) NOT NULL,
  `product_image` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `praf`
--

INSERT INTO `praf` (`product_id`, `category`, `product_name`, `product_image`, `Price`) VALUES
(1, 'c6', 'Moca', 'img/Praf/Mocha Praf.png', 49),
(2, 'c6', 'Coffee Jelly', 'img/Praf/Coffee Jelly Praf.png', 49),
(3, 'c6', 'Caramel Macch', 'img/NO PICTURE YET.png', 49),
(4, 'c6', 'Vanilla Coffee', 'img/Praf/Vanilla Coffee.png', 49),
(5, 'c6', 'Cookies and Cream', 'img/NO PICTURE YET.png', 49),
(6, 'c6', 'Cheesecake Cream', 'img/NO PICTURE YET.png', 49),
(7, 'c6', 'Taro Cream', 'img/Praf/Taro Cream.png', 49),
(8, 'c6', 'Matcha Cream', 'img/NO PICTURE YET.png', 49),
(9, 'c6', 'Chocolate Cream', 'img/NO PICTURE YET.png', 49),
(10, 'c6', 'Strawberry Cream', 'img/Praf/Strawberry Praf.png', 49);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size` varchar(20) DEFAULT NULL,
  `price` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size`, `price`) VALUES
('medio', '29'),
('grande', '39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_ons`
--
ALTER TABLE `add_ons`
  ADD PRIMARY KEY (`addons_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category`),
  ADD KEY `category_idx` (`category`);

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fruit_ibfk_1` (`category`);

--
-- Indexes for table `hot_drinks`
--
ALTER TABLE `hot_drinks`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `hot_drinks_ibfk_1` (`category`);

--
-- Indexes for table `ice_coffee`
--
ALTER TABLE `ice_coffee`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `ice_coffee_ibfk_1` (`category`);

--
-- Indexes for table `milktea`
--
ALTER TABLE `milktea`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `milktea_ibfk_1` (`category`);

--
-- Indexes for table `praf`
--
ALTER TABLE `praf`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `praf_ibfk_1` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_ons`
--
ALTER TABLE `add_ons`
  MODIFY `addons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hot_drinks`
--
ALTER TABLE `hot_drinks`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ice_coffee`
--
ALTER TABLE `ice_coffee`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `milktea`
--
ALTER TABLE `milktea`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `praf`
--
ALTER TABLE `praf`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_ons`
--
ALTER TABLE `add_ons`
  ADD CONSTRAINT `add_ons_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fruit`
--
ALTER TABLE `fruit`
  ADD CONSTRAINT `fruit_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hot_drinks`
--
ALTER TABLE `hot_drinks`
  ADD CONSTRAINT `hot_drinks_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ice_coffee`
--
ALTER TABLE `ice_coffee`
  ADD CONSTRAINT `ice_coffee_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `milktea`
--
ALTER TABLE `milktea`
  ADD CONSTRAINT `milktea_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `praf`
--
ALTER TABLE `praf`
  ADD CONSTRAINT `praf_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
