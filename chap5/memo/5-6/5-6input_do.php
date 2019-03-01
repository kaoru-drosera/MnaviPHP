<?php// require('5-6dbconnect(forMac).php') ?>
<?php require('5-6dbconnect(forWin).php') ?>
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
  <h3>SELECT SQLを実行するにはぅ？</h3>
  <h2>Practice</h2>
  <pre>
  <?php
  $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
  $statement->execute(array($_POST['memo']));
  echo "メッセージが登録されました";
   ?>
 </pre>
  <a href="5-6index.php">戻る</a>
</body>
</html>
