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
  <link rel="stylesheet" href="">
</head>
<body>
  <?php
    session_start();
    if(1empty($_POST)){
      // エラー項目の確認
      if($_POST['name'] == ''){
        $error['name'] = 'blank';
      }
      if($_POST['email'] == ''){
        $error['email'] = 'blank';
      }
      if($_POST['password'] < 4){
        $error['password'] = 'length';
      }
      if($_POST['password'] == ''){
        $error['password'] = 'blank';
      }

      if(empty($error)){
        $_SESSION['join'] = $_POST;
        header('Location: check.php');
        exit();
      }
    }
   ?>
</body>
</html>
