--複雑な集計
--GROUP BY を学ぶ

-- 各商品に対して、購入された履歴を記録できるテーブルを作る。
-- データベース「mydb_byMnaviPHP」に、新たに「carts」というテーブルを作った。
-- カラムは「id」「items_id」「count」(いずれもデータ型は「INT」)3つ。

INSERT INTO carts SET items_id='3', count='15';
INSERT INTO carts SET items_id='2', count='24';
INSERT INTO carts SET items_id='3', count='41';
INSERT INTO carts SET items_id='1', count='32';
INSERT INTO carts SET items_id='2', count='53';
INSERT INTO carts SET items_id='1', count='12';

-- cartsの「items_id」は、my_itemの「id」と一致している。
-- よって、cartsもmy_itemやmakerとのリレーションを前提としたテーブル。

-- 早速、my_itemテーブルとリレーションしてみよう

SELECT my_item.item_name, carts.count FROM my_item, carts WHERE my_item.id=carts.items_id;
-- my_item内のitem_nameとcarts内のcountがまとめて表示される。

SELECT SUM(count) FROM carts;
-- これで、carts内countの合計を計算できる。
-- でも、これでは「商品単位の合計」は求められない。
-- ここで必要になるのが「GROUP BY」である。

SELECT items_id, SUM(count) FROM carts GROUP BY items_id;
-- これで、items_idごとの合計を求められる。
-- ただし、IDが数字で表示されているので少々不便。
-- そこで、リレーションでmy_itemsとcartsのデータを引っ張ってくるのだ

SELECT i.item_name, SUM(c.count) FROM my_item i, carts c WHERE i.id=c.items_id GROUP BY c.items_id;
-- 意味は省略。時間ないんだ！ゴメンッ！！

--
