-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 02:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
create database products;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_ons`
--

CREATE TABLE products.add_ons (
  `prod_id` int primary key auto_increment,
  `prod_name` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_ons`
--

INSERT INTO products.add_ons (prod_id, prod_name, priceadd_onsadd_ons) VALUES
('1', 'Pearl', 9),
('2', 'Crystal', 9),
('3', 'Cream Cheese', 9),
('4', 'Coffe Jelly', 9),
('5', 'Crushed Oreo', 9),
('6', 'Cream Puff', 9),
('7', 'Cheesecake', 9),
('8', 'Brown Sugar Jelly', 9);

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE products.fruit (
  `prod_id` int primary key auto_increment,
  `prod_name` text NOT NULL,
  `medio` int(10) NOT NULL,
  `grande` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruit`
--

INSERT INTO products.fruit (prod_id, prod_name, medio, grande) VALUES
('1', 'Kiwi', 29, 39),
('2', 'Lychee', 29, 39),
('3', 'Green Apple', 29, 39),
('4', 'Lemon', 29, 39),
('5', 'Honey Peach', 29, 39),
('6', 'Mango ', 29, 39),
('7', 'Blueberry', 29, 39),
('8', 'Strawberry', 29, 39),
('9', 'Passion Fruit', 29, 39),
('10', 'Water Melon', 29, 39);

-- --------------------------------------------------------

--
-- Table structure for table `hot_drinks`
--

CREATE TABLE products.hot_drinks (
  `prod_id` int primary key auto_increment,
  `prod_name` text NOT NULL,
  `medio` int(10) NOT NULL,
  `grande` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hot_drinks`
--

INSERT INTO products.hot_drinks (prod_id, prod_name, medio, grande) VALUES
('1', 'Hot Brusko', 29, 39),
('2', 'Hot Choco', 29, 39),
('3', 'Hot Moca', 29, 39),
('4', 'Hot Macha', 29, 39),
('5', 'Hot Caramel', 29, 39);

-- --------------------------------------------------------

--
-- Table structure for table `ice_coffee`
--

CREATE TABLE products.ice_coffee (
  `prod_id` int primary key auto_increment,
  `prod_name` text NOT NULL,
  `medio` int(10) NOT NULL,
  `grande` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ice_coffee`
--

INSERT INTO  products.ice_coffee (prod_id, prod_name, medio, grande) VALUES
('1', 'Kape Brusko', 29, 39),
('2', 'Kape Macch', 29, 39),
('3', 'Kape Moca', 29, 39),
('4', 'Kape Vanilla', 29, 39),
('5', 'Kape Fudge', 29, 39),
('6', 'Kape Matcha', 29, 39),
('7', 'Kape Karamel', 29, 39),
('8', 'Taro', 29, 39);

-- --------------------------------------------------------

--
-- Table structure for table `milktea`
--

CREATE TABLE products.milktea (
  `prod_id` int primary key auto_increment,
  `prod_name` text NOT NULL,
  `medio` int(10) NOT NULL,
  `grande` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `milktea`
--

INSERT INTO products.milktea (prod_id, prod_name, medio, grande) VALUES
('1', 'Okinawa', 29, 39),
('2', 'Winter Melon', 29, 39),
('3', 'Red Velvet', 29, 39),
('4', 'Matcha ', 29, 39),
('5', 'Double Dutch', 29, 39),
('6', 'Cheesecake', 29, 39),
('7', 'Dark Choco', 29, 39),
('8', 'Choko Kisses', 29, 39),
('9', 'Chocolate', 29, 39),
('10', 'Salted Caramel', 29, 39),
('11', 'Cookies and Cream', 29, 39),
('12', 'Strawberry', 29, 39);

-- --------------------------------------------------------

--
-- Table structure for table `praf`
--

CREATE TABLE products.praf (
  `prod_id` int primary key auto_increment,
  `prod_name` text NOT NULL,
  `medio` int(10) NOT NULL,
  `grande` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `praf`
--

INSERT INTO products.praf (prod_id, prod_name, medio, grande) VALUES
('1', 'Moca', 29, 39),
('2', 'Coffee Jelly', 29, 39),
('3', 'Caramel Macch', 29, 39),
('4', 'Vanilla Coffee', 29, 39);

-- --------------------------------------------------------

--
-- Table structure for table `praf_krim`
--

CREATE TABLE products.praf_krim (
  `prod_id` int primary key auto_increment,
  `prod_name` varchar(25) NOT NULL,
  `medio` int(10) NOT NULL,
  `grande` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `praf_krim`
--

INSERT INTO products.praf_krim (prod_id, prod_name, medio, grande) 
VALUES
('1', 'Cookies and Cream', 29, 39),
('2', 'Cheesecake Cream', 29, 39),
('3', 'Taro Cream', 29, 39),
('4', 'Matcha Cream', 29, 39),
('5', 'Chocolate Cream', 29, 39),
('6', 'Strawberry Cream', 29, 39);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
