<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require('dbconnect.php');

if (isset($_SESSION['id'])) {
	$id = $_REQUEST['id'];
	// 投稿を検査する
	$messages = $db->prepare('SELECT * FROM posts WHERE id=?');
	$messages->execute(array($id));
	$message = $messages->fetch();
	if ($message['member_id'] == $_SESSION['id']) {
		// 削除する
		$del = $db->prepare('DELETE FROM posts WHERE id=?');
		$del->execute(array($id));
	}
}
// header('Location: index.php'); exit();

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
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="wrap">
    <div id="head">
      <h1>ひとこと掲示板</h1>
    </div><!-- #head  -->
    <div id="content">
      <p>メッセージを削除しました</p>
      <p>&laquo;<a href="index.php">一覧に戻る</a></p>
    </div><!-- #content  -->
  </div><!-- #wrap  -->
</body>
</html>
