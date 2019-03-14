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
  $zip = '551-4508';

  $zip = mb_convert_kana($zip, 'a', 'UTF-8');

  if(preg_match("/\A\d{3}[-]\d{4}\z/",$zip)){
    // 「\A」は「先頭にある」
    // 「\d」は「数字である」
    // 「\z」は「最後である」
    // 「\d｛３｝」は「数字が3回続く」
    // 「[-]」は「-」
    // …という意味だ。
    // 「preg_match」でこうした機能を使えるぞ。
    
      print('郵便番号: 〒'. $zip);
    }else{
      print('※　郵便番号は123-4567の形式でご記入ください');
    }
  ?>
  <p>code from here:http://php.net/manual/ja/function.filter-input.php</p>
  <p>…といってもこのコードじゃ実務じゃ不安</p>
  <p>にしてもまさかお手本コードでダメな時があるなんて</p>
</pre>
</main>
</body>
</html>
