<?php
  require('re2-dbConnect.php');
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>いまさら復習PHP-3</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>
<body>
  <?php
    $id = $_REQUEST['id'];
    $counts = $db->query('SELECT COUNT(id) AS num FROM memos');
    $count = $counts->fetch();
    $max_memo = floor($count['num']) + 1;
    print($max_memo);
    // 「データベース上にないページIDを選択した時に
    // エラーを吐く機能」を追加した！
    // わーい！ほめてほめてほめてー！

    // 問題が発生した。
    // 削除して空白になったデータも表示するものとして扱ったまま、
    // データの総数のみでカウントしようとしたため、
    // 最新のデータを表示しようとした時
    // エラーを吐くようになってしまったようだ。

    $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
    $memos->execute(array($id));
    $memo = $memos->fetch();
    // print($max_memo);

    if(!is_numeric($id) || $id <= 0 || $id >= $max_memo){
      print('データベース上にIDとして存在する１以上の数字を指定してください');
      exit();
    }


   ?>
   <article>
     <?php if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])): ?>
     <pre><?php print($memo['memo']); ?></pre>
     <?php if($id >= 2): ?>
     <p>
       <a href="memo.php?id=<?php print($id-1) ?>">前のページへ</a>
     <?php endif; ?>
        |
    <?php if($id <= $max_memo): ?>
      <a href="memo.php?id=<?php print($id+1) ?>">次のページへ</a>
    <?php endif; ?>
    </p>
     <p><a href="update.php?id=<?php print($memo['id']) ?>">更新する</a>|<a href="delete.php?id=<?php print($memo['id']) ?>">削除する</a></p>
     <p><a href="index.php">戻る</a></p>

     <!-- これまたindex.phpのコードを参考にして
     「詳細画面に次/前ページ」
      を作ってみたよー！
      ぬははー！褒めろたたえろー！ -->
    <?php endif; ?>
   </article>
</body>
</html>
