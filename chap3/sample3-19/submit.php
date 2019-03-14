<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="../css/style.css"> -->

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>ラジオボタンの値を取得する</h2>
<pre>
  <p>ご予約日:</p>
  <?php
    if(isset($_POST['reserve'])){
    // 「isset()」は、「変数が入っているかどうか」を調べる関数だ。

    // ちなみに、「!isset()」なら「変数が空かどうか」という意味になる。
    // 「empty()」とも似ているが、これは「変数が『0』でも空として扱う」という特徴がある。
    // 「!isset()」なら「変数が『0』であっても「変数が入っている」」という意味になるぞ！

      foreach($_POST['reserve'] as $value){
        print(htmlspecialchars($value.ENT_QUOTES) . "<br>");
      }
    }
   ?>
  <p>…といってもこのコードじゃ実務じゃ不安</p>
  <p>にしてもまさかお手本コードでダメな時があるなんて</p>
</pre>
<p>ご予約日:</p>

</main>
</body>
</html>
