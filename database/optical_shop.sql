-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 08:01 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optical_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `unit_of_measure` varchar(4) NOT NULL,
  `quantity` int(6) NOT NULL,
  `min_quantity` int(3) NOT NULL,
  `price` int(8) NOT NULL,
  `PDV_stopa` int(2) NOT NULL,
  `PDV` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `unit_of_measure`, `quantity`, `min_quantity`, `price`, `PDV_stopa`, `PDV`) VALUES
(1, 'staklo', 'kom', 500, 5, 4800, 8, 384),
(2, 'ram', 'kom', 466, 5, 2222, 8, 177.76),
(3, 'Ram za staklo', 'kom', 498, 5, 4750, 8, 380),
(4, 'Rey Ban', 'kom', 354, 10, 2000, 20, 400),
(5, 'naoÄare', 'kom', 1299, 10, 7400, 18, 1332),
(6, 'futrola', 'kom', 1300, 10, 990, 8, 79.2),
(7, 'Lupa', 'kom', 299, 10, 4820, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `surname`, `adress`, `city`, `phone`, `note`) VALUES
(1, 'Marko ', 'Mirovic', 'Svetozara Markovica 48', 'Futog', '065555445', 'sve ok'),
(2, 'Milos', 'Milic', 'Povrtarska 44', 'Futog', '063343434', 'sve ok'),
(3, 'Petar', 'Pesic', 'Industrijska 124', 'Futog', '0643245789', ''),
(4, 'Marko', 'Milic', 'Carice Milice 25', 'Futog', '064777257', ''),
(5, 'miroslav ', 'pantos', 'svetozara markovica 38', 'Futog', '695650665', ':)'),
(6, 'Nemanja', 'PantoÅ¡', 'svetozara markovica 38', 'Futog', '695650665', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `eye_exam`
--

CREATE TABLE `eye_exam` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `client_id` int(11) NOT NULL,
  `daljina_D_Sph` float NOT NULL,
  `daljina_D_Cyl` float NOT NULL,
  `daljina_D_Axis` float NOT NULL,
  `daljina_D_Add` float NOT NULL,
  `daljina_L_Sph` float NOT NULL,
  `daljina_L_Cyl` float NOT NULL,
  `daljina_L_Axis` float NOT NULL,
  `daljina_L_Add` float NOT NULL,
  `s_daljina_D_Sph` float NOT NULL,
  `s_daljina_D_Cyl` float NOT NULL,
  `s_daljina_D_Axis` float NOT NULL,
  `s_daljina_D_Add` float NOT NULL,
  `s_daljina_L_Sph` float NOT NULL,
  `s_daljina_L_Cyl` float NOT NULL,
  `s_daljina_L_Axis` float NOT NULL,
  `s_daljina_L_Add` float NOT NULL,
  `blizina_D_Sph` float NOT NULL,
  `blizina_D_Cyl` float NOT NULL,
  `blizina_D_Axis` float NOT NULL,
  `blizina_D_Add` float NOT NULL,
  `blizina_L_Sph` float NOT NULL,
  `blizina_L_Cyl` float NOT NULL,
  `blizina_L_Axis` float NOT NULL,
  `blizina_L_Add` float NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eye_exam`
--

INSERT INTO `eye_exam` (`id`, `date`, `client_id`, `daljina_D_Sph`, `daljina_D_Cyl`, `daljina_D_Axis`, `daljina_D_Add`, `daljina_L_Sph`, `daljina_L_Cyl`, `daljina_L_Axis`, `daljina_L_Add`, `s_daljina_D_Sph`, `s_daljina_D_Cyl`, `s_daljina_D_Axis`, `s_daljina_D_Add`, `s_daljina_L_Sph`, `s_daljina_L_Cyl`, `s_daljina_L_Axis`, `s_daljina_L_Add`, `blizina_D_Sph`, `blizina_D_Cyl`, `blizina_D_Axis`, `blizina_D_Add`, `blizina_L_Sph`, `blizina_L_Cyl`, `blizina_L_Axis`, `blizina_L_Add`, `comment`) VALUES
(1, '2018-09-09', 4, 21, 231, 213, 0, 213, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, ''),
(2, '2018-09-09', 4, 21, 231, 213, 0, 213, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, ''),
(3, '2018-09-09', 6, 1, 2, 3, 4, 5, 6, 7, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 3, 4, 0, 0, 0, 'sve ok'),
(4, '2018-09-09', 6, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 'buuu'),
(5, '2018-09-09', 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ':)'),
(6, '2018-09-09', 4, 1, 0, 0, 0, 0, 0, 0, 0, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ':)'),
(7, '2018-09-09', 4, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 's'),
(8, '2018-09-09', 4, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 's');

-- --------------------------------------------------------

--
-- Table structure for table `last_sales`
--

CREATE TABLE `last_sales` (
  `id` int(11) NOT NULL,
  `date_of_purchase` datetime NOT NULL,
  `buyer` varchar(25) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_sales`
--

INSERT INTO `last_sales` (`id`, `date_of_purchase`, `buyer`, `price`) VALUES
(1, '2018-08-22 00:00:00', 'Pera Peri?', 4800),
(2, '2018-08-22 00:00:00', 'pera peric', 4800),
(3, '2018-08-22 16:23:48', 'Mile Kitic', 2222),
(4, '2018-08-22 00:00:00', 'Marko Kraljevic', 4800);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `sum` int(8) NOT NULL,
  `client_id` int(6) NOT NULL,
  `for_payment` int(8) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `PDV_sum` int(11) NOT NULL,
  `method_of_payment` int(4) NOT NULL,
  `finished` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `sum`, `client_id`, `for_payment`, `paid`, `PDV_sum`, `method_of_payment`, `finished`) VALUES
