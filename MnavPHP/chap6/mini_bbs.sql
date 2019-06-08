-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2019 年 6 月 08 日 08:26
-- サーバのバージョン： 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_bbs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `picture`, `created`, `modified`) VALUES
(1, 'boy', 'jed2bzjg@i.softbank.jp', 'df51e37c269aa94d38f93e537bf6e2020b21406c', '20190607175201sea.jpg', '2019-06-08 02:52:03', '2019-06-07 17:52:03'),
(2, 'aaa', 'int@gmail.com', 'c2a7c27a1d2a8c1439a74eef51e57e27ee3bff7f', '20190608035011ダートリーダー　画像.jpg', '2019-06-08 10:50:23', '2019-06-08 01:50:23'),
(3, 'aaa', 'rrrrr@gmail.com', 'ff9ee043d85595eb255c05dfe32ece02a53efbb2', '20190608035229ダートリーダー　画像.jpg', '2019-06-08 10:52:37', '2019-06-08 01:52:37'),
(4, 'aaa', 'cccc@gmail.com', '9ccf8cd3812a506556b823481b85486fa8598dc3', '20190608035521モルフォ　画像.jpg', '2019-06-08 10:55:24', '2019-06-08 01:55:24'),
(5, 'aaa', 'rokco@gmail.com', '6b383f2dee0b357097066435f4450702da7df5f9', '20190608041955藍染ヴォルト.jpg', '2019-06-08 11:23:18', '2019-06-08 02:23:18'),
(6, 'saru', 'secoundSC@gmail.com', 'a0ac1b6b0977b0c55862b5babcdde29aeb82cc3e', '20190608042807ダートリーダー　画像.jpg', '2019-06-08 11:30:04', '2019-06-08 02:30:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
