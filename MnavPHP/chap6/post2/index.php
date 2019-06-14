<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  required('../dbconnect2.php');
  session_start();

  function h($value){
    return htmlspecialchars($value);
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
  <p>次のフォームに必要事項をご記入ください。</p>
  <form action="" method="post" enctype="multipart/form-data">
    <dl>
      <dt>ニックネーム<span class="required">必須</span></dt>
      <dd><input type="text" name="name" size="35" maxlength="255"/><?php  ?></dd>
      <dt>メールアドレス<span class="required">必須</span></dt>
      <dd><input type="text" name="email" size="35" maxlength="255"/><?php  ?></dd>
      <dt>パスワード<span class="required">必須</span></dt>
      <dd><input type="password" name="password" size="35" maxlength="255"/><?php  ?></dd>
      <dt>アイコン<span class="required">必須</span></dt>
      <dd><input type="file" name="image" size="10" maxlength="20"/><?php  ?></dd>
      <div><input type="submit" value="入力内容を確認する"></div>
    </dl>
  </form>
</body>
</html>
