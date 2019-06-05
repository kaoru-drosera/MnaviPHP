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
  <div>
    <?php
    $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
    $statement->execute(array($_POST['memo'], $_POST['id']));
    echo "メッセージを更新しました";
    ?>
  </div>
   <a href="index.php">戻る</a>
</body>
</html>
