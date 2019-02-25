<?php
  session_start();
  // 最初に「session_start();」を使って初期化する必要がある。
  // セッションを使うファイル（送るもの、受け取るもの両方）
  // がある場所には基本的にこのコードを書き込んでおく

  $_SESSION['session_message'] = '値をセッションに保存しました。';
  // PHPでセッションを作るには、「」という特殊な変数に保存する必要がある。

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
  <h2>セッションに値を保存する</h2>
  <p>「cookie」が「決められた期間内」だけ保存できるのに対し、</p>
  <p>「セッション」は「webブラウザを閉じるまで」という制限があるが安全に保存できる。</p>
  <p>逆に言えば「webブラウザを閉じない限りずっと保存できる」ので便利だ！</p>
  <pre>
      Cookieに値を保存しました。次ページに進んでみましょう。
      &radio; <a href="page02.php">Page02へ</a>
  </pre>
</body>
</html>
