-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 04:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big_brew`
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_address` varchar(150) NOT NULL,
  `user_contact_number` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `user_name`, `user_address`, `user_contact_number`, `user_email`, `user_password`) VALUES
(1, 'userOne', '#21 Tokyo Street, Cambodia, Peninsula City', ' 091234567899', 'user1@gmail.com', 'user1'),
(2, 'Kim Arvic Juanillo', '  #33 Japan Street, Norway, South America City', '09123456789', 'kim@gmail.com', 'kim'),
(3, 'user2', '789 Camia Drive, Pasig City', '09123456787', 'user2@gmail.com', 'user2'),
(4, 'user3', '321 Dahlia Street, Taguig City', '09123456786', 'user3@gmail.com', 'user3'),
(5, 'user4', '654 Evergreen Avenue, Makati City', '09123456785', 'user4@gmail.com', 'user4'),
(6, 'user6', '987 Fern Street, Pasay City', '09123456784', 'user6@gmail.com', 'user6'),
(7, 'user7', '210 Garden Road, Taguig City', '09123456783', 'user7@gmail.com', 'user7'),
(8, 'user5', '423 Guevarra St, Taguig City', '09537856744', 'user5@gmail.com', 'user5');

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
  `product_name` varchar(255) NOT NULL,
  `product_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `milktea`
--

INSERT INTO `milktea` (`category`, `product_id`, `product_name`, `product_image`) VALUES
('c5', 1, 'Okinawa', 0x696d672f4d696c6b7465612f4f6b696e6177612e706e67),
('c5', 2, 'Winter Melon', 0x696d672f4e4f2050494354555245205945542e706e67),
('c5', 3, 'Red Velvet', 0x696d672f4d696c6b7465612f5265642056656c7665742e706e67),
('c5', 4, 'Matcha', 0x696d672f4d696c6b7465612f4d61746368612e706e67),
('c5', 5, 'Double Dutch', 0x696d672f4e4f2050494354555245205945542e706e67),
('c5', 6, 'Cheesecake', 0x696d672f4e4f2050494354555245205945542e706e67),
('c5', 7, 'Dark Choco', 0x696d672f4d696c6b7465612f4461726b2043686f636f2e706e67),
('c5', 8, 'Choco Kisses', 0x696d672f4e4f2050494354555245205945542e706e67),
('c5', 9, 'Chocolate', 0x696d672f4e4f2050494354555245205945542e706e67),
('c5', 10, 'Salted Caramel', 0x696d672f4e4f2050494354555245205945542e706e67),
('c5', 11, 'Cookies and Cream', 0x696d672f4e4f2050494354555245205945542e706e67),
('c5', 12, 'Strawberry', 0x696d672f4e4f2050494354555245205945542e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_image` longblob NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_size` varchar(10) NOT NULL,
  `order_quantity` int(255) NOT NULL DEFAULT 1,
  `order_price` varchar(255) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `customers_name` varchar(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `total_payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_image`, `order_name`, `order_size`, `order_quantity`, `order_price`, `order_status`, `order_date`, `customers_name`, `customer_id`, `total_payment`) VALUES
(1, 0x696d672f4d696c6b7465612f5265642056656c7665742e706e67, 'Red Velvet', 'medio', 1, '29', 'Processing', '2023-06-27 02:03:33', 'userOne', 1, ''),
(2, 0x696d672f4d696c6b7465612f5265642056656c7665742e706e67, 'Red Velvet', 'medio', 1, '29', 'Processing', '2023-06-27 02:09:13', 'Kim Arvic Juanillo', 2, ''),
(3, 0x696d672f4d696c6b7465612f4461726b2043686f636f2e706e67, 'Dark Choco', 'grande', 1, '39', 'Processing', '2023-06-27 02:09:25', 'Kim Arvic Juanillo', 2, ''),
(4, 0x696d672f4e4f2050494354555245205945542e706e67, 'Taro', 'medio', 1, '29', 'Processing', '2023-06-27 02:09:50', 'userOne', 1, ''),
(5, 0x696d672f4d696c6b7465612f4461726b2043686f636f2e706e67, 'Dark Choco', 'grande', 1, '39', 'Processing', '2023-06-27 13:00:13', 'user2', 3, ''),
(6, 0x696d672f4e4f2050494354555245205945542e706e67, 'Salted Caramel', 'medio', 1, '29', 'Processing', '2023-06-27 13:15:43', 'user4', 5, ''),
(7, 0x696d672f4d696c6b7465612f5265642056656c7665742e706e67, 'Red Velvet', 'medio', 1, '29', 'Processing', '2023-06-27 13:34:04', 'user6', 6, ''),
(8, 0x696d672f486f74627265772f486f74204d6f63612e706e67, 'Hot Moca', 'Regular', 1, '35', 'Processing', '2023-06-27 14:09:26', 'user5', 8, ''),
(9, 0x696d672f507261662f436f66666565204a656c6c7920507261662e706e67, 'Coffee Jelly', 'Regular', 1, '49', 'Processing', '2023-06-27 14:09:40', 'user5', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `praf`
--

CREATE TABLE `praf` (
  `product_id` int(11) NOT NULL,
  `category` varchar(8) NOT NULL,
  `product_name` varchar(17) NOT NULL,
  `base` varchar(150) NOT NULL,
  `product_image` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `praf`
--

INSERT INTO `praf` (`product_id`, `category`, `product_name`, `base`, `product_image`, `Price`) VALUES
(1, 'c6', 'Moca', 'COFFEE-BASED', 'img/Praf/Mocha Praf.png', 49),
(2, 'c6', 'Coffee Jelly', 'COFFEE-BASED', 'img/Praf/Coffee Jelly Praf.png', 49),
(3, 'c6', 'Caramel Macch', 'COFFEE-BASED', 'img/NO PICTURE YET.png', 49),
(4, 'c6', 'Vanilla Coffee', 'COFFEE-BASED', 'img/Praf/Vanilla Coffee.png', 49),
(5, 'c6', 'Cookies and Cream', 'CREAM-BASED', 'img/NO PICTURE YET.png', 49),
(6, 'c6', 'Cheesecake Cream', 'CREAM-BASED', 'img/NO PICTURE YET.png', 49),
(7, 'c6', 'Taro Cream', 'CREAM-BASED', 'img/Praf/Taro Cream.png', 49),
(8, 'c6', 'Matcha Cream', 'CREAM-BASED', 'img/NO PICTURE YET.png', 49),
(9, 'c6', 'Chocolate Cream', 'CREAM-BASED', 'img/NO PICTURE YET.png', 49),
(10, 'c6', 'Strawberry Cream', 'CREAM-BASED', 'img/Praf/Strawberry Praf.png', 49);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`, `price`) VALUES
(1, 'medio', '29'),
(2, 'grande', '39');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `praf`
--
ALTER TABLE `praf`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `praf_ibfk_1` (`category`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_ons`
--
ALTER TABLE `add_ons`
  MODIFY `addons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `praf`
--
ALTER TABLE `praf`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
