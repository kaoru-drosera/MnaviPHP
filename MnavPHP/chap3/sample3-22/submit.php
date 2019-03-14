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
<h2>別ページへジャンプする</h2>
<h3>headerファンクション</h3>
<pre>
  <!-- エラーパターン① -->
  <p>H20 Space. のサイトに移動します</p>
  <!-- <?php
    // header('Location: https://h2o-space.com');
  ?> -->
  <!-- 「ヘッダがすでに転送されてしまったので、ヘッダを変えられなかったヨ」
  というエラーが出る。
  webページが、内容を送信する直前にヘッダ情報を送信する仕組みなため。
  そのため、「内容が送信された後じゃ遅い」というエラーになる。 -->
  <!-- …ここまで。でもなぜかできちゃった… -->

  <!-- エラーパターン② -->
   <?php
    header('Location: https://h2o-space.com');
   ?>
   <!-- 「<?php ?>」の先頭に、半角スペースが入っている状態。
   header関数を使用する前には、「余計なモノを入れない」
   事を徹底すること。 -->
</pre>
</main>
</body>
</html>
