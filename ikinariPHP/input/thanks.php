<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP基礎</title>
</head>
<body>

<?php

  // データベースに接続する

  $dsn='mysql:dbname=phpkiso;host=localhost;charset=utf8';
  $user='root';
  $password='root';
  $dbh=new PDO($dsn, $user, $password);

  ini_set('error_reporting', E_ALL);

  $postNN = $_POST['nickname'];
  $postEMAIL = $_POST['email'];
  $postCOMMENT = $_POST['comment'];

  $postNN = htmlspecialchars($postNN);
  $postEMAIL = htmlspecialchars($postEMAIL);
  $postCOMMENT = htmlspecialchars($postCOMMENT);

  echo $postNN;
  echo 'さん'.'<br>';
  echo 'ご意見ありがとうございました！';
  echo '<br>';
  echo '頂いたご意見『';
  echo $postCOMMENT;
  echo '』';
  echo '<br>';
  echo $postEMAIL.'にメールをお送りしたのでご確認ください。';

  $mail_sub = 'アンケートを受け付けました。';
  $mail_body = $postNN."様へ/nアンケートご協力ありがとうございました。";
  $mail_body = html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
  $mail_head = 'From: xxx@xxx.co.jp';
  mb_language('Japanese');
  mb_internal_encoding("UTF-8");
  mb_send_mail($postCOMMENT,$mail_sub,$mail_body,$mail_head);

  $sql='INSERT INTO anketo(nickname,email,comment) VALUES("'.$postNN.'","'.$postEMAIL.'","'.$postCOMMENT.'")';
  $stmt=$dbh->prepare($sql);
  $stmt->execute();

  $dbh=null;

 ?>

</body>
</html>

<!-- URL:http://localhost:8888/ikinariPHP/input/check_2.php -->
