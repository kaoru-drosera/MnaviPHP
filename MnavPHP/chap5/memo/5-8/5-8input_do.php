<?php
  require('5-6dbconnect(forMac).php');
  //require('5-6dbconnect(forWin).php');

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/MnavPHP/MnaviPHP/css/bootstrap.min.css">
  <link rel="stylesheet" href="/MnavPHP/MnaviPHP/css/style.css">
  <title>よくわかるPHP 第5章</title>
</head>
<body>
  <h2>フォームからの情報を保存する</h2>
  <h3>SELECT SQLを実行するには？</h3>
  <h2>Practice</h2>
  <pre>
  <?php

    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo "メッセージが登録されました";

    // 一行目の「?」は、
    // $db->exec('INSERT INTO memos SET memo="' . $_POST['memo'] . '", created_at=NOW()');
    // で言うところの
    // 「"' . $_POST['memo'] . '"」
    // にあたり、要するに「フォームで受け取った値」のこと。
    //
    // このコードでは2行目で受け取るようになっているが、
    // その理由は「prepare()」を使用した際に
    // 「PDO Statement」という安全なデータ型に変換され
    // そのコードが「execute()」と呼ばれるコードでしか受け取れないからである。（たぶん。）
    //
    // 「exec()」は「execute()」の省略形であり役割もほぼ変わらないが、
    // 「exec()」は「PDO Statement」を受け取れない…など出来ることは限られている（たぶん。）
    // ただし、「execute()」は「execute()」で
    // 「1つのデータ型（基本的に文字列のみ）しか渡せない」という欠点があり一長一短である。




    // bindParam
    // パラメータに値を引き渡すもう一つの解法
    // さっきのプログラムは、「bindParam」を使って記述することもできる。

    // $statementB = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    // $statementB->bindParam(1, $_POST['memo']);
    // $statementB->execute();

    // これで、さっきのプログラムと同じように動作する。
    // （コードミス気づかなくて、機能しなくて慌てた。?とcreated～の間に入れ忘れてたコンマを入れたら動くようになった…）
    // 公式としては以下の通り。
    //
    //
    // PDOステートメントオブジェクト->bindParam(パラメータの順番, 値, データ型);
    //
    //
    // 2番目のパラメータ「値」には「変数名」しか入らない。
    //そのため、直接数字で指定すると不具合が起こる。
    //
    // 取り扱えるデータ型は基本的には「文字列」のみだが、
    // 3つめのパラメータである「データ型」を設定することで
    // 「数字」「真偽値」「NULL値」に変えることも可能である。
    //
    // PDO::PARAM_BOOLなら「真偽値(true/false)」
    // PDO::PARAM_INTなら「数値」
    // PDO::PARAM_NULLなら「NULL値」
    // そして、標準設定の
    // PDO::PARAM_STR,「文字列」である。
    //
    // といっても、自由に変更することは可能だが、取り扱えるデータ型は1つだけ。
    // 例えば「数字、文字列」を同時に入れることは出来ない。
    //
    // 詳しくはリファレンスも参考のこと。
    // http://php.net/manual/ja/pdo.constants.php
    //
    // 公式1つにつき入るパラメータは３つまで。




    // 一見するとexecuteを使う方が短縮できると思いがちである。、
    // だが、実は「1つのデータ型しか渡せない（基本的に文字列のみ）」という欠点を抱えている。
    // 要は、「文字列と数字」といった渡し方は不可能なのだ。

    // 例えば、以下コードを打とうとすると不具合が起こる。
    // 「5まで表示して」を意味する、「LIMIT」を使ったコードである。

    // $statementL = $db->prepare('SELECT FROM memos LIMIT ?');
    // $statementL->execute(array(5));

    // このコードが動かないのは、今のexecuteが数字を扱えず、
    // 文字列として扱ってしまうからである。
    // （executeは、何も設定を変えていない時は文字列として扱う）
    // 正しいコードは以下の通り。

    $statementP = $db->prepare('SELECT FROM memos LIMIT ?');
    $limit = 5;
    $statementP->bindParam(1, $limit, PDO::PARAM_INT);
    $statementP->execute();





   ?>
 </pre>
  <a href="5-8index.php">戻る</a>
</body>
</html>
