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
    $a = 7;
    $b = 10;
    $hantei1 = ($a<$b);
    $hantei2 = ($a>$b);
    var_dump($hantei1); echo "<br>";
    print("\$aが\$bより小さいか比較。"); echo "<br>";
    var_dump($hantei2); echo "<br>";
    print("\$aが\$bより大きいか比較。"); echo "<br>";
    echo "<br>";

    $hantei3 = ("99" == 99);
    $hantei4 = ("99" != 99);
    var_dump($hantei3); echo "<br>";
    print("99と99が同じかを判定。"); echo "<br>";
    var_dump($hantei4); echo "<br>";
    print("99と99が「同じでない」かを判定。"); echo "<br>";
    echo "<br>";

    $hantei5 = ("99" === 99);
    $hantei6 = ("99" !== 99);
    $hantei7 = ("99" === "99");
    var_dump($hantei5); echo "<br>";
    print("99と99が(データ型含め)同じかを判定。"); echo "<br>";
    var_dump($hantei6); echo "<br>";
    print("99と99が(データ型含め)「同じでない」かを判定。"); echo "<br>";
    var_dump($hantei7); echo "<br>";
    print("99と99が(こんどこそ)(データ型含め)同じかを判定。"); echo "<br>";
    echo "<br>";

    $price = 250 * ($kosu ?? 2);
    var_dump($kosu); echo "<br>";
    print($price); echo "<br>";
    print("「??」を使うことで、変数の値に何も入っていない時用の"); echo "<br>";
    print("「標準値」を設定することができる。"); echo "<br>";
    echo "<br>";



     ?>
  </div>
</body>
</html>
