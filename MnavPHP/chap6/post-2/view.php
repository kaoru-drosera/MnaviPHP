<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require('dbconnect.php');

if(empty($_REQUEST['id'])){
  header('Locaion: index.php');
}

// 投稿を取得する
$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=? ORDER BY p.created DESC');
$posts->execute(array($_REQUEST['id']));
// htmlspecialcharsのショートカット
function h($value){
  return htmlspecialchars($value,ENT_QUOTES);
}
// 正規表現を使って、本文中のURLにリンクを設定させる
function makeLink($value){
  return mb_ereg_replace("(https?)(://[[:alnum:]\+\$\;\?\.%,!#~*/:@&=_-]+)",'<a href="\1\2" target="_blank">\1\2</a>',$value);
  // ↑これまんま漫画に出てくる「わけのわからないセリフ」の表現に見えたぞ
  // ＝全然わからん
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
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="wrap">
    <div id="head">
      <h1>ひとこと掲示板</h1>
    </div><!-- #head  -->
    <div id="content">
      <p>&laquo;<a href="index.php">一覧に戻る</a></p>
      <?php if($post = $posts->fetch()): ?>
        <div class="msg">
          <img src="member_picture/<?php echo h($post['picture']) ?>" alt="<?php echo h($post['name']) ?>" width="48" height="48">
          <p><?php echo makeLink(h($post['message'])) ?><span>  (<?php echo h($post['name']) ?></span>)</p>
          <p class="day"><?php echo h($post['created']) ?></p><!--  .day -->
        </div><!--  .msg -->
      <?php else: ?>
        <p>その投稿は削除されたか、URLが間違っています。</p>
      <?php endif; ?>
    </div><!-- #content  -->
  </div><!-- #wrap  -->
</body>
</html>
