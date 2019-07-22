<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>論理式？</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main-contents">
    <h3>ビット演算子</h3>
    <p>A＜＜B→元の数＜＜かける回数</p>
    <p>例えば1なら2で割ることになり、2なら4で割ることになる。</p>
    <p>A＞＞B→元の数＞＞割る回数</p>
    <?php
      $kake10 = 1 << 1;
      echo $kake10; echo "<br>";
      $waru10 = 100 >> 1;
      echo $waru10; echo "<br>";
     ?>
     <p>a&b = 各桁同士を比較し、両方が1ならば1、そうでなければ0(ビット積)</p>
     <p>a|b = 各桁同士を比較し、どちらかが1ならば1、そうでなければ0(ビット和)</p>
     <p>a^b = 各桁同士を比較し、片方だけが1ならば1、そうでなければ0(排他的ビット和)</p>
     <p>a~b = 各桁の1と0を逆転させる。(ビット否定)</p>
  </div>
  <div class="main-contents">
    <h3>キャスト演算子</h3>
    <p>キャスト演算子で、変数の「データ型」を好きなように特定することができる。</p>
    <p>ただし、元の値を変換するのではなく、値の評価を特定の形にするだけ。</p>
    <p>「(bool)$変数名」といった使い方に。ちなみに、</p>
    <p>↑の演算子なら真偽値に変わる。</p>
    <?php
      $theDate = new DateTime();
      $isAccess = (bool)$theDate;
      var_dump($isAccess);
     ?>
     <p>日付を表示するコマンドであるDateTimeが、真偽値に変更になった。</p>
      <p></p>
      <p>他にはこんなキャスト演算子がある。</p>
      <p></p>
      <p>(int)$変数名: 整数にする。(integer)$変数名と同じ。</p>
      <p>(bool)$変数名: 論理値にする。(boolean)$変数名と同じ。</p>
      <p>(float)$変数名: 浮動小数点にする。(double)$変数名,(real)$変数名と同じ。</p>
      <p>(array)$変数名: 配列にする。</p>
      <p>(object)$変数名: オブジェクトにする。</p>
      <p>(unset)$変数名: NULLにする。</p>
  </div>
  <div class="main-contents">
    <h3>型演算子</h3>
    <p>$変数名 instanceof データ型</p>
    <p>上の式で、「変数内の数値がそのデータ型であるかどうか」</p>
    <p>を調べることができる。</p>
    <?php
      $now = new DateTime();
      $isDate = $now instanceof Datetime;
      var_dump($isDate);
     ?>
  </div>

</body>
</html>
