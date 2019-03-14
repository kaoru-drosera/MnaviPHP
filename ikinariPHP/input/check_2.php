<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP基礎</title>
</head>
<body>

<?php
  $postNN = $_POST['nickname'];
  $postEMAIL = $_POST['email'];
  $postCOMMENT = $_POST['comment'];

  $postNN = htmlspecialchars($postNN);
  $postEMAIL = htmlspecialchars($postEMAIL);
  $postCOMMENT = htmlspecialchars($postCOMMENT);

  if($postNN==''){
    echo 'ニックネームを入力してください';
    echo '<br>';
  }else{
    echo 'ログイン成功:"';
    echo $postNN;
    echo '"さんがログインしました:';
    echo '<br>';
  }

  if($postEMAIL==''){
    echo 'メールアドレスを入力してください';
    echo '<br>';
  }else{
    echo 'メールアドレス:';
    echo $postEMAIL;
    echo '<br>';
  }

  if($postCOMMENT==''){
    echo 'ご意見を入力してください';
    echo '<br>';
  }else{
    echo 'ご意見:';
    echo $postCOMMENT;
    echo '<br>';
  }

  if($postNN=='' || $postEMAIL=='' || $postCOMMENT=='' ){
    echo '<form>';
    echo '<input type="button" onclick="history.back()" value="戻る" style="width: 100px">';
    echo '</form>';
  }else{
    echo '<form method="post" action="thanks.php">';

    echo '<input type="hidden" name="nickname" value="'.$postNN.'">';
    echo '<input type="hidden" name="email" value="'.$postEMAIL.'">';
    echo '<input type="hidden" name="comment" value="'.$postCOMMENT.'">';

    echo '<input type="button" onclick="history.back()" value="戻る" style="width: 100px">';
    echo '<input type="submit" value="OK" style="width: 100px"><br>';
    echo '</form>';
  }


 ?>

</body>
</html>

<!-- URL:http://localhost:8888/ikinariPHP/input/check_2.php -->
