<?php
  require('re-dbConnect_1.php');
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>いまさら復習PHP</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    if(isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])){
      $page = $_REQUEST['page'];
    } else {
      $page = 1;
    }
   ?>
  <?php
    $start = 5 * ($page - 1);
    $memos = $db->prepare('SELECT * FROM memos ORDER BY id LIMIT ?,5');
    $memos->bindParam(1, $start, PDO::PARAM_INT);
    $memos->execute();
   ?>
   <main>
     <h2>practice</h2>
     <h3>投稿画面？</h3>
     <form action="input_do.php" method="post">
       <div class="TAwrap">
         <textarea name="memo" id="" cols="50" rows="10" placeholder="自由にメモを残してください"></textarea>
       </div><!--  .TAwrap -->
       <button type="submit">登録する</button>
     </form>
   </main>

  <article class="">
    <?php while ($memo = $memos->fetch()): ?>
      <!-- <p><a href="#"><?php // print($memo['memo']); ?></a></p> -->
      <p><a href="memo.php?id=<?php print($memo['id']); ?>">
        <?php print(mb_substr($memo['memo'], 0, 10)); ?>
        <?php print((mb_strlen($memo['memo']) > 10 ? '…' : '')); ?>
      </a></p>
      <time><?php print($memo['created_at']); ?></time>
      <hr>

    <?php endwhile; ?>
    <p>
    <?php if($page>=2): ?>
      <a href="indux.php?page=<?php print($page-1); ?>"><?php print($page-1); ?>ページ目へ</a>|
    <?php endif; ?>
    <?php
      $counts = $db->query('SELECT COUNT(*) as cnt FROM memos');
      $count = $counts->fetch();
      $max_page = floor($count['cnt'] / 5) + 1;
      if($page < $max_page):
     ?>
      <a href="indux.php?page=<?php print($page+1); ?>"><?php print($page+1); ?>ページ目へ</a>
    <?php endif; ?>
    </p>
  </article>

</body>
</html>
