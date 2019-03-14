-- データを変更するSQL
-- UPDATEを学ぶ

UPDATE my_item SET item_name='にくまん',price=150 WHERE id=2;
-- UPDATE テーブル名 SET 変更項目があるカラム名=変更項目 WHERE 条件文(主にid);

-- ちなみに、UPDATEで「INSERT INTO my_item(id, item_name ,price) VALUES (2, 'にんじん', 100);」
-- といった書き方は無理。残念ッ！！！

-- あと、こんな書き方だとかっこよくなりそう。
UPDATE my_item
SET price=150,
 item_name=にくまん
WHERE id=2;


-- WHEREは省略すると「全て」という条件になるので基本的に省略しないほうがいい
