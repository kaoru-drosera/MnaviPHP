<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>定数</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main-contents">
    <h3>定数</h3>
    <p>後から変更できない「定数」を設定しよう。</p>
    <p>一般的には「const 定数名 = 数値」を使う。</p>
    <?php const TAX = 0.08; ?>
    <?php $price = 1250 * (1+TAX) ?>
    <?= TAX ?>
    <?= "<br/>" ?>
    <?= $price ?>
  </div><!--  .main-contents -->
  <div class="main-contents">
    <p>define("定数名",数値) といった形でも使う。</p>
    <?php define("FOX",0.1); ?>
    <?php $price2 = 1250 * (1+FOX) ?>
    <?= FOX ?>
    <?= "<br/>" ?>
    <?= $price2 ?>
  </div><!--  .main-contents -->
</body>
</html>
