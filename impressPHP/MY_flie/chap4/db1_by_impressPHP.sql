-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2019 年 10 月 30 日 03:02
-- サーバのバージョン： 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1_by_impressPHP`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'eeewww', '2019-06-03 21:21:27'),
(2, 'aaaaa', '2019-06-03 21:58:42'),
(3, 'oooooooooooooooooooooddddddd', '2019-06-03 22:38:27'),
(4, 'ヴェアアアアアアンヴ(ｼﾞｭﾙ)', '2019-06-03 22:40:16'),
(5, 'EEEEEEEEEEE', '2019-06-03 23:30:17'),
(6, 'あくまで、王馬くんの無力化が目的だったはずだよ', '2019-06-03 23:30:58'),
(7, '2時間妨害できる武器、エレクトボムだ', '2019-06-03 23:31:30'),
(9, '終わったが', '2019-06-04 02:20:57');

-- --------------------------------------------------------

--
-- テーブルの構造 `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `recipe_name` varchar(45) NOT NULL,
  `category` tinyint(1) NOT NULL,
  `difficulty` tinyint(1) NOT NULL,
  `budget` mediumint(9) NOT NULL,
  `howto` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `recipes`
--

INSERT INTO `recipes` (`id`, `recipe_name`, `category`, `difficulty`, `budget`, `howto`) VALUES
(1, 'チリドック', 2, 2, 1000, '1.バターロールに切り込みを入れる\r\n2.ソーセージを挟む\r\n3.トマトソースをたっぷりかけて完成！'),
(2, 'にんじんゼリー', 2, 2, 1500, '1.ゼラチンを水に溶かし、人参は皮をむく。\r\n2.沸騰しないように鍋で火にかける。\r\n3.型に移し、粗熱をとって冷蔵庫で固める。'),
(3, 'カレー', 3, 2, 1000, '材料は、ボムカレー一袋と、炊いたご飯！\r\nえー、これだけ！？すごいねー！\r\n電子レンジがあれば、何でもできるよ！'),
(4, 'サンマの塩焼き', 1, 1, 400, 'サンマを焼く。以上'),
(5, '肉じゃが', 1, 1, 1500, '1.調味料を事前に混ぜておく。\r\n2.材料を下ごしらえ。\r\n3.材料を炒める。\r\n4.調味料を入れて蓋をして煮れば完成！'),
(6, 'とんかつ', 1, 2, 1500, '1.ステーキ用豚肉に塩胡椒→小麦粉→溶いた卵→パン粉の順番でまぶしていく。\r\n2.180度の油できつね色になるまで揚げる。\r\n3.キッチンペーパーや新聞紙の上に上げて、出来上がり！'),
(7, '水餃子', 3, 2, 2000, '1.ひき肉、野菜をミキサーにかけ、具を作る。\r\n2.1をぎょうざ皮の枚数分に分ける。\r\n3.分けた1をぎょうざ皮に包んでいく。\r\n4.水やスープで硬くなるまで茹でれば完成！'),
(8, 'かに玉あんかけ', 3, 1, 1200, '1.細かくしたカニカマと調味料を混ぜてレンジで加熱。あんかけを作る。\r\n2.フライパンに溶いた卵を入れ、ある程度混ぜたらすぐに火を止めて皿に移す。\r\n3.1のあんかけを豪快にかけて完成！'),
(9, 'ゆで卵', 1, 2, 300, '1.お湯におたま１杯分の水を入れる。\r\n2.６分間弱火で加熱する。\r\n3.火を止めて4分間放置する。\r\n4.蓋を開けて取り出し、かぶる程度の冷水でふってむきやすく。'),
(10, 'ベーコンエッグ', 2, 1, 700, '1.フライパンを熱して、ベーコンを炒める。\r\n2.油がしみ出したら、卵を割り落とす。\r\n3.卵がお好みの固さになったら完成！'),
(11, 'エッグトースト', 2, 1, 500, '1.パンの外周にマヨネーズを回し掛け、堀を作る。\r\n2.はみ出ないように卵を割り落とす。\r\n3.オーブントースターで8~10分間加熱。\r\n4.マヨネーズ二焦げ目がつき、卵がお好みの固さになったら完成！'),
(12, '自家製ヨーグルト', 2, 3, 500, '1.スプーンやマドラーは熱湯消毒する。\r\n2.牛乳にカスピ海ヨーグルトを入れて、パックをしっかりと閉じる。\r\n3.20~30どの室内で1~2日置けばできるはず。'),
(14, 'ポテトフライ', 2, 1, 500, '1.ジャガイモを縦にチョーク程度の太さにカット。\r\n2.油を180度に加熱する。\r\n3.ジャガイモに箸がスッと通るようになるまで揚げれば完成！');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memos`
--
ALTER TABLE `memos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
