-- データ並び替えでランキングを作成する
--①:ORDER BY を学ぼう

-- 例えば、データを「価格が安い順」にならべかえるなら「ORDER BY」を使う。
-- ちなみに、並べ替えていないSQLのデータは基本的に「小さい順（昇順）」に並んでいるが
-- 実際にはそうとも限らない。
-- だから確実にならべかえるなら「ORDER BY」で決まりだ。

-- こんな感じだ。
SELECT * FROM my_item ORDER BY id ASC;
-- 意味:「my_itemのデータを『idが小さい順(昇順)』で並べ替えて！」

SELECT * FROM my_item ORDER BY price ASC;
-- 意味:「my_itemのデータを『価格(price)が小さい順(昇順)』で並べ替えて！」

-- 「ASC」は「小さい順(昇順)→(Ascending order)」、
-- 「DESC」は「大きい順（降順）→(Descending order)」。

SELECT * FROM my_item ORDER BY id DESC;
-- 意味:「my_itemのデータを『idが大きい順（降順）』で並べ替えて！」



-- WHERE（検索コマンド）と組み合わせ

-- WHERE（検索コマンド）と併用するには、
-- 「WHERE」の後に「ORDER BY」を書く。

SELECT * FROM my_item WHERE price<=180 ORDER BY id DESC;
-- 意味:「my_itemから
-- ①:価格が180以下
-- の商品のデータを持ってきて(WHERE)、
-- ②:『idが大きい順（降順）』で並べ替えて(ORDER BY)！」




-- 「カラムは『相対情報』より『絶対情報』で作ろう」

-- 他の情報によって評価が変わってしまう「相対評価」は
-- データベースのカラムとしては適切ではない。
-- 「売上数」「評価」など、
-- 他の情報と関連性のない「絶対情報」を
-- データベースに乗せるカラムとして選ぼう。



-- おまけ:
SELECT * FROM my_item ORDER BY sales DESC;
-- 意味:「my_itemのデータを『salesが大きい順（降順）』で並べ替えて！」

-- salesのデータを更新した(いちごのsalesデータを5から10に変える、等)時に
-- もう一度このコードを使用すると、
-- ちゃんと前回結果と結果が変わっている（いちごの順位がしょうがを抜いて3位になっている）。

データを更新:
UPDATE my_item SET sales=10 WHERE my_item.id=1;
