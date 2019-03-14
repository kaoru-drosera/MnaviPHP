<?php  ?>
<?php // require('5-6dbconnect(forMac).php'); ?>
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
  <h2>フォームからの情報を保存する</h2>
  <h3>SELECT SQLを実行するには？</h3>
  <h2>Practice</h2>
  <form action="5-8input_do.php" method="post">
    <textarea name="memo" id="" cols="50" rows="10" placeholder="メモがございましたら、ご自由にご記入お願いします"></textarea><br>
    <button type="submit">登録する</button>
  </form>
  <pre>
    <?php
    // lesson1:foreachライクな一覧表示
    // $memos = $db->query('SELECT * FROM memos ORDER BY id DESC LIMIT 0,5');
    // 「ORDER BY」を使って大きい順(DESC)に順番に表示。

    // 「LIMIT」は、「LIMIT 始めの数字, 表示する件数」。
    // 0で指定することで1件目が出てくる。
    //
    // ページを変えて表示するには、
    // $memos = $db->query('SELECT * FROM memos ORDER BY id LIMIT 5,5');
    // 5を始点とすることで6件目を表示できる。
    // $memos = $db->query('SELECT * FROM memos ORDER BY id LIMIT 10,5');
    // 同様に10始点とすることで11件目を表示できる。
    //
    // 分かれたページは、以下のURLでページ数「?page=?」を定めることで
    // ページに移動できるようにする。
    //http://localhost/MnavPHP/MnaviPHP/chap5/memo/5-8/5-8index.php?page=4
    //


    // lesson7-1:ページング
    //
    // $memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?,5');
    // このように、始点の値に「?」を設定することで、
    // 任意のページに行くことが可能に。
    // 後は、「bindParam()→execute()」を使ってパラメータを割り当てる。
    // $memos->bindParam(1, $_REQUEST['page'], PDO::PARAM_INT);
    // $memos->execute();
    //
    // ただし、以上のコードでは
    // 3ページ目は「page=10」5ページ目は「page=20」など、5の倍数を指定しなければいけない事
    // 4や9など、中途半端な数字も指定できてしまうこと
    // この2つの点でよろしくない。

     // 分かれたページが「1ページ目、2ページ目」で定めるためには、
     // スタート位置 = 5 * (ページ数 - 1);
     // のようにする必要がある。
     // これは、5の倍数で指定しなければ「次ページ」のように機能しない状態だから（？）である。
     // 具体的には、「page=1」なら「最後の項目から1番目を始点として5項目」
     // といった表示形式になってしまう(多分)からである。
     //
     // 「5 * (ページ数 - 1)」という式は、スタート位置が5の倍数なため
     // 1ページ目:5 * 0 = 0;
     // 2ページ目:5 * 1 = 5;
     // 3ページ目:5 * 2 = 15;
     // といった式が成り立つから（らしい。よく分からない）。
     // よって、上のコードは以下のように書き換える必要がある。
     //
     // $page = $_REQUEST['page'];
     // $start = 5 * ($page - 1);
     // $memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?,5');
     // $memos->bindParam(1, $start, PDO::PARAM_INT);
     // $memos->execute();
     // やった！何か知らんけど「5項目/1ページ」で区切ることが出来るようになった！


     // 次は…「~/index.php」で表示できなくなっているところを、
     // if分を使って「~/index.php」で1ページ目に移動できるようにする。
     // …といっても、項目が表示されないだけで特にエラーは出ない
     //
     // とにかく、「~/index.php」は「1ページ目と同義」という状態にするのだ。
     // こんなコードになるな。要は$pageに細工をすればいいらしい。
     //
     if(isset($_REQUEST['page']) && is_numeric( $_REQUEST['page'])){
       // $_REQUEST['page']に値が入っていて、なおかつ数字であること
       // 「isset();」=「値が入っているかどうか」
       $page = $_REQUEST['page'];
     } else {
       $page = 1;
       // $_REQUEST['page']に値が入っていないので「1」
     }
     $start = 5 * ($page - 1);
     $memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?,5');
     $memos->bindParam(1, $start, PDO::PARAM_INT);
     $memos->execute();
     ?>
  <article>
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
          <!-- <p><a href="5-5memo.php?id=<?php //print($memo['id']); ?>"><?php //print(mb_substr($memo['memo'], 0, 10)); ?></a></p> -->
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
           <a href="5-8memo.php?id=<?php print($memo['id']); ?>">
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
       <?php
        // lesson7-5-2:リンクを作ろう
        ?>
        <!-- <a href="index.php?page=2"></a> -->
        <?php
        // これで2ページ目に移動できるが、これでは2ページ目にしか移動できない。
        // 任意の―ページへ移動できるようにするためには…？
         ?>
         <!-- <a href="5-8index.php?page=<?php// print($page-1) ?>"><?php// print($page-1) ?>ページ目へ</a>|<a href="5-8index.php?page=<?php// print($page+1) ?>"><?php// print($page+1) ?>ページ目</a> -->

        <?php
        // $pageを使う時には、初期値は0なので「$page+1」という扱いになる。
        // これで一見完璧だが、「0ページ目」であったり、データが存在しないページへも飛べてしまう。
        // なんとか「1ページからデータの存在するページまでに行動範囲を狭める」ことは出来ないだろうか？
        // →「リンク先にデータが存在しない場合、リンクを消す」
        // →→1.「ページ数が1を下回る場合、リンクを消す」
        // →→2.「最大ページ数以降のページへ行くリンクを消す」
        //

        // 1.は上コードでいう「前ページ($page-1)へ行くリンク」を細工するんだな。
          ?>
          <?php if ($page >= 2): ?>
            <a href="5-8index.php?page=<?php print($page-1) ?>"><?php print($page-1) ?>ページ目へ</a>
          <?php endif; ?>
            <?php
             //$pageが1だと0ページ目になってしまう
             // 2.「最大ページ数以降のページへ行くリンクを消す」
             // ようは「次ページ」を細工するのが大変で、
             // 次のSQLがが必要になる。
             //
             // $counts = $db->exec('SELECT COUNT(*) AS cnt FROM memos');
             // $count = $counts->fetch;
             //
             // また、5件表示するページに8件のデータがあるとすると、
             // 最後のページは2ページ目になる。
             // よって、最大ページ数は「データの件数 / 5 + 1(小数点切り捨て) = 最大ページ数」
             // ということになる。
             // 「+ 1」は、「$page」の初期値が「0」だから。
             //
             // SQLに直すとこんな感じ。
             //
             // $max_page = floor($count['cnt'] / 5) + 1;
              ?>
              |
              <?php
              $counts = $db->query('SELECT COUNT(*) AS cnt FROM memos');
              $count = $counts->fetch();
              $max_page = floor($count['cnt'] / 5) + 1;
              if($page < $max_page):
              // $max_pageと同等かそれ以上になったらりんくのリンクの表示をやめる
               ?>
            <a href="5-8index.php?page=<?php print($page+1) ?>"><?php print($page+1) ?>ページ目へ</a>
            <?php endif; ?>
     </article>

      <!-- lesson5:一覧画面からリンクを飛び、idごとの個別画面に飛べるようにする -->
      <!-- ↑のコードをさらにこう↓する。 -->
      <p><a href="5-8memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 10)); ?></a></p>
      <?php
      // これで、「idごとの個別ページのリンクを張っていく」という意味のコードになった。
      ?>
      <time><?php print($memo['created_at']); ?></time>
      <!-- <br> -->
      <hr>
    <?php
     ?>
   </pre>
   <p>今時点までやってみたはいいけど、よくわかんねぇや。</p>
</body>
</html>
