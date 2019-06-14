<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  require('../dbconnect2.php');
  session_start();

  if(!isset($_SESSION['join'])){
    header('Location: index.php');
    exit();
  }

  if(!empty($_POST)){
    // 登録処理をする
    $statement = $db->prepare('INSERT INTO members SET name=?, email=?, password=?, picture=?, created=NOW()');
    echo $ret = $statement->execute(array(
    $_SESSION['join']['name'],
    $_SESSION['join']['email'],
    sha1($_SESSION['join']['password']),
    $_SESSION['join']['image'],
    // エラーバスティング:
    // Uncaught PDOException: SQLSTATE[HY000]: General error: 1364 Field 'modified' doesn't have a default value

    // 「modified(更新日時)」を設定するときには、
    // dbで「属性」を「on update CURRENT_TIMESTAMP」に、
    // 「デフォルト値」を「CURRENT_TIMESTAMP」に変更する必要がある。
    ));
    unset($_SESSION['join']);
    header('Location: thanks.php');
    exit();
    }

  function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
  }

 ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>今更２周目掲示板</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="../style.css">
</head>
<body>

  <form action="" method="post">
    <input type="hidden" name="action" value="submit" />
    <dl>
      <dt>ニックネーム</dt>
      <dd>
        <?php echo h($_SESSION['join']['name']);?>
      </dd>
      <dt>メールアドレス</dt>
      <dd>
        <?php echo h($_SESSION['join']['email']);?>
      </dd>
      <dt>パスワード</dt>
      <dd>【表示されません】</dd>
      <dt>写真など</dt>
      <dd>
        <img src="../member_picture/<?php echo h($_SESSION['join']['image']) ?>" alt="" width="100" height="100">

      </dd>
      <div><a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a>|<input type="submit" value="登録する"></div>
    </dl>
  </form>
</form>
</body>
</html>
