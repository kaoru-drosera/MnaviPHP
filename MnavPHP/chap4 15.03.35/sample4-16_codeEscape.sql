--
--DATETIME型とTIMESTAMP型を学ぼう

-- DATETIMEで作成日時の、
-- TIMESTAMPで変更日時の
-- カラムを作成しよう。

-- 「構造(Structure)」からカラム作成画面に移り、
-- カラム名(ここでは「created」)とデータ型(DATETIME)を設定して作成する。


-- 作成日時のカラムを作る
-- データ型がDATETIME型のカラムでは、「日付」は決まった形式で書く必要がある。
UPDATE データベース名 SET カラム名 = 'XXXX-XX-XX' WHERE id=X;
EX:
UPDATE my_item SET created = '2018-01-01' WHERE id=1;

-- 「挿入した日付」を入力したければ、「NOW()」という関数を使うと便利。
EX:
UPDATE my_item SET created = NOW() WHERE id=2;


-- 変更日時のカラムを作る

-- 「構造(Structure)」からカラム作成画面に移り、
-- カラム名(ここでは「Modified」)とデータ型(TIMESTAMP)を設定して作成する。
-- 変更日時の更新は、TIMESTAMP型で作ったデータがあれば自動でやってくれるので便利！

UPDATE my_item SET created = "2018-01-10" WHERE id=4
-- で日付を変更した時、
-- 変えたところの「Modified」の値が「2019-02-27 13:27:51」から「2019-02-27 13:30:08」に変わっていたぞ♪
