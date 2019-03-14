--計算・集計お手の物？…ってこれexcelで見たことある…
--COUNT,SUM,MAX,MINを学ぼう

SELECT SUM(price) FROM my_item;
-- 意味:「my_itemの価格(price)合計(SUM())出して！」

SELECT AVG(price) FROM my_item;
-- 意味:「my_itemの価格(price)平均(AVG())出して！」

SELECT MAX(price) FROM my_item;
-- 意味:「my_itemの最高(MAX())価格(price)出して！」

SELECT MIN(price) FROM my_item;
-- 意味:「my_itemの最低(MIN())価格(price)出して！」

SELECT COUNT(id) FROM my_item;
-- 意味:「my_itemのid(id)の数を数えて(COUNT())！」


-- これらの数単体では効果はないが、
-- 例えばWHEREと合わせることで「１年分の売り上げ合計などを出す」など、
-- 様々な有用な計算が可能に！
