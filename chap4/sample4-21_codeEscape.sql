--その他便利なSQL
--DISTINCT,BETWEEN,IN,LIMIT,AS を学ぶ

SELECT items_id FROM carts;
-- このコードでは同じデータが重複して出る。
-- 「DISTINCT」を使えば、重複を防げる。

SELECT DISTINCT items_id FROM carts;
-- 以上のコードだ。

SELECT * FROM my_item WHERE price>=50 AND price<150;
-- 意味:「価格が50以上、150以下」このコード。
-- 「BETWEEN」を使えば省略できる。

SELECT * FROM my_item WHERE price BETWEEN 50 AND 149;
-- ただし、不等号は使えず「〜以下」しか使えないので、
-- 「１５０未満」と入力したければ「149以下」で入力する必要がある。
-- 状況によっては、省略しないで書いたほうが便利かも。

SELECT * FROM my_item WHERE id=1 OR id=3;
-- このコードでたった今だけ通用するからいいけど、100ぐらいまで続くコードまでこのやり方するつもり？
-- 「IN」があれば解決なのに！

SELECT * FROM my_item WHERE IN(1,3);
-- 同じカラムに対して一度に指定できるコード「IN」。
-- 飛び飛びのコードも一度に取り出せる！

SELECT * FROM carts LIMIT 2;
-- 「LIMIT」を用いることで、取り出す件数を制限することができる。

SELECT * FROM carts LIMIT 2,2;
-- 表示件数の前に数字を入れてカンマで区切れば、
-- 「始まりの位置」を指定することもできる。
-- ちなみに、「数字の次」で表示される。
-- たとえば、コードで開始位置を「2」とすると、
-- 「3」のデータから始まる形に。


SELECT i.item_name, SUM(c.count) AS sales_count FROM my_item i, carts c WHERE i.id=c.items_id GROUP BY c.items_id;
-- 「AS」を使うことで、取り出したデータに名前をつけることができる。
-- 「AS sales_count」で名前を指定すると、
-- item_name以外のカラムの名前が「sales_count」になる。

SELECT i.item_name, SUM(c.count) FROM my_item i, carts c WHERE i.id=c.items_id GROUP BY c.items_id;
-- このように、「AS」を使わないと
-- item_name以外のカラムの名前は「SUM(c.count)」という
-- デフォルトの名前になる。

-- 3テーブルのリレーションを使って
-- 「商品の販売状況を多い順に、生産者、商品名ともに表示する」という演習があったんだが…
-- すまねぇッ！！時間がねぇ！次に進ませてもらうぜ！！




--
