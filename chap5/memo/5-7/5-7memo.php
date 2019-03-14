<?php  //require('5-6dbconnect(forMac).php'); ?>
 <?php require('5-6dbconnect(forWin).php'); ?>
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
  <h2>データの一覧を作る</h2>
  <h2>Practice</h2>
  <pre>
    <?php
    //lesson6:ifを使ってより安全性の高いURLパラメータを受け取ってもらう
         //個別ページを特定するために「id」を使用しているが、
         // 「id」には
         // 1.「1以上」の
         // 2.数字
         // が適用されるので
         // 1.「数字以外」
         // 2.「１以下の数字(だから「0」)」
         // のいずれかパラメータが入った時
         // 除外するプログラムが必要

         $id = $_REQUEST['id'];
         if(!is_numeric($id) || $id <= 0){
           print('URLのidには1以上の数字を指定してください');
           exit();
         }
         // 「is_numeric()」の意味は「数字かどうか」。
         // ここに「打ち消し」の意味を持つ「！」が加わることで
         // 「数字でないかどうか」を調べられる。
         // 「||」=「OR(この条件がダメでも、次が満たせていれば)」
         // という公式でつないで次の条件式を入力。
         // 「$idが0以下($id <= 0)」という条件をつけることで、
         // 「0」が来た時に撥ね付けることができる。

     ?>
    <?php
      // lesson3:詳細画面を作る
      // 「途切れたメッセージの全文が読めるページ」を
      // ここで作るのだ！

      // $memos = $db->query('SELECT * FROM memos WHERE id=1');
      // $memo = $memos->fetch();

      // ここでは1番目のメッセージを抜き出して
      // 「fetch()」で取り出したものを変数に取り、
      // この変数から「memo」の値を取り出し
      // ページに表示する仕組み。

      //
      // 個別ページでできるようにするには
      // 「URLパラメータで取れるサイト」にする必要がある。
      // 例えば3番目ならこんな感じ。
      // 「http://localhost:8888/mynavPHP/MnaviPHP/chap5/memo/5-5/5-5memo.php?id=3」
      // 数字を変えれば、好きなidのページヘ飛べる仕組みだ。
      // ↑のコードを以下のように書き換えるのだ。

      $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
      $memos->execute(array($_GET['id']));
      // $memos->execute(array($_REQUEST['id']));
      $memo = $memos->fetch();

      // 2行目のコードで「id」の情報が取られ、
      // これを１行目コードの「?」に挿入されることで
      // idごとのページとして飛ぶことが可能になる。
      // 2行目コード受け取りは「array($_GET['id'])」「array($_REQUEST['id'])」
      // のうちどちらでもいい。
      //
      // なぜこのコードなのかは5-4を参照。
      // ちなみに、やりがちな失敗コードが
      // 「query」で直接取り出してしまうこと。
      // 必ずprepareとexecuteで２段階を踏むこと。

      // 最後にリンクを貼ることで、
      // クリックすれば個別ページヘ飛べる
      // ページが完成する。



     ?>
     <article class="">
       <pre><?php print($memo['memo']); ?></pre>
       <a href="5-7index.php">戻る</a>
     </article>
   </pre>
  </article>
</body>
</html>
