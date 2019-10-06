<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>chap1-6</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="">
</head>
<body>
  <div class="container">
    <pre>
      $name1 = "akai";
      $name2 = "itou";
      $name3 = "ueno";
      $name4 = "edou";
      $name5 = "ono";
    </pre>
    <?php
      $name1 = "akai";
      $name2 = "itou";
      $name3 = "ueno";
      $name4 = "edou";
      $name5 = "ono";
     ?>
     <p>配列を使ってチームわけ</p>
     <pre>

     </pre>
     <?php
      $team1 = ["akai","itou","ueno"];
      $team2 = ["edou","ono"];
      // echo $team1,"\n";
      // echo $team2,"\n";
      // ↑文字列への変換ができなかったのでエラー
      echo $team1[0]," = san <br>";
      echo $team2[0]," = san <br>";
      ?>
      <p>配列の値を一つづつ取り出したい場合は以下のようにfor文を使う</p>
      <p>ちなみに、配列の値の数は「count()」演算子で数えられる</p>
      <pre>
        $team3 = ["aota","oui","shimokita"];
        for($i = 0; $i<=count($team3); $i++){
          echo $team3[$i], " = san<br>";
        }
      </pre>
      <?php
      $team3 = ["aota","oui","shimokita"];
      for($i = 0; $i<count($team3); $i++){
        echo $team3[$i], " = san<br>";
      }
       ?>

  </div><!--  .container -->
</body>
</html>
