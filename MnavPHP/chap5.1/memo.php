<?php
  require('re-dbConnect_1.php');
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>いまさら復習PHP</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php

  $id = $_REQUEST['id'];
  if(!is_numeric($id) || $id <= 0){
    print('1以上の数字で指定してください');
    exit();
  }

  $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
  $memos->execute(array($_REQUEST['id']));
  $memo = $memos->fetch();

   ?>
   <article class="">
     <pre><?php print($memo['memo']); ?></pre>

     <a href="indux.php">戻る</a>
   </article>
</body>
</html>
