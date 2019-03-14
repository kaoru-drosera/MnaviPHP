<?php // require('5-6dbconnect(forMac).php'); ?>
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
  <h2>フォームからの情報を保存する</h2>
  <h3>SELECT SQLを実行するには？</h3>
  <h2>Practice</h2>
  <?php
    if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      // このif文で、idにデータのあるページのみを表示できるようにする。
      // 意味は「$_REQUEST['id']にデータがあり、かつ数字であること」

      $memos = $db->prepare('DELETE FROM memos WHERE id=?');
      $memos->execute(array($id));
      // //$memo = $memos->fetch();
      // この一連の流れでデータベースからメモの内容を抜きだす。
      // あくまで持っていくためのものなので
      // 「消す」だけが目的のこのファイルにこれはいらない。
      // 2行目のarray(5) はidのこと。
      // これを設定することで、
      // http://localhost/MnavPHP/MnaviPHP/chap5/memo/5-8/5-8update.php?id=3
      // といった形でデータを受け取れるようになる。
    }

   ?>
   <p>データの消去が完了しました。</p>
   <p>…うん。プログラム自体は動いてる。</p>
   <p>けど、…作って本当に覚えられるんだろうか…？</p>
   <p><a href="5-8index.php">戻る</a></p>
</body>
</html>
