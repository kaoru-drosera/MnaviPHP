<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

session_start();
require('../../dbconnect.php');

 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>やっと始まり第6章.php</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div id="wrap">
    <div id="head">
      <h1>登録完了</h1>
    </div><!-- #head  -->
    <div id="content">
      <p>ユーザー登録が完了しました</p>
      <p><a href="../login.php">ログインする</a></p>
      <p><a href="index.php">戻る</a></p>
    </div><!-- #content  -->
  </div><!-- #wrap  -->
</body>
</html>
