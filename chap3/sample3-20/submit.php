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
<h2>ラジオボタンの値を取得する</h2>
<pre>
  <?php
  $age = 'あいうえお';

  $age = mb_convert_kana($age, 'n', 'UTF-8');
  if(is_numeric($age)){
    print($age. '歳');
  }else{
    print('※　年齢には数字を入力してください。');
  }
  // 「is_numeric」は、調べたい関数を指定して、falseとtrue（ブール値という）
  // で得ることが出来る。

  // 「mb_convert_kana」は、「全角数字を半角数字にする（あるいは逆）」
  // をできるようになる。
  // 上のコードの場合、2番目のパラメータを「n」が
  // 「全角数字を半角数字にする」という意味になっている。
  // 以下も参照のこと。
  // http://php.net/manual/ja/function.mb-mb_convert_kana.php
  ?>
  <p>code from here:http://php.net/manual/ja/function.filter-input.php</p>
  <p>…といってもこのコードじゃ実務じゃ不安</p>
  <p>にしてもまさかお手本コードでダメな時があるなんて</p>
</pre>
</main>
</body>
</html>
