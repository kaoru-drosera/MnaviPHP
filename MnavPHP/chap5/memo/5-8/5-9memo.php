<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
 ?>
<?php  //require('5-6dbconnect(forMac).php'); ?>
 <?php require('5-6dbconnect(forWin).php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/MnavPHP/MnaviPHP/css/bootstrap.min.css">
  <link rel="stylesheet" href="/MnavPHP/MnaviPHP/css/style.css">
  <title>よくわかるPHP 第5章</title>
</head>
<body>
  <h2>データの一覧を作る…のか？</h2>
  <h2>Practice</h2>
    <?php

         $id = $_REQUEST['id'];
         if(!is_numeric($id) || $id <= 0){
           print('URLのidには1以上の数字を指定してください');
           exit();
         }

      $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
      $memos->execute(array($_GET['id']));
      // $memos->execute(array($_REQUEST['id']));
      $memo = $memos->fetch();


     ?>
   <article>
       <pre><?php print($memo['memo']); ?></pre>

     <a href="5-8update.php?id=<?php print($memo['id']); ?>">編集する</a>
     |
     <a href="5-9delete.php?id=<?php print($memo['id']); ?>">削除する</a>
     |
     <a href="5-8index.php">戻る</a>
   </article>
</body>
</html>
