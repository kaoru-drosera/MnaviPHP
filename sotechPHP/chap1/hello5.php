<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>計算ちょっと</title>
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
      $who = "青縞";
      $hello = "hshs";
      $msg = $who."たん".$hello.PHP_EOL;
      echo $msg;
      echo "<br>";

      $num = 19 + 1;
      $msg1 = $num."番目".PHP_EOL;
      // ↑PHP_EOLは、「osに応じた改行を自動的に割り当てる定数」。
      // …だそうだが、効果がない。
      // $msg2 = $num.77;
      $msg2 = $num."77";
      echo $msg1;
      echo "<br>";
      echo $msg2;
      // msg2は「.77」といった感じで連結できないのでスキップ。
      // syntax error, unexpected '.77'
      // 77を""で囲うことでなんとかテキストのような結果にできた。
     ?>
  </div><!--  .main-contents -->
</body>
</html>
