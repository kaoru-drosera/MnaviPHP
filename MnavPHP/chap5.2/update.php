<?php
  require('re2-dbConnect.php');
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
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>
<body>
  <?php
    if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $counts = $db->query('SELECT COUNT(*) AS num FROM memos');
      $count = $counts->fetch();
      $max_memo = floor($count['num']) + 1;
      if(!is_numeric($id) || $id <= 0 || $id >= $max_memo){
        print('データベース上にIDとして存在する１以上の数字を指定してください');
        exit();
      }

      $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
      $memos->execute(array($id));
      $memo = $memos->fetch();
    }

   ?>
  <form action="update_do.php" method="post">
    <input type="hidden" name="id" value="<?php print($id); ?>">
    <?php if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])): ?>
    <textarea name="memo" id="" cols="50" rows="10"><?php print($memo['memo']) ?></textarea>
    <?php endif; ?>
    <div><button type="submit">登録する</button></div>
  </form>
</body>
</html>
