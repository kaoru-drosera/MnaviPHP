--そう、それはデータベースの真骨頂
--「リレーション」とは何だ

-- データベースの情報量が増えると、一人では管理が難しくなる。
-- そのため、複数のテーブルに情報を分けて管理し、必要に応じて使うことで
-- データの取り扱いがしやすくなる。
--
-- 要は、ここで学ぶのは「複数のテーブルを横断してデータを扱うために
-- 『テーブルを組み合わせる』方法」だ！！


-- 生産者のカラムを作る
-- 「maker」というカラムを作り、生産者名を入れていく。
-- 今はこの説明で許して！！

-- 生産者用のテーブルを作る
-- サイドバーの「mydb_byMnaviPHP」をクリックし、
-- 「テーブルを作成(Create table)」内で
-- 名前(Name)とカラム数(Number of columns:)を設定する。
-- 今回は「maker」、カラム数は「4」だ。
-- 作成画面に移ったら、
-- id(int)、name(text),address(text),tel(text)の4つを用意する。

早速、テーブルの中身(レコード？)を作成しよう。
以下のコードだ。
INSERT INTO maker SET name='山田クン', address='東京都杉並区', tel='000-111-2222';
INSERT INTO maker SET name='石丸クン', address='北海道小樽市', tel='010-121-2332';
INSERT INTO maker SET name='大和田クン', address='神奈川県横浜市', tel='100-311-5222';
INSERT INTO maker SET name='不二咲クン', address='福岡県天神市', tel='111-119-8888';

-- テーブルを結びつけて管理する
-- サイドバーで「my_item」のページに戻り、「id」の後に「maker_id(int)」というカラムを作る。
-- 「my_item」内に「maker_id」を入力していく。
-- 一応、コードは以下の通り。
UPDATE my_item SET maker_id = 1 WHERE my_item.id = 1;
UPDATE my_item SET maker_id = 2 WHERE my_item.id = 2;
UPDATE my_item SET maker_id = 3 WHERE my_item.id = 3;
UPDATE my_item SET maker_id = 4 WHERE my_item.id = 4;
UPDATE my_item SET maker_id = 1 WHERE my_item.id = 5;

-- 生産者名は「maker」テーブルにあるので、「my_item」内の「maker」カラムは削除！
-- ここに、２テーブルをまたいだデータ検索が幕をあけるのだ！

-- 複数のテーブルで横断して検索する
--
-- 以下コードで商品１のデータを取り出す。
SELECT maker_id FROM my_item WHERE id=1;
-- 意味:「my_item内からidが1のmaker_idを取り出して」
-- 結果、maker_idは1。

次に、生産者のコードを以下コードで検索。
SELECT * FROM maker WHERE id=1;
-- 意味:「maker内からid=1のデータを全て取り出して」


-- 以上コードでは効率が悪い。
-- そこで役に立つのが「リレーション」だ！！


-- リレーション「Relation」を使う
--

--リレーションとは、「2つのテーブルに分けた情報を、あたかも1つのテーブルで
-- 管理されているかのように関連付けて表示できる機能」

SELECT * FROM maker, my_item WHERE my_item.id=1 AND maker.id=my_item.maker_id;
-- 意味「
  -- makerとmy_itemから
--   ①:「my_item内のidが『1』」
--   ②:「maker内のid」と、「my_item内のmaker_id」が一致している
--   の条件を全て満たしたデータを
  -- 全て持ってきて！
-- 」


-- このコード1つで、
-- 一発で生産者の名前や住所と電話番号が、商品情報もセットで一目で確認できる！

SELECT * FROM maker, my_item WHERE maker.id=my_item.maker_id;
-- 意味「
--   makerとmy_itemから
--   "makerテーブルのidとmy_itemテーブル名のmaker_idが一致した"
--   のデータを全て持ってきて！（？）
-- 」



-- WHEREでリレーションを使う
--
-- 複数のテーブルを指定した場合は、必ずキーとなるカラムを使って結びつけなければならない。
-- それが、WHEREの次の記述である。（ほぼ原文ママ）
… WHERE my_item.id=1 AND maker.id=my_item.maker_id;
-- 「makerテーブルのidとmy_itemテーブル名のmaker_idが一致したデータを検索する」
-- という意味になる。
①:WHERE my_item.id=1
-- 意味:「my_item内のidが『1』」
②:AND maker.id=my_item.maker_id;
-- 意味:「maker内のid」と、「my_item内のmaker_id」が一致している

-- 他の条件を加えることもできるが、その条件にもテーブル名を加えなければならない。
-- もしこれを忘れてしまうと、次のようなエラーが出てしまうようだ。

# 1052 - 列'id'はwhere clause内で曖昧です。

-- 「idというカラムが、my_itemのidなのか、makerのidなのか見分けがつかない」という意味。
-- 同じ名前のカラムが複数あるため、どちらのidが対象なのかを示す必要がある。
-- 省略もできるが、念のため常につけるようにしたい。



SELECT * FROM maker m, my_item i WHERE m.id=i.maker_id;
-- このように、使用するサーバー名を変数として使うことで
-- コードを短縮することも可能。
-- 意味「
  -- makerとmy_itemから
--   ①:「my_item内のidが『1』」
--   ②:「maker内のid」と、「my_item内のmaker_id」が一致している
--   の条件を全て満たしたデータを
  -- 全て持ってきて！
-- 」




--
