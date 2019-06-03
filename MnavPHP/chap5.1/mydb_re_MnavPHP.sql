-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 03, 2019 at 05:27 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb_re:MnavPHP`
--

-- --------------------------------------------------------

--
-- Table structure for table `memos`
--

CREATE TABLE `memos` (
  `id` int(11) NOT NULL,
  `memo` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memos`
--

INSERT INTO `memos` (`id`, `memo`, `created_at`) VALUES
(1, 'eeewww', '2019-06-03 21:21:27'),
(2, 'aaaaa', '2019-06-03 21:58:42'),
(3, 'oooooooooooooooooooooddddddd', '2019-06-03 22:38:27'),
(4, 'ヴェアアアアアアンヴ(ｼﾞｭﾙ)', '2019-06-03 22:40:16'),
(5, 'EEEEEEEEEEE', '2019-06-03 23:30:17'),
(6, 'あくまで、王馬くんの無力化が目的だったはずだよ', '2019-06-03 23:30:58'),
(7, '2時間妨害できる武器、エレクトボムだ', '2019-06-03 23:31:30'),
(9, '終わったが', '2019-06-04 02:20:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memos`
--
ALTER TABLE `memos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
