<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require('../../dbconnect.php');
if(!isset($_SESSION['join'])){
header('Location: index.php');
exit();
}
if(!empty($_POST)){
//登録処理
$statement = $db->prepare('INSERT INTO members SET name=?, email=?, password=?, picture=?, created=NOW()');
echo $ret = $statement->execute(array(
$_SESSION['join']['name'],
$_SESSION['join']['email'],
sha1($_SESSION['join']['password']),
$_SESSION['join']['image'],
));
unset($_SESSION['join']);
header('Location: thanks.php');
exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>やっと始まり第6章.php</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div id="wrap">
    <h1>確認画面</h1>
  </div>
  <div id="content">
    <form action="" method="post">
      <input type="hidden" name="action" value="submit"/>
      <p>次にフォームに必要事項をご入力ください。</p>
      <dl>
        <dt>ニックネーム</dt>
        <dd>
          <?php echo htmlspecialchars($_SESSION['join']['name'],ENT_QUOTES,'UTF-8'); ?>
        </dd>
        <dt>メールアドレス</dt>
        <dd>
          <?php echo htmlspecialchars($_SESSION['join']['email'],ENT_QUOTES,'UTF-8'); ?>
        </dd>
        <dt>パスワード</dt>
        <dd>【非表示】</dd>
        <dt>写真など</dt>
        <dd>
          <img src="../member_picture/<?php echo htmlspecialchars($_SESSION['join']['image'], ENT_QUOTES, 'UTF-8'); ?>" width="100" height="100" alt="" />
        </dd>
      </dl>
      <div><a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a>|<input type="submit" value="登録する"/></div>
    </form>
  </div>
</body>
</html>
