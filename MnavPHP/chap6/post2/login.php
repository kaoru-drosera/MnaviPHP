<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  require('dbconnect2.php');
  session_start();

  function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
  }

  if($_COOKIE['email'] != ''){
    // 「$_COOKIE」でフォームに来た入力＝ログイン情報を保存する。
    $_POST['email'] = $_COOKIE['email'];
    $_POST['password'] = $_COOKIE['password'];
    $_POST['save'] = 'on';
  }

  if(!empty($_POST)){
    // ↑ログインボタンがクリックされているかどうか。

    // ログイン情報の記録
    if($_POST['email'] != '' && $_POST['password'] != ''){
      // emailとパスワード、両方とも「記入があるかどうか」を確認する。
      // 「記入があるかどうか」=「空白でないかどうか」

        $login = $db->prepare('SELECT * FROM members WHERE email=? AND password=?');
        $login->execute(array(
          $_POST['email'],
          sha1($_POST['password'])
        ));
        $member = $login->fetch();
        // 記入できていた場合、データベースからメールアドレスとパスワードを検索する。
        // また、パスワードはあらかじめsha1で暗号化しておくこと。

        if($member){
          // ログイン成功
          $_SESSION['id'] = $member['id'];
          $_SESSION['time'] = time();
          header('Location: index.php'); exit();

          // ログイン情報を記録する
          if($_POST['save'] == 'on')
          // saveがonの場合、記録を保存する。
          setcookie('email',$_POST['email'],time()+60*60*24*24);
          setcookie('password',$_POST['password'],time()+60*60*24*24);
          // 60*60*24*24＝24日。
          // setcookie(クッキー名,保存したい項目の値,保存期間(time()+秒*分*時間*日数));

        } else {
          // 失敗
          $error['login'] = 'failed';
        }
      } else {
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
      <h1>ログインする</h1>
    </div><!-- #head  -->
    <div id="content">
      <div id="lead">
        <p>メールアドレスとパスワードを入力してログインしてください。</p>
        <p>入会手続きがまだの方はこちらからどうぞ。</p>
        <p>&raquo<a href="join/">入会手続きをする</a></p>
        <form action="" method="post">
          <dl>
            <dt>メールアドレス</dt>
            <dd>
              <input type="text" name="email" size="35" maxlength="255" value="<?php echo h($_POST['email']); ?>">
            </dd>
            <dt>パスワード</dt>
            <dd>
              <input type="password" name="password" size="35" maxlength="255" value="<?php echo h($_POST['password']); ?>">
              <?php if($error['login'] == 'blank'): ?>
                <p class="error">メールアドレス、パスワードをを入れてください。</p><!--  .error -->
              <?php endif; ?>
              <?php if($error['login'] == 'failed'): ?>
                <p class="error">ログインに失敗しました。メールアドレスまたはパスワードをご確認ください。</p><!--  .error -->
              <?php endif; ?>

            </dd>
            <dt>ログイン情報の記録</dt>
            <dd>
              <input id="save" type="checkbox" name="save" maxlength="" value="<?php echo h($_POST['password']); ?>"><label for="save">次回からは自動的にログインする</label></dd>
          </dl>
          <div><input type="submit" value="ログインする"></div>
        </form>
      </div><!-- #lead  -->
    </div><!-- #content  -->
  </div><!-- #wrap  -->
</body>
</html>
