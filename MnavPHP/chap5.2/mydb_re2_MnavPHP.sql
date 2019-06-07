-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 07, 2019 at 07:53 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb_re2:MnavPHP`
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
(2, 'やばしまこたろうたのすけなのでございますのだが', '2019-06-04 22:48:47'),
(3, '1000人の愚かな戦士から1000回同じことを聞いたぞ', '2019-06-04 22:56:24'),
(4, '自分のことを自然災害か何かだと思っているんだろう、違うか', '2019-06-04 22:56:52'),
(5, 'プライムディレクティブはどうしたのだ、えぇ？', '2019-06-04 22:57:12'),
(6, 'ならば死を選ぶと？愚かな！', '2019-06-04 22:57:38'),
(7, 'この無礼な虫ケラめ…………！', '2019-06-04 22:58:07'),
(8, '逆らう奴は全員死刑だァァァッ！', '2019-06-04 22:58:52'),
(9, '焼却処理が完了するまでどうぞそのままでお待ちください', '2019-06-04 22:59:57'),
(10, '侵入者を発見。直ちに退去してください', '2019-06-04 23:00:21'),
(11, '拘束具を用意しろ', '2019-06-04 23:00:32'),
(12, '悪あがきもいい加減にしろ', '2019-06-04 23:04:04'),
(13, 'フリーダムプラネット状態！', '2019-06-05 17:07:01'),
(14, '×フリーダム的ヒーローパンツ\r\n→ヒーロー的フリーダム惑星パンツ', '2019-06-05 17:07:45'),
(16, 'フッ、クールな自分が恨めしいぜ', '2019-06-05 18:24:35'),
(17, 'ティムタムの価格改定を策定しなければならんな', '2019-06-05 18:27:02'),
(19, 'aaaaaaaaaaaaa', '2019-06-05 18:38:46'),
(20, 'wwwwwwwwwwwwwwww', '2019-06-05 18:38:52'),
(21, 'aaaaaaaaaaaaaaa', '2019-06-05 19:33:58');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
