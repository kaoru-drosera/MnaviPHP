-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2019 at 06:26 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb_byMnaviPHP`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `items_id`, `count`) VALUES
(1, 3, 15),
(2, 2, 0),
(3, 3, 41),
(4, 1, 32),
(5, 2, 0),
(6, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`) VALUES
(1, '商品１'),
(2, '商品２ '),
(3, '商品3'),
(100, '商品100');

-- --------------------------------------------------------

--
-- Table structure for table `maker`
--

CREATE TABLE `maker` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maker`
--

INSERT INTO `maker` (`id`, `name`, `address`, `tel`) VALUES
(1, '山田クン', '東京都杉並区', '000-111-2222'),
(2, '石丸クン', '北海道小樽市', '010-121-2332'),
(3, '大和田クン', '神奈川県横浜市', '100-311-5222'),
(4, '不二咲クン', '福岡県天神市', '111-119-8888');

-- --------------------------------------------------------

--
-- Table structure for table `my_item`
--

CREATE TABLE `my_item` (
  `id` int(11) NOT NULL,
  `maker_id` int(11) NOT NULL,
  `item_name` text,
  `price` int(11) DEFAULT NULL,
  `keyword` text NOT NULL,
  `sales` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `Modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_item`
--

INSERT INTO `my_item` (`id`, `maker_id`, `item_name`, `price`, `keyword`, `sales`, `created`, `Modified`) VALUES
(1, 1, 'いちご', 380, '甘い,丸い,大きい,うまい,うまいが高い', 10, '2018-01-01 00:00:00', '2019-02-27 05:16:12'),
(2, 2, 'にんじん', 120, '赤い,甘い,リコピン', 20, '2019-02-27 13:25:12', '2019-02-27 05:18:27'),
(3, 3, 'さつまいも', 150, 'じゃんけんジャガイモ,紫,栗よりうまい', 16, '0000-00-00 00:00:00', '2019-02-27 05:18:27'),
(4, 4, 'しょうが', 180, '国産,だけに,日本人', 8, '2018-01-10 00:00:00', '2019-02-27 05:18:27'),
(5, 1, 'ブルーベリー', 300, '袋入り,青い,眼精疲労,もちろんうまい', 15, '0000-00-00 00:00:00', '2019-02-27 05:18:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maker`
--
ALTER TABLE `maker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_item`
--
ALTER TABLE `my_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `maker`
--
ALTER TABLE `maker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `my_item`
--
ALTER TABLE `my_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
