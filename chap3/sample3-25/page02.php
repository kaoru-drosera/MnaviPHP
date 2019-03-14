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

session_start();
// 最初に「session_start();」を使って初期化する必要がある。
// セッションを使うファイル（送るもの、受け取るもの両方）
// がある場所には基本的にこのコードを書き込んでおく。
// 例によってこれも「セッションを受け取る」ページなので書いておく

// …と言っても、1つ1つ書いていくのは面倒なので、
// 「php.ini」で設定を変えられるなら変更するといい。
// 「Initialize session on request startup.」という文字列を探し、
// 下に「session.auto_start = 0」があれば、数字部分を「1」に変更。
// 再起動すれば設定が使えるようになる！

// これだけではセキュリティ的に問題も多いので、専門書籍やマニュアルを参考にして
// 強固なセキュリティプログラムを作るよう。

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

    // →2~3行目の「エラー表示設定コード」を書き込んでおくことで解決した。

     ?>
     セッションの値:<?php print($_SESSION['session_message']); ?>
     <!-- 「セッション変数を画面に表示させる」設定。
     こうすることで、「webブラウザを閉じない限りずっと保存できる」ようになるのだ！ -->

     <?php session_unset(); ?>
     <!-- セッションが不要になったときは、「session_unset();」ファンクションを使って
     セッション内容を削除。
     ファンクション「unset();」を使って、「unset($_SESSION['session_message']);」
     といった書き方もできる。 -->

     <!-- セッション操作のファンクションはマニュアルも参照のこと。
     http://php.net/manual/ja/book.session.php -->

    変数:<?php print($value) ?>

    Cookieの値:<?php print($_COOKIE['save_message']); ?>
  </pre>
</main>
</body>
</html>
