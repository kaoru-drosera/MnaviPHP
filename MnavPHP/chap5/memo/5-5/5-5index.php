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
  <h2>フォームからの情報を保存する</h2>
  <h3>SELECT SQLを実行するには？</h3>
  <h2>Practice</h2>
  <form action="5-5input_do.php" method="post">
    <textarea name="memo" id="" cols="50" rows="10" placeholder="メモがございましたら、ご自由にご記入お願いします"></textarea><br>
    <button type="submit">登録する</button>
  </form>
  <pre>
    <?php
    // lesson1:foreachライクな一覧表示
      $memos = $db->query('SELECT * FROM memos ORDER BY id DESC');
      // 「ORDER BY」を使って大きい順(DESC)に順番に表示。
     ?>
  <article class="">
    <?php //while ($memo = $memos->fetch()): ?>
    <?php //表示できたよ！！20行目の$memosからsが抜けていました。 ?>
    <?php //lesson2:「mb_substr」で表示内容を一定文字数以下に制限 ?>
    <?php
      // mb_substrで切り取られた文字数 = mb_substr(切り取る文字列, 最初の位置, 文字数);
     ?>
      <!-- <p><a href="#"><?php //print($memo['memo']); ?></a></p> -->
      <!-- ↑こいつを、こう↓する。 -->
      <!-- <p><a href="#"><?php //print(mb_substr($memo['memo'], 0, 10)); ?></a></p> -->
      <?php
      // 意味（久々）:「$memo['memo']」の内容を、始め(0)から「10」字まで表示する。
      ?>

      <?php //lesson7:ifを使って省略された時に「…」を補う ?>
        <?php //if((mb_strlen($memo['memo'])) > 10): ?>
          <!-- <p><a href="5-5memo.php?id=<?php //print($memo['id']); ?>"><?php //print(mb_substr($memo['memo'], 0, 10)); ?>…</a></p> -->
        <!-- idごとのメモの内容を表示＆idごとのリンクを設定 -->
        <?php //else: ?>
          <p><a href="5-5memo.php?id=<?php //print($memo['id']); ?>"><?php //print(mb_substr($memo['memo'], 0, 10)); ?></a></p>
        <?php //endif; ?>
       <?php //endwhile; ?>
       <?php
       // ↑コードを使えば完成するが、同じHTMLを書かなければならないため煩雑。
       // 「三項演算子」を使って以下コードのように書けば１行で完成するかも。
       // 「三項演算子」はこんな感じ。ちょうど「if構文を１行で書いたような式になる。」
       // 「三項演算子」 = 「(条件)? 条件が成り立った時の処理: 処理が成り立たなかった時の処理」
       // 「三項演算子」を使えば１行で完成するかもコード↓。
       ?>

       <?php while ($memo = $memos->fetch()): ?>
         <p>
           <a href="5-5memo.php?id=<?php print($memo['id']); ?>">
           <?php print(mb_substr($memo['memo'], 0, 10)); ?>
             <?php //メモの内容が10字以上の場合省略する ?>
             <?php print((mb_strlen($memo['memo']) > 10 ? '…':'')) ?>
             <?php
              // 条件:「mb_strlen($memo['memo']) > 10」=「メモの文字数が10以上」
              // 成り立つ場合の条件:「…」を入れる=「'…'」
              // 成り立たない場合の条件:何も入れない=「''」
              ?>
           </a>
         </p>
         <time><?php print($memo['created_at']); ?></time>
         <br>
       <?php endwhile; ?>


      <!-- lesson5:一覧画面からリンクを飛び、idごとの個別画面に飛べるようにする -->
      <!-- ↑のコードをさらにこう↓する。 -->
      <p><a href="5-5memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 10)); ?></a></p>
      <?php
      // これで、「idごとの個別ページのリンクを張っていく」という意味のコードになった。
      ?>
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
