<?php
  $value = '変数に保存した値です';
  setcookie('save_message','cookieに保存した値です', time() + 60 * 60 * 24 * 14);
  // 3番目のパラーメータは「保存期間」。ちなみに、上のコードでは「2週間」である。
  // 「60秒 * 60分(=1時間) * 24(=1日) * 14(=2週間)」


  // 本格的な使い方は以下の通り。
  // setcookie(クッキー名,値,保存期間,フォルダ,ドメイン,セキュア接続のみ,HTTPのみの接続);
  // 基本的には、3番麺のパラメータまでを設定すれば利用できる。
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>よくわかるPHPの教科書</title>
</head>
<body>
  <h2>Cookieに値を保存する</h2>
  <pre>
      Cookieに値を保存しました。次ページに進んでみましょう。
      &radio; <a href="page02.php">Page02へ</a>
  </pre>
</body>
</html>
