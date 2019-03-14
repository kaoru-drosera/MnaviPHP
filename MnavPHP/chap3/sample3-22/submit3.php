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
  <!-- 正解パターン -->
  <?php
    header('Location: https://h2o-space.com/');
    exit();
    ?>
    <!-- headerファンクションの後に、「exit();」というコードを書く。
    「プログラムを停止させる」という意味があり、
    「それ以降のプログラムが実行されるのを防ぐ」役割があるのだ。 -->
    <!-- もちろんこれもできた。失敗って何だろう…？ -->
</pre>
</main>
</body>
</html>
