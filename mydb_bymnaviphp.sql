-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb_bymnaviphp`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `carts`
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
-- テーブルの構造 `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `item`
--

INSERT INTO `item` (`id`, `name`) VALUES
(1, '商品１'),
(2, '商品２ '),
(3, '商品3'),
(100, '商品100');

-- --------------------------------------------------------

--
-- テーブルの構造 `maker`
--

CREATE TABLE `maker` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `maker`
--

INSERT INTO `maker` (`id`, `name`, `address`, `tel`) VALUES
(1, '山田クン', '東京都杉並区', '000-111-2222'),
(2, '石丸クン', '北海道小樽市', '010-121-2332'),
(3, '大和田クン', '神奈川県横浜市', '100-311-5222'),
(4, '不二咲クン', '福岡県天神市', '111-119-8888');

-- --------------------------------------------------------

--
-- テーブルの構造 `memos`
--

CREATE TABLE `memos` (
  `id` int(11) NOT NULL,
  `memo` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `memos`
--

INSERT INTO `memos` (`id`, `memo`, `created_at`) VALUES
(1, '\r\n    テストメッセージ', '2019-03-02 01:18:51'),
(2, '徹夜なうでチャケバクソネミミッミ', '2019-03-02 01:21:11'),
(3, '\r\n    これは\"メッセージです\"\r\nつってｗｗｗｗｗｗｗ', '2019-03-02 01:21:57'),
(4, 'おぉほんとに登録できる', '2019-03-02 01:22:23'),
(5, 'HTMLちょっといじったよ', '2019-03-02 01:23:47'),
(6, 'ダンガンロンパは終わってくれるよね！？', '2019-03-02 02:30:59'),
(7, 'aaaaahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahyahya\r\n\r\n…こんな狂気じみた笑い声も英数字に直すと急にクールになるよね', '2019-03-02 14:30:26'),
(8, 'ccccc', '2019-03-02 14:31:11'),
(9, 'やった…', '2019-03-02 14:31:26'),
(10, 'っっっっっc', '2019-03-02 14:31:38'),
(11, '追加メモ1', '2019-03-02 18:38:18'),
(12, '追加メモ2', '2019-03-02 18:38:50'),
(13, '追加メモ3', '2019-03-02 18:39:02'),
(14, '追加メモ5', '2019-03-02 18:39:09'),
(15, '追加メモ６', '2019-03-02 18:39:17'),
(16, '追加メモ7', '2019-03-02 18:39:23'),
(17, '追加メモ8', '2019-03-02 18:39:30'),
(18, '追加メモ9', '2019-03-02 18:39:38'),
(19, '追加メモ10', '2019-03-02 18:39:45'),
(20, '5-8memoのHTMLがなぜ変更できない？', '2019-03-02 21:28:38');

-- --------------------------------------------------------

--
-- テーブルの構造 `my_item`
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
-- テーブルのデータのダンプ `my_item`
--

INSERT INTO `my_item` (`id`, `maker_id`, `item_name`, `price`, `keyword`, `sales`, `created`, `Modified`) VALUES
(1, 1, 'いちご', 380, '甘い,丸い,大きい,うまい,うまいが高い', 10, '2018-01-01 00:00:00', '2019-02-27 05:16:12'),
(2, 2, 'にんじん', 120, '赤い,甘い,リコピン', 20, '2019-02-27 13:25:12', '2019-02-27 05:18:27'),
(3, 3, 'さつまいも', 150, 'じゃんけんジャガイモ,紫,栗よりうまい', 16, '0000-00-00 00:00:00', '2019-02-27 05:18:27'),
(4, 4, 'しょうが', 180, '国産,だけに,日本人', 8, '2018-01-10 00:00:00', '2019-02-27 05:18:27'),
(5, 1, 'ブルーベリー', 300, '袋入り,青い,眼精疲労,もちろんうまい', 15, '0000-00-00 00:00:00', '2019-02-27 05:18:27'),
(6, 1, 'ココナッツ', 500, '甘くはない,堅い,ミルク,ジュース', 0, '2018-01-23 00:00:00', '2018-01-22 15:00:00');

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
-- Indexes for table `memos`
--
ALTER TABLE `memos`
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
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `my_item`
--
ALTER TABLE `my_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
