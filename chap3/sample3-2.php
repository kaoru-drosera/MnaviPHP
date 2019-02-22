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
<h2>画面に文章を表示する</h2>
<pre>
  <?php
    print((123 + 2) * 5/3);
    echo "<br>";// print("\n");はブラウザで表示させることはできんようです…ぐぎぎ
    echo "→計算式を入力すると、そのまま値が出力される。";
    echo "<br>";
    print("123+2*5/3");
    echo "<br>";
    echo "→このように、「””」で計算式を囲った場合には計算式が出力される。"
   ?>
</pre>
<p>
  <?php
    print((123 + 2) * 5/3);
    echo "<br>";// print("\n");はブラウザで表示させることはできんようです…ぐぎぎ
    echo "→計算式を入力すると、そのまま値が出力される。";
    echo "<br>";
    print("123+2*5/3");
    echo "<br>";
    echo "→このように、「””」で計算式を囲った場合には計算式が出力される。"
   ?>
</p>
<p>X</p>
<a href="<?php print('http://h2o-space.com'); ?>">タグの属性にPHPを埋め込みました</a>
<p>(うぉあ。ちゃんと繋がるんでびっくりした)</p>
<!-- forwin:http://localhost/MnavPHP/MY_list/chap2/sample00.php -->
<!-- formac:http://localhost:8888/mynavPHP/MnaviPHP/chap3/sample01.php -->
</main>
</body>
</html>
