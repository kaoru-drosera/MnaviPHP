<?php require('5-6dbconnect(forMac).php'); ?>
 <?php // require('5-6dbconnect(forWin).php'); ?>

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

      $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
      $memos->execute(array($id));
      $memo = $memos->fetch();
      // この一連の流れでデータベースからメモの内容を抜きだす。
      // 2行目のarray(5) はidのこと。
      // これを設定することで、
      // http://localhost/MnavPHP/MnaviPHP/chap5/memo/5-8/5-8update.php?id=3
      // といった形でデータを受け取れるようになる。
    }

   ?>
  <form action="5-8update_do.php" method="post">
    <input type="hidden" name="id" value="<?php print($id); ?>">
    <textarea name="memo" id="" cols="50" rows="10"><?php print($memo['memo']); ?></textarea><br>
    <?php //↑idごとのメモの内容を表示する。 ?>
    <button type="submit">登録する</button>
  </form>
   <p>今時点までやってみたはいいけど、よくわかんねぇや。</p>
</body>
</html>
