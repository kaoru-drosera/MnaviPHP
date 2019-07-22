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

    $test1 = TRUE;
    $test2 = FALSE;
    $hantei8 = ($test1 and $test2);
    $hantei9 = ($test1 or $test2);
    var_dump($hantei8); echo "<br>";
    var_dump($hantei9); echo "<br>";
    print("&& や || は、それぞれ or と and で代用できる。"); echo "<br>";
    print("ただし、必ず()でくくること。"); echo "<br>";
    echo "<br>";

    // 誤ったコード
    $test3 = TRUE;
    $test4 = FALSE;
    $hantei10 = $test3 and $test4;
    $hantei11 = $test3 or $test4;
    var_dump($hantei10); echo "<br>";
    var_dump($hantei11); echo "<br>";
    print("()でくくらない場合、andないしはorの範囲が適応されなくなり、"); echo "<br>";
    print("先頭だけが変数に入ることになる。"); echo "<br>";
    echo "<br>";

    $skullA = mt_rand(0,50); //0から50までの乱数を作るよ
    $skullB = mt_rand(0,50);
    if($skullA > $skullB){
      $bigger = $skullA;
    } else {
      $bigger = $skullB;
    }
    echo "大きな値は{$bigger}。\$skullAは{$skullA}、\$skullBは{$skullB}";  echo "<br>";

     ?>
  </div>
</body>
</html>
