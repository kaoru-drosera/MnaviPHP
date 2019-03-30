--外部結合
--LEFT JOIN,RIGHT JOIN を学ぶ

-- 表示させたいデータの値が0だった場合、SQL検索では表示されない性質がある。



-- データがない項目も表示させるには、今までの「内部接続」にかわって「外部接続」を用いる必要がある。

-- 「内部接続」は、両方にデータが存在しないと、データが結合されず出てこない。
-- それが、「外部接続」なら片方にデータがあるだけで表示できるようになる。

SELECT i.item_name, SUM(count) FROM my_item i LEFT JOIN carts c ON i.id=c.items_id GROUP BY i.id;
-- このコードを利用すれば、前回の内部接続コードを利用した場合には出てこなかった
-- 「しょうが」「ブルーベーリー」のデータも出てくる。

外部接続は基本この公式を覚えておくといい。
SELECT … FROM テーブル1 LEFT JOIN テーブル2 ON 結合の条件 WHERE …;

-- 「テーブル1で指定したテーブルがメインとなり、このテーブルは全て表示される。
-- テーブル2のデータがあればそれも合わせて表示される」
-- と言った具合で表示される。
--
-- 今まで書いてきた「内部結合」も、「LEFT JOIN」を「INNER JOIN」に書き換えたものを
-- 省略しただけ。




--