-- DBで一番大事なキー
-- プライマリーキーを学ぶ

-- 商品のバーコードのように、データベースにも「JANコード」が振ると便利。
-- データベースの「JANコード」は「プライマリーキー（または「主キー」）」と呼ばれ、
-- 設定するといろいろ便利なことを行ってくれる。

-- 「操作(Operation)」タブでテーブルを空にする（「TRUNCATE」）。
-- その後「構造(Structure)」タブに戻り、カラムに「primary」を設定して完了。
-- 「インデックス(indexes)」の欄に「PRIMARY」と設定された項目が加われば成功！



-- プライマリーキーを入れておくとデータ重複を防いでくれる。
-- 例えば、以下のコードを入れて重複したデータを入れてみよう。

①:INSERT INTO my_item SET id=1, item_name='いいちこ',price=180

②:INSERT INTO my_item SET id=1, item_name='いいちこ',price=180

-- ②のコードを入力しようとしたところで、こんなエラーを吐いてくれる。
#1062 - Duplicate entry '1' for key 'PRIMARY'
-- 意味:「idカラムが1のデータが重複(Duplicate)してるよ！」




-- 加えて、idの入れ忘れも防いでくれる。
-- 例えば、こんなコードを入力すると…？

INSERT INTO my_item SET id=NULL, item_name='いちご',price=180;
-- ＝（idの値が空（NULL））

-- こんなエラーを吐いて防いでくれる。
#1048 - Column 'id' cannot be null
-- 意味:「idカラムは空(NULL)にはできないよ！」
