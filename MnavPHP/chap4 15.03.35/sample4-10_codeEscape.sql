-- データを検索するSQL
-- SELECTを学ぶ

SELECT id, item_name FROM my_item WHERE id=1;
-- =「my_item」内「id」,「item_name」を「id=1」から検索する

SELECT item_name, price FROM my_item WHERE id=2;
-- =「my_item」内「item_name」,「price」を「id=2」から検索する
-- =「にくまん」と「150」が表示される。

-- SELECT カラム名1, カラム名2 FROM テーブル名 WHERE 条件式(主にid);
