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
  <h2>フォームからの情報を保存するる！</h2>
  <h3>SELECT SQLを実行するには？</h3>
  <h2>Practice</h2>
  <pre>
  <?php
    $memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
   ?>
  <?php
    // *forWIN
    // try{
    //   $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', '');
    // } catch (PDOException $e) {
    //   echo 'DB接続エラー:' . $e->getMessage();
    // }
    //   *forMAC
    // try{
    //   $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', 'root');
    // } catch (PDOException $e) {
    //   echo 'DB接続エラー:' . $e->getMessage();
    // }
    // ↑「<!DOCTYPE html>」よりも上に置いておいたPHPコードが、
    // 以上のコードと同義である。
    // …でも、そのためにはこれの置き場所作っておかなきゃにぇ。

   ?>
 </pre>
</body>
</html>
