<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL & ~E_NOTICE);
  require('../dbconnect2.php');
  session_start();

  function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
  }

  if(!empty($_POST)){
    if($_POST['name'] == ''){
      $error['name'] = 'blank';
      // ↑ニックネームが空白でないかどうか
    }
    if($_POST['email'] == ''){
      $error['email'] = 'blank';
      // ↑emailがくうはくでないかどうか
    }
    if(strlen($_POST['password']) < 4){
      $error['password'] = 'length';
      // ↑passwordが4字以下でないか
    }
    if($_POST['password'] == ''){
      $error['password'] = 'blank';
      // ↑passwordが空白でないかどうか
    }

    $fileName = $_FILES['image']['name'];
    // 「name」は画像とアカウントを結びつけるため？
    if(!empty($fileName)){
      // 画像の拡張子が「.jpg」か「.gif」であるかどうか
      $ext = substr($fileName, -3);
      // 「-3」で「後ろの3文字を切り取る」。
      if($ext != 'jpg' && $ext != 'gif'){
        $error['image'] = 'type';
      }
    }

    // 重複アカウントのチェック
    if(empty($error)){
      $member = $db->prepare('SELECT COUNT(*) AS cnt FROM members WHERE email=?');
      $member->execute(array($_POST['email']));
      $record = $member->fetch();
      if($record['cnt'] > 0){
        $error['email'] = 'duplicate';
      }
      // 同じメールアドレスが2つある場合重複になる
    }


    if(empty($error)){
      // ↑画像をアップロードする
      $image = date('YmdHis').$_FILES['image']['name'];
      // 日付を指定したのは、重複を防ぐため。細かい時刻を定めることで、ほぼ完全に重複しなくなる。
      move_uploaded_file($_FILES['image']['tmp_name'],'../member_picture/'.$image);

      // move_uploaded_file(コピー元,'コピー先);
      // 画像をアップロードする　ここまで

      $_SESSION['join'] = $_POST;
      $_SESSION['join']['image'] = $image;
      // ↑配列「join」のうち「image」。
      header('Location: check.php');
      exit();
    }
  }

  // 書き直し
  if($_REQUEST['action'] == 'rewrite'){
    $_POST = $_SESSION['join'];
    $error['rewrite'] = true;
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
  <div id="wrap">
    <div id="head">
      <h1>会員登録</h1>
    </div><!-- #title  -->
    <div id="content">
      <p>次のフォームに必要事項をご記入ください。</p>
      <form action="" method="post" enctype="multipart/form-data">
        <dl>
          <dt>ニックネーム<span class="required">必須</span></dt>
          <dd>
            <input type="text" name="name" size="35" maxlength="255" value="<?php echo h($_POST['name']) ?>"/>
            <?php if($error['name'] == 'blank'): ?>
              <p class="error">* ニックネームを入力してください</p><!--  .error -->
            <?php endif; ?>
          </dd>
          <dt>メールアドレス<span class="required">必須</span></dt>
          <dd>
            <input type="text" name="email" size="35" maxlength="255" value="<?php echo h($_POST['email']); ?>"/>
            <?php if($error['email'] == 'blank'): ?>
              <p class="error">* メールアドレスを入力してください</p><!--  .error -->
            <?php endif; ?>
            <?php if($error['email'] == 'duplicate'): ?>
              <p class="error">* 指定されたメールアドレスは既に登録されています</p><!--  .error -->
            <?php endif; ?>

          </dd>
          <dt>パスワード<span class="required">必須</span></dt>
          <dd>
            <input type="password" name="password" size="35" maxlength="255" value="<?php echo h($_POST['password']); ?>"/>
            <?php if($error['password'] == 'blank'): ?>
              <p class="error">* パスワードを入力してください</p><!--  .error -->
            <?php endif; ?>
            <?php if($error['password'] == 'length'): ?>
              <p class="error">* パスワードは4字以上で入力してください</p><!--  .error -->
            <?php endif; ?>
          </dd>
          <dt>アイコン<span class="required">必須</span></dt>
          <dd>
            <input type="file" name="image" size="10" maxlength="20" value="<?php echo h($_POST['image']); ?>"/>
            <?php if($error['image'] == 'type'): ?>
              <p class="error">* 写真などは「.jpg」または「.gif」の画像を指定してください</p><!--  .error -->
            <?php endif; ?>
            <?php if(!empty($error)): ?>
              <p class="error">* 恐れ入りますが、画像を改めて指定してください</p><!--  .error -->
            <?php endif; ?>
          </dd>
          <div><input type="submit" value="入力内容を確認する"></div>
        </dl>
      </form>
    </div><!-- #content  -->
  </div><!-- #wrap  -->
</body>
</html>
