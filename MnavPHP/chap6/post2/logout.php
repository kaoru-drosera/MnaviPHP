<?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
require('dbconnect2.php');
session_start();

function h($value){
  return htmlspecialchars($value,ENT_QUOTES);
}

// セッション情報を削除
$_SESSION = array();
if(ini_get("session.use_cookies")){
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time - 42000, $params["path"],$params["domain"],$params["secure"],$params["httponly"]);
}
session_destroy();

// 次はcookie情報を削除
setcookie('email','',time()-3600);
setcookie('password','',time()-3600);

header('Location: login.php'); exit();


// 「ログアウト」は、「セッションを破棄する」「ログイン情報を記録しているcookieを削除する」
// この２つの作業になる。

 ?>
