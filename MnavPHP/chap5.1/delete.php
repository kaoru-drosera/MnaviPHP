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
     <h3>削除しました</h3>
     <?php
      if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
        $id = $_REQUEST['id'];

        $memos = $db->prepare('DELETE FROM memos WHERE id=?');
        $memos->execute(array($id));
      }

      ?>
      <pre>
        <p>メモを削除しました</p>
        <p><a href="indux.php">戻る</a></p>
      </pre>
   </main>

</body>
</html>
