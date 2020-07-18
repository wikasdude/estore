-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 05:36 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `subcategory_id`, `category_name`, `category_desc`) VALUES
(1, 1, 'iphone', 'about iphone'),
(2, 2, 'redmi', 'about redmi'),
(3, 1, 'vivo', 'about vivo'),
(4, 1, 'samsung', 'about samsung'),
(5, 1, 'oppo', 'about oppo');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('sanjay', 'sanjay@gmail.com', 'hello sanjay'),
('rahul', 'vikas@gmail.com', 'heelo rahul'),
('vikky', 'vik@gamil.com', 'hello vikky'),
('viky', 'kuki.sharma786@gmail.com', 'heelo kuki');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `image`, `description`, `category_id`) VALUES
(1, 'iphone 7', 36000, 'image/mob1.jpg', 'snadragon 250', 1),
(2, 'iphone 8', 40000, 'image/mob2.jpg', 'snadragon 450', 1),
(3, 'iphone 9', 45000, 'image/mob3.jpg', 'snapdragon 550', 1),
(4, 'redmi 4a', 50000, 'image/mob4.jpg', 'ram 4gb', 2),
(5, 'redmi 4', 13000, 'image/mob5.jpg', 'ram 3gb', 2),
(6, 'redmi 3', 3000, 'image/mob6.jpg', 'ram 4gb', 2),
(7, 'redmi y', 8000, 'image/mob7.jpg', 'exynos 9901', 2),
(8, 'vivo u10', 18000, 'image/mob8.jpg', 'exynos 101', 3),
(9, 'samsung galaxy m01', 800, 'image/mob9.jpg', 'exynos 301', 4),
(10, 'oppo 50', 1000, 'image/mob10.jpg', 'snapdragon 665', 5),
(11, 'vivo u21', 1000, 'image/mob11.jpg', 'snapdragon 711', 3),
(12, 'redmi 6', 1300, 'image/mob12.jpg', 'snapdragon 781', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcat_name`) VALUES
(1, 'below 10000'),
(2, 'above 10,000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'vikas', 'kuki.sharm786@gmail.com', '1234', '7404134301', 'kkr', 'kkr'),
(2, 'admin', 'admin', '123789', '45345435', '3423dfdsfd', 'nsdfklsdfj'),
(3, 'ad', 'admin@gmail.com', '1236', 'sdfjsd', 'dskfjs', 'sdlfkjsd'),
(5, 'vikas sharma', 'wikasdud@gmail.com', '1233', 'dfdsf', 'karnam', 'pani'),
(6, 'rahul', 'rahultandon@gmail.com', '12', '33454589', 'kkr', '3 gate');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(39, 6, 1, 'Added to cart'),
(43, 6, 11, 'Added to cart'),
(40, 6, 2, 'confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_items`
--
ALTER TABLE `user_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
