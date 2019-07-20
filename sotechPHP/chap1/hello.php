<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>hello</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <p>
    <?php
    echo "こんにちは";
    ?>
  </p>
  <p>
    <?php
    $who = "php7";
    // echo "こんにちは、" + $who;
    // ↑　A non-numeric value encountered
    echo "こんにちは",$who;
    ?>
  </p>
  <p>
  <?= "こんにちは" ?>
  </p>
  <p>"＜？＝　？＞"という打ち方で</p>
  <p>＜PHP？ echo 文字列　？＞"という打ち方を省略できる！</p>
  <div class="main-contents">

    <?php
    $year1 = "1964年";
    $year2 = "2020年";
    ?>
    <p>前回の東京オリンピックは、<?= $year1 ?>です。</p>
    <p>今回の東京オリンピックは、<?= $year2 ?>です。</p>

    <?php
    $myColor = "green";
    $myCOLOR = "YELLOW";
     ?>
    <p>
    <?php echo $myColor; ECHO "<br>"; echo $myCOLOR; ?>
    </p>

    <p>
      <?php
      $zaiko = "在庫なし";
      echo $zaiko;
      echo "<br>";
      $zaiko = 5;
      echo $zaiko;
      ?>
    </p>

  </div><!--  .main-contents -->
</body>
</html>
