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
  <div class="">
    <?php
    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo 'メッセージが登録されました';

    // $limit = 5;
    // $statement->bindParam(1, $_POST['memo']);
    // $statement->execute();

    // $statement= $db->prepare('SELECT * FROM memos LIMIT ?');
    // $limit = 5;
    // $statement->bindParam(1, $limit, PDO::PARAM_INT);
    // $statement->execute();

    ?>
  </div>
   <a href="indux.php">戻る</a>
</body>
</html>
