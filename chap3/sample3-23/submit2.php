<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>一行ごとにテーブルセルの色を変える</h2>
  <table>
    <p>曜日を繰り返し入力する:</p>
    <p>submit1でやった「一行ごとにテーブルセルの色を変える」を応用して、</p>
    <p>こんなこともできる。</p>
    <?php
      $week = array('金','土','日','月','火','水','木');
      for($i=1; $i<=31; $i++){
        print($i . '日(' . $week[$i%7] .')<br />');
      }

     ?>
     <p>このコードで、「曜日を繰り返し表示する」事が可能に。</p>
     <p>…といっても、まだイマイチしっくり来てない。</p>
  </table>
</main>
</body>
</html>
