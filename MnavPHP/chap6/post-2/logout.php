<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require('dbconnect.php');

// セッション情報を削除
$_SESSION = array();
if(ini_get("session.use_cookies")){
  $params = session_get_cookie_params();
  setcookie(session_name(),'',time() - 42000,
    $params["path"],$params["domain"],$params["secure"],$params["httponly"]
  );
}
session_destroy();

// cookie情報を削除
setcookie('email','',time() - 3600);
setcookie('password','',time() - 3600);

// header('Location: login.php'); exit();


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
         <p>ログアウトしました。</p>
         <p>またのご利用お待ちしております。</p>
       <?php endif; ?>
     </div><!-- #content  -->
   </div><!-- #wrap  -->
 </body>
 </html>
