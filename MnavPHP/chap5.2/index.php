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
  <link rel="icon" href="">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>

<body>
  <h2>practioce</h2>
  <h3>コメントを送信する</h3>
  <form action="input_do.php" method="post">
    <div>
      <textarea name="memo" id="" cols="50" rows="10" placeholder="こめんとじゆうに"></textarea>
    </div>
    <button type="submit">送信する</button>
  </form>
  <?php
    if(isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])){
      $page = $_REQUEST['page'];
    } else {
      $page = 1;
    }
    $start = 5 * ($page - 1);
    $memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?,5');
    $memos->bindParam(1, $start, PDO::PARAM_INT);
    $memos->execute();
   ?>
  <article>
    <?php while($memo = $memos->fetch()): ?>
      <p><a href="memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'],0,10)); ?><?php print((mb_strlen($memo['memo']) > 10 ? '…':'')) ?></a></p>
      <time><?php print($memo['created_at']); ?></time>
      <hr>
    <?php endwhile; ?>
    <p>
      <?php if($page >= 2): ?>
        <a href="index.php?page=<?php print($page-1); ?>"><?php print($page-1); ?>ページ目へ</a>
      <?php endif; ?>
      　|　
      <?php
      $counts = $db->query('SELECT COUNT(*) AS cnt FROM memos');
      $count = $counts->fetch();
      $max_page = floor($count['cnt'] / 5) + 1;
      if($page < $max_page):
       ?>
       <a href="index.php?page=<?php print($page+1); ?>"><?php print($page+1); ?>ページ目へ</a>
      <?php endif; ?>
    </p>


  </article>
</body>
</html>
