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
  <pre>
  <?php
      // *forWIN
    try{
      $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', '');
    } catch (PDOException $e) {
      echo 'DB接続エラー:' . $e->getMessage();
    }

    //   *forMAC
    // try{
    //   $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', 'root');
    // } catch (PDOException $e) {
    //   echo 'DB接続エラー:' . $e->getMessage();
    // }


   ?>
 </pre>
</body>
</html>
