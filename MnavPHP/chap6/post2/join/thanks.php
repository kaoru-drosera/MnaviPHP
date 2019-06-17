<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  require('../dbconnect2.php');
  session_start();

  function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
  }

 ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>今更２周目掲示板</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <p>登録が完了しました</p>
  <p><a href="../">ログインする</a></p>
</form>
</body>
</html>
