INSERT INTO `item` (`id`, `name`) VALUES ('1', '商品1');
-- =「`item`」の『id』と『name』にそれぞれ『1』『商品１』を挿入するという意味になる。

-- 1.INSERT INTO `item` (`id`, `name`) = 『'item'』『id』と『name』にそれぞれに挿入する
-- 2.VALUES ('1', '商品１') = ここで、「1.」で設定した項目に値を入れる。

-- クソ！これで限界だ！！

INSERT INTO `item` (`id`, `name`) VALUES ('2', '商品2');
INSERT INTO `item` (`id`, `name`) VALUES ('3', '商品3');
-- こんな感じで量産を続けても、
-- db一覧の「item」へ移動して「表示(browse)」をクリックすれば一覧形式で見られる。

-- この時、「??1」のように文字化けが発生したら、
-- dbを消してもう一度作れば解決するようだ。

ちなみに、横軸を「レコード」、縦軸を「カラム」と呼ぶ。
私が習った時は、縦を「列（↓とうへんの線が並行な縦棒）」、
横を「行（→ぎょうにんべんじゃない方の上部の線が並行な横棒）」
