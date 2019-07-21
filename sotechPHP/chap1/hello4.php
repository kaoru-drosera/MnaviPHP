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
    <p>複数の値を出力するには、「echo "文字列","文字列",変数…」</p>
    <?php
    $thord = 40;
    echo "威力",$thord,"の","ソード";
    echo "<br>";
    ?>
    <p>または、「print(変数."文字列…")」。</p>
    <?php
    $shotGun = 20;
    $wep = "ショットガン";
    print("威力".$shotGun."の".$wep);
    echo "<br>";
     ?>
  </div><!--  .main-contents -->
  <div class="main-contents">
    <p>「print_r(配列名)」で、配列の値を順番に抜き出してくれるぞ。</p>
    <?php
    $colors = array("red","blue","yell","green");
    $now = new DateTime();
    print_r($colors);
    print("<br>");
    print_r($now);

     ?>
     <pre>
       <?php
       $colors = array("red","blue","yell","green");
       $now = new DateTime();
       print_r($colors);
       print("<br>");
       print_r($now);

        ?>
     </pre>
     <p>『＜pre＞＜/pre＞』で囲うことで、改行付きで表示できるぞ！</p>
  </div><!--  .main-contents -->
</body>
</html>
