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
  <h2>PDOを学習する</h2>
  <h3>データベースに接続する</h3>
  <h2>Practice</h2>
  <pre>
  <?php
      // データベースに接続するには、以下のような「PDOオブジェクト」を使う
      // 必要がある。
      //
      // PDOオブジェクト

      // データベースオブジェクトのインスタンス = new PDO(データソース(データベース？)名, ユーザー名, パスワード, オプション);

      // 「データベースオブジェクトのインスタンス」というのは、
      // 要は「左側の一連の処理を、変数にまとめておくこと」
      // と言えばわかりやすいか。
      // よって、例としては「$db」といった形に。

      // xamppやmampなどのローカルサーバーの場合、
      // ホスト名、ユーザー名、パスワードなどは
      // それぞれほぼ以下の通りでいいかと。
      //
      // forMAC
      // ホスト名:localhost;
      // ユーザ名:root;
      // パスワード:root;
      //
      // …以上はMAMPのみでの設定だったらしい。
      // xamppではパスワードのrootは必要なくて、空でいいらしい。クソがッ！！
      //
      // forWIN
      // ホスト名:localhost;
      // ユーザ名:root;
      // パスワード:root;
      //

      // *forWIN
    try{
      $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', '');
    } catch (PDOException $e) {
      echo 'DB接続エラー:' . $e->getMessage();
    }


    //   *forMAC
    // try{
    //   $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', 'root');
    // } catch (PDOException $e) {
    //   echo 'DB接続エラー:' . $e->getMessage();
    // }


    // さっき使用した「try」や「catch」は、データべーそ接続など
    // 「うまくいかなかったときにエラーメッセージが出る」
    // タイプの処理を行う時に使うもの。
    // 公式としてはこんな感じ。
    // try{
    //   行いたい処理
    // } catch (エラークラス エラーのインスタンスを入れる変数(ここでは PDOException $e)) {
    //   tryの｛｝内の処理が出来なかった時の処理
    // }

    // SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)
    // このエラーが出たときはパラメータミス。
    // よく確認してみよう


    //
    // 「exec()」を学習する
    //
    // 「exec()」を使用することで、PHP内でSQLコマンドを実行することが出来る。
    //
    // ただし、「exec('')」が使用できるのは「INSERT」「UPDATE」「DELETE」の3種のみ（現時点）。
    // 例えば、「SELECT」は「exec('')」では使用できない。よって、ここは「query('')」の出番である。
    // ちなみに、「exec('')」と「query('')」とは「ページに表示するデータの種類」が異なる。
    //「exec('')」が「データが変更された行数（だから数字）」を表示するのに対し、
    //「query('')」は「問い合わせ結果」を表示することが出来る。

    // ところで、大文字で「U」始まりと「E」終わりの単語で反射的に
    // 「UNDERTALE」を連想するようになってしまった…。ニェーッヘッヘッヘ！！
    //
    // PHPとSQLのコラボは、今ここに始まったのだ！

      // $count = $db->exec('INSERT INTO my_item SET maker_id=1, item_name="ココナッツ", price=500, keyword="甘くはない,堅い,ミルク,ジュース", sales=0, created="2018-01-23", modified="2018-01-23"');
      // echo $count . '件のデータを挿入しました';

      // 変数「$count」を使ったのは、加えたデータ数を集計して
      // メッセージとして出すためだろう。

      // 「exec('')」を用いてSQLを挿入するときは、SQLコード全体を「''」か「""」で囲むこと。
      // ただし、SQL内でパラメータを指定するときには全体を囲ったものとはちがうものを使うように。
      // 例えば、全体を「''」で囲っている時に「''」でパラメータ指定を行うとエラーを吐くので
      // パラメータを指定する場合には「""」を使うこと。




        // もちろん、逆に言えば上で使用した「INSERT」以外にも、
        // 「UPDATE」「DELETE」といった関数を使うことも可能だ。
        // ここでは練習も兼ねて
        // 「INSERT」→「UPDATE」→「DELETE」の流れをフルでやってみるぞ！
        // (forWIN)

          // $count = $db->exec('INSERT INTO my_item SET maker_id=4, item_name="大和田クン", price="300", keyword="超高校級の暴走族,ヤンキー,漢,とんがりコーン,2章クロ" sales=0, created="2018-01-23", modified="2018-01-23"');
          // echo 'クロが' . $count . '件きまりました。オシヲキを開始します。';

          // $count = $db->exec('INSERT INTO my_item SET maker_id=1, item_name="大和田クン", price=500, keyword="超高校級の暴走族,ヤンキー,漢,とんがりコーン,2章クロ", sales=0, created="2018-01-23", modified="2018-01-23"');
          // echo 'クロが' . $count . '件きまりました。オシヲキをかいしします。';
          //
          // 「INSERT INTO」を使って、7番目のデータを追加。
          // にしても、「$count」を使うとなぜ「1」で表示されるかがわからない
          // →
          //「exec('')」が「データが変更された行数（だから数字）」を表示するのに対し、
          //「query('')」は「問い合わせ結果」を表示することが出来る。
          // →
          // だから、数字が表示されるのは「$count」ではなく「exec('')」によるもの。
          // そうだったのか！！


          // $count = $db->exec('UPDATE my_item SET item_name="大和田バター" WHERE id=8');
          // echo 'オシヲキが' . $count . '件完了しました。';
          //
          // 「UPDATE」を使って、7番目のデータを更新。
          // オシヲキ完了！エーックストリーー―ンムッッッ！！アドレナリンが、滲ンみ渡るゥッ！！（CV;TARAKO）
          // （もちろん内心じゃ本位じゃないけど単純にコードが作動してくれて純粋に嬉しい）

          // $count = $db->exec('DELETE FROM my_item WHERE id=8');
          // echo '※さっきの' . $count . '件はフィクションです。';
          //
          // データ消去完了！
          // ダンガンロンパがちゃんと終わってほしかっただけに、
          // ザンキゼロが話題に揚がらなかったのは痛かったなぁ…。

   ?>
 </pre>
</body>
</html>
