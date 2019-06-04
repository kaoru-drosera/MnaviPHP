<?php
  require('re2-dbConnect.php');
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>いまさら復習PHP-3</title>
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
    $id = $_REQUEST['id'];
    $counts = $db->query('SELECT COUNT(*) AS num FROM memos');
    $count = $counts->fetch();
    $max_memo = floor($count['num']) + 1;
    // 「データベース上にないページIDを選択した時に
    // エラーを吐く機能」を追加した！
    // わーい！ほめてほめてほめてー！


    $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
    $memos->execute(array($id));
    $memo = $memos->fetch();
    // print($max_memo);

    if(!is_numeric($id) || $id <= 0 || $id >= $max_memo){
      print('データベース上にIDとして存在する１以上の数字を指定してください');
      exit();
    }


   ?>
   <article>
     <pre><?php print($memo['memo']); ?></pre>
     <p><a href="index.php">戻る</a></p>

   </article>
</body>
</html>
