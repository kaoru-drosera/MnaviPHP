<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL & ~E_NOTICE);
  require('dbconnect.php');
  session_start();
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="icon" href="">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="lead">
    <p>メールアドレスとパスワードを記入してログインしてください。</p>
    <p>入会手続きがまだの方はこちらからどうぞ。</p>
    <p>&raquo;<a href="join">入会手続きをする</a></p>
  </div>
  <form action="" method="post">
    <dl>
      <dt>メールアドレス</dt>
      <dd><input type="text" id="" name="email" size="35" maxlangth="255" value=""></dd>
      <dt>パスワード</dt>
      <dd><input type="password" id="" name="password" size="35" maxlangth="255" value=""></dd>
      <dt>ログイン情報の記録</dt>
      <dd><input type="checkbox" id="save" name="save" size="" maxlangth="" value="on"><label for="#save">次回からは自動でログインする</label></dd>
    </dl>
    <div><input type="submit" value="ログインする"></div>
  </form>
</body>
</html>
