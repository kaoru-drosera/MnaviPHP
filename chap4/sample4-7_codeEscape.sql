-- データを挿入するSQL
-- INSERTを学ぶ

INSERT INTO my_item SET id=1, item_name='いちご', price=200;

OR

INSERT INTO my_item(id, item_name ,price) VALUES (2, 'にんじん', 100);
-- →エラーバスター：文字列以外は「''」で囲む必要はない。
-- ちなみに、「""」より「''」を使うと良い。
