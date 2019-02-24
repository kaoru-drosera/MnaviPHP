<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'On');
// 以上のコードでこのファイルだけエラー設定を
// 変更できる。
// ちなみに、「E_ALL ^ E_NOTICE」なら
// 「E_NOTICE以外すべて表示」という意味になる
// （「^」が「～以外という意味になる」）
//
// ちなみに（2度目）「E_ALL | E_STRICT」なら
// 「非推奨なかき方含めすべて表示」という意味になる。
// 以下サイトを参考のこと。
// https://maku77.github.io/php/settings/error-level.html
 ?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
  <h2>Cookieに値を保存する</h2>
  <pre>
    <?php
    // require_once('index.php');
    // 「見たことない関数」のエラーが出たのでこれを使うことで解決は出来たが、
    // 内部のテキストファイルまで全部読みこんでしまうので
    // これを使ったファイルは関数以外の値がない「関数・変数置き場専用
    // 」として使ったほうがいいだろう。
     ?>

    変数:<?php print($value) ?>

    Cookieの値:<?php print($_COOKIE['save_message']); ?>
  </pre>
</main>
</body>
</html>
