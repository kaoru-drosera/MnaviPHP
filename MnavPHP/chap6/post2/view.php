<?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
require('dbconnect2.php');
session_start();

function h($value){
  return htmlspecialchars($value,ENT_QUOTES);
}

// 投稿を取得する
$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=? ORDER BY p.created DESC');
$posts->execute(array($_REQUEST['id']));

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
   <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div id="wrap">
    <div id="head">
      <h1>ひとこと掲示板(笑)</h1>
    </div><!-- #head  -->
    <div id="content">
      <p>&laquo;<a href="index.php">一覧に戻る</a></p>
      <?php if($post = $posts->fetch()): ?>
        <img src="member_picture/<?php echo h($post['picture']) ?>" alt="<?php echo h($post['name']) ?>" width="100" height="100">
        <p><?php echo h($post['message']) ?><span class="name"><?php h($post['name']) ?></span></p>
        <p class="day"><?php echo h($post['created']) ?></p><!--  .day -->
      <?php else: ?>
        <p>その投稿は削除されたか、URLが間違っています。</p>
      <?php endif; ?>
    </div><!-- #content  -->
  </div><!-- #wrap  -->
 </body>
 </html>