(1, '2018-09-07', 3840, 2, 0, 0, 0, 0, 1),
(2, '2018-09-07', 38532, 4, 0, 0, 0, 0, 1),
(3, '2018-09-09', 400, 1, 0, 0, 0, 0, 1),
(4, '2018-09-09', 400, 3, 0, 0, 0, 0, 1),
(5, '2018-09-09', 82732, 4, 0, 0, 0, 0, 1),
(6, '2018-09-09', 8732, 6, 0, 0, 0, 0, 1),
(7, '2018-09-09', 8732, 4, 0, 0, 0, 0, 1),
(8, '2018-09-09', 32732, 1, 0, 0, 0, 0, 1),
(9, '2018-09-09', 42392, 6, 0, 0, 0, 0, 1),
(26, '2018-09-09', 60584, 6, 0, 0, 0, 0, 1),
(27, '2018-09-09', 18262, 6, 0, 0, 0, 0, 1),
(28, '2018-09-10', 5206, 4, 0, 0, 0, 0, 1),
(29, '2018-09-10', 5206, 6, 0, 0, 0, 0, 0),
(30, '2018-09-10', 770, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(5) NOT NULL,
  `article_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `article_id`, `quantity`, `price`) VALUES
(1, 1, 4, 2, 800),
(2, 1, 3, 4, 1520),
(3, 1, 3, 4, 1520),
(4, 2, 4, 10, 20400),
(5, 2, 2, 4, 9066),
(6, 2, 2, 4, 9066),
(7, 5, 5, 11, 82732),
(8, 6, 5, 1, 8732),
(9, 7, 5, 1, 8732),
(10, 8, 4, 2, 4400),
(11, 8, 5, 3, 23532),
(12, 8, 2, 1, 2400),
(13, 8, 2, 1, 2400),
(14, 9, 5, 1, 8732),
(15, 9, 4, 2, 4400),
(16, 9, 3, 3, 14630),
(17, 9, 3, 3, 14630),
(18, 16, 5, 0, 1332),
(19, 16, 3, 0, 380),
(20, 16, 4, 0, 400),
(21, 16, 4, 0, 400),
(22, 17, 5, 0, 1332),
(23, 17, 3, 0, 380),
(24, 17, 4, 0, 400),
(25, 17, 4, 0, 400),
(26, 18, 4, 5, 10400),
(27, 18, 5, 4, 30932),
(28, 18, 3, 3, 14630),
(29, 18, 3, 3, 14630),
(30, 25, 4, 5, 10400),
(31, 25, 5, 4, 30932),
(32, 25, 3, 3, 14630),
(33, 25, 2, 2, 4622),
(34, 26, 4, 5, 10400),
(35, 26, 5, 4, 30932),
(36, 26, 3, 3, 14630),
(37, 26, 2, 2, 4622),
(38, 27, 5, 1, 8732),
(39, 27, 4, 2, 4400),
(40, 27, 3, 1, 5130),
(41, 28, 7, 1, 5206),
(42, 29, 7, 1, 5206),
(43, 30, 7, 0, 386),
(44, 30, 1, 0, 384);

-- --------------------------------------------------------

--
-- Table structure for table `procurements`
--

CREATE TABLE `procurements` (
  `id` int(11) NOT NULL,
  `procurement_date` date NOT NULL,
  `client_id` int(5) NOT NULL,
  `unit_of_measure` varchar(5) NOT NULL,
  `quantity` int(6) NOT NULL,
  `PDV_stopa` int(2) NOT NULL,
  `sum` int(6) NOT NULL,
  `finished` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurements`
--

INSERT INTO `procurements` (`id`, `procurement_date`, `client_id`, `unit_of_measure`, `quantity`, `PDV_stopa`, `sum`, `finished`) VALUES
(1, '2018-09-10', 1, 'kom', 250, 8, 2250, 0),
(2, '2018-09-10', 2, 'kom', 45, 18, 1400, 0),
(3, '2018-09-10', 1, '', 0, 0, 581465, 0),
(4, '2018-09-10', 6, '', 0, 0, 521857, 0),
(5, '2018-09-10', 1, '', 0, 0, 8391411, 1),
(6, '2018-09-10', 1, '', 0, 0, 482386, 0),
(7, '2018-09-10', 3, '', 0, 0, 1523197, 1);

-- --------------------------------------------------------

--
-- Table structure for table `procurement_items`
--

CREATE TABLE `procurement_items` (
  `id` int(11) NOT NULL,
  `procurement_id` int(7) NOT NULL,
  `article_id` int(5) NOT NULL,
  `quantity` int(6) NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurement_items`
--

INSERT INTO `procurement_items` (`id`, `procurement_id`, `article_id`, `quantity`, `price`) VALUES
(1, 3, 7, 100, 482386),
(2, 3, 6, 100, 99079),
(3, 4, 6, 100, 99079),
(4, 4, 4, 100, 200400),
(5, 4, 2, 100, 222378),
(6, 5, 6, 1000, 990079),
(7, 5, 5, 1000, 7401332),
(8, 6, 7, 100, 482386),
(9, 7, 7, 100, 482386),
(10, 7, 6, 100, 99079),
(11, 7, 5, 100, 741332),
(12, 7, 4, 100, 200400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eye_exam`
--
ALTER TABLE `eye_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_sales`
--
ALTER TABLE `last_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procurements`
--
ALTER TABLE `procurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procurement_items`
--
ALTER TABLE `procurement_items`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eye_exam`
--
ALTER TABLE `eye_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `last_sales`
--
ALTER TABLE `last_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `procurements`
--
ALTER TABLE `procurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `procurement_items`
--
ALTER TABLE `procurement_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
