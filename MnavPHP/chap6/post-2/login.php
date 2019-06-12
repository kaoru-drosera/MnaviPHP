<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL & ~E_NOTICE);
  require('dbconnect.php');
  session_start();

  if($_COOKIE['email'] != ''){
    $_POST['email'] = $_COOKIE['email'];
    $_POST['password'] = $_COOKIE['password'];
    $_POST['save'] = 'on';
  }

  if(!empty($_POST)){
    // ログインの処理
    if($_POST['email'] != '' && $_POST['password'] != ''){
      $login = $db->prepare('SELECT * FROM members WHERE email=? AND password=?');
      $login->execute(array(
        $_POST['email'],
        sha1($_POST['password'])
      ));
      $member = $login->fetch();

      if($member){
        // ログイン成功
        $_SESSION['id'] = $member['id'];
        $_SESSION['time'] = time();
        header('Location: index.php');
        exit();

        // ログイン情報を記録する
        if($_POST['save'] == 'on'){
          setcookie('email',$_POST['email'],time()+60*60*24*14);
          setcookie('password',$_POST['password'],time()+60*60*24*14);
        }
      } else {
        $error['login'] = 'failed';
      }
    } else{
      $error['login'] = 'blank';
    }
  }
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="icon" href="">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="lead">
    <p>メールアドレスとパスワードを記入してログインしてください。</p>
    <p>入会手続きがまだの方はこちらからどうぞ。</p>
    <p>&raquo;<a href="join">入会手続きをする</a></p>
  </div>
  <form action="" method="post">
    <dl>
      <dt>メールアドレス</dt>
      <dd>
        <input type="text" id="" name="email" size="35" maxlangth="255" value="<?php echo htmlspecialchars($_POST['email'],ENT_QUOTES); ?>">
        <?php if($error['login'] == 'blank'): ?>
          <p class="error">*　メールアドレスとパスワードを入力してください</p><!--  .error -->
        <?php endif; ?>
        <?php if($error['login'] == 'failed'): ?>
          <p class="error">*　ログインに失敗しました。メールアドレス又はパスワードをご確認ください。</p><!--  .error -->
        <?php endif; ?>
      </dd>
      <dt>パスワード</dt>
      <dd>
        <input type="password" id="" name="password" size="35" maxlangth="255" value="<?php echo htmlspecialchars($_POST['password'],ENT_QUOTES); ?>">
      </dd>
      <dt>ログイン情報の記録</dt>
      <dd><input type="checkbox" id="save" name="save" size="" maxlangth="" value="on"><label for="save">次回からは自動でログインする</label></dd>
    </dl>
    <div><input type="submit" value="ログインする"></div>
  </form>
</body>
</html>
