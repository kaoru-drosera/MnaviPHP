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
   <main>
     <h2>practice</h2>
     <h3>更新完了…？</h3>
     <?php
     $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
     $statement->execute(array($_POST['memo'], $_POST['id']));
      ?>
      <p>メモの内容を変更しました</p>
      <p><a href="indux.php">戻る</a></p>
   </main>

</body>
</html>
