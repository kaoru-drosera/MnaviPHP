<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>p78_入力フォーム_2</title>
</head>
<body>
  <pre>
    <?php
    print_r($_POST);
     ?>
  </pre>
  <?php
    echo '<br>';
    echo htmlspecialchars($_POST['recipeName'],ENT_QUOTES,'UTF-8');
    echo '<br>';
    if ($_POST['category'] === '1') echo "Japanese";
    if ($_POST['category'] === '2') echo "Western";
    if ($_POST['category'] === '3') echo "chinese cuisine";
    echo '<br>';
    if ($_POST['difficulty'] === '1'){
      echo "easy";
    } else if ($_POST['difficulty'] === '2'){
      echo "normal";
    } else {
      echo "difficult";
    };
    echo '<br>';
    if (is_numeric($_POST['budget'])) {
        echo number_format($_POST['budget']);
    };
    echo '<br>';
    echo nl2br(htmlspecialchars($_POST['howto'],ENT_QUOTES,'UTF-8'));
    echo '<br>';

   ?>
</body>
</html>

<!-- 以上、体験版はここまで！
本編は：
/Applications/MAMP/htdocs
で！ -->
<!-- URL:http://localhost:8888/impressPHP/MY_flie/chap2/receive.php -->
