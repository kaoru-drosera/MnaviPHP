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
  <title>定数</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main-contents">
    <?php
    $total = 80 + 80;
    $results = $total - 5;
    echo "合計{$total}、最終結果{$results}".PHP_EOL;
     ?>
  </div>
  <div class="main-contents">
    <?php
    $kingaku = 5470;
    $amari = $kingaku % 4;
    $hitori = ($kingaku - $amari)/4;
    echo "一人{$hitori}円、{$amari}円不足".PHP_EOL;
    echo "もういいや","<br>";
     ?>
  </div>
  <div class="main-contents">
    <h3>文字列内の文字を計算できる</h3>
    <p>PHPでは、文字列内の文字の値を計算できるぞ。</p>
    <?php
      $ninzu = "2人" + "3人";
      $price = "500円" + $ninzu;
      $price = $price * "1.08 消費税";
      echo "料金{$price}円、{$ninzu}人","<br>";
      echo "200円"+"500円","<br>";
      echo "200円"+"500円"*"1.2 送料 ","<br>";
      echo "<br>";
      $a = 0;
      $b = ++$a;
      echo "\$aは{$a}、\$bは{$b}","<br>";

     ?>
     <p>phpで$マークを表示するには、\$と入力すること。</p>
      <?php
        $myNum = "19";
        $myChar = "a";
        ++$myNum;
        ++$myChar;
        echo "\$myNUmは{$myNum}、\$myCharは{$myChar}","<br>";

       ?>
        <p>変数名に数字やアルファベットを入れた場合、</p>
        <p>「++$変数名」と入力すると</p>
        <p>一つ後の数値が入るぞ。</p>

  </div>
</body>
</html>
