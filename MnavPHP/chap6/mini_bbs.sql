-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2019 年 6 月 10 日 17:21
-- サーバのバージョン： 5.7.25-log
-- PHP Version: 7.3.1

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
(1, 'kondokoso', 'again@gmail.com', 'c7c90e7a062ec4446b7450fb87a991aa9a8edc89', '20190609075931sea.jpg', '2019-06-09 16:59:32', '2019-06-09 07:59:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `member_id` int(11) NOT NULL,
  `reply_post_id` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `message`, `member_id`, `reply_post_id`, `created`, `modified`) VALUES
(1, 'al;sdkfjasl;dkjf', 1, 0, '2019-06-09 12:28:22', '2019-06-09 08:07:15'),
(2, 'al;sdkfjasl;dkjf', 1, 0, '2019-06-09 12:28:22', '2019-06-09 08:07:19'),
(3, '@kondokoso  WTF', 1, 1, '2019-06-09 20:59:24', '2019-06-09 11:59:24'),
(4, '@kondokoso  痛い', 1, 1, '2019-06-09 20:59:59', '2019-06-09 11:59:59'),
(5, '@kondokoso  縦のパピプペポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポポ', 1, 2, '2019-06-09 21:14:34', '2019-06-09 12:14:34'),
(6, '@kondokoso  傷つきました削除いただければ幸いです', 1, 1, '2019-06-10 00:03:13', '2019-06-09 15:03:13'),
(9, '@kondokoso  that\'s awful', 1, 8, '2019-06-10 00:08:07', '2019-06-09 15:08:07'),
(10, '@kondokoso  ………………………humph。', 1, 7, '2019-06-10 00:08:36', '2019-06-09 15:08:36'),
(11, '@kondokoso  …………ee……。', 1, 8, '2019-06-10 03:10:35', '2019-06-09 18:10:35'),
(12, 'zxzcv', 1, 0, '2019-06-10 03:28:10', '2019-06-09 18:28:10'),
(13, 'rockman', 1, 0, '2019-06-10 03:28:17', '2019-06-09 18:28:17'),
(14, '痛いにゃ', 1, 0, '2019-06-10 03:29:26', '2019-06-09 18:29:26'),
(15, 'これはひどい', 1, 0, '2019-06-10 03:29:38', '2019-06-09 18:29:38'),
(16, 'やったかァァァァァァァーーーーーーーッッッッ\r\n！！！', 1, 0, '2019-06-10 03:35:53', '2019-06-09 18:35:53'),
(17, '@kondokoso  (やった)', 1, 16, '2019-06-10 03:36:12', '2019-06-09 18:36:12'),
(18, '@kondokoso  やったァァァァァァァーーーーッッ！！！(…のか？)', 1, 17, '2019-06-10 03:36:52', '2019-06-09 18:36:52'),
(19, '成長なんかしたくねぇ…', 1, 0, '2019-06-10 23:00:59', '2019-06-10 14:00:59'),
(20, '成長って、何のメリットもないただ面倒なことをやるための口実のように聞こえるから本当に嫌い。うん。本当に「何も言うことないから言った」みたいな感じで。', 1, 0, '2019-06-11 00:09:59', '2019-06-10 15:09:59'),
(21, 'これでもどうか', 1, 0, '2019-06-11 00:14:17', '2019-06-10 15:14:17'),
(22, '@kondokoso  これでもどうだ', 1, 21, '2019-06-11 00:14:25', '2019-06-10 15:14:25'),
(23, '@kondokoso  …。', 1, 20, '2019-06-11 00:16:21', '2019-06-10 15:16:21'),
(24, 'かっもー', 1, 0, '2019-06-11 02:20:06', '2019-06-10 17:20:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id_3` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
