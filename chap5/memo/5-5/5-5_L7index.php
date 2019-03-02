<?php
  require('5-6dbconnect(forMac).php');
  // require('5-6dbconnect(forWin).php');
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
  <h2>データの一覧を作る</h2>
  <h2>Practice</h2>
  <pre>
    <?php
      $memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
     ?>
  <article class="">
    <?php while ($memo = $memos->fetch()): ?>
      <?php //lesson7:ifを使って省略された時に「…」を補う ?>
        <?php if((mb_strlen($memo['memo'])) > 10): ?>
          <p><a href="5-5memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 10)); ?>…</a></p>
        <!-- idごとのメモの内容を表示＆idごとのリンクを設定 -->
        <?php else: ?>
          <p><a href="5-5memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 10)); ?></a></p>
        <?php endif; ?>
        <?php
        // ↑コードを使えば完成するが、同じHTMLを書かなければならないため煩雑。
        // 「三項演算子」を使って以下コードのように書けば１行で完成するかも。
        // 「三項演算子」はこんな感じ。ちょうど「if構文を１行で書いたような式になる。」
        // 「三項演算子」 = 「(条件)? 条件が成り立った時の処理: 処理が成り立たなかった時の処理」
         ?>
       <?php endwhile; ?>


      <!-- lesson5:一覧画面からリンクを飛び、idごとの個別画面に飛べるようにする -->
      <!-- ↑のコードをさらにこう↓する。 -->
      <p><a href="5-5memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 10)); ?></a></p>
      <time><?php print($memo['created_at']); ?></time>
      <!-- <br> -->
      <hr>
    <?php
      // chap5-3でやったように、「while」を利用してレコードを取り出しながら、
      // メモの内容や作成時刻を画面に表示する。
      // …といっても、リンク先もつけていないのでHPとしては機能しないのだが…。
      // …まぁあくまで今やるのは「画面表示」なので。
     ?>
   </pre>
</body>
</html>
