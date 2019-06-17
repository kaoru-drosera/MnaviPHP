<?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
require('dbconnect2.php');
session_start();

function h($value){
  return htmlspecialchars($value,ENT_QUOTES);
}

// 正規表現で「URLをリンクにするファンクションを作る」
function makeLink($value){
  return mb_ereg_replace("(https?)(://[[:alnum:]\+\$\;\?\.%,!#~*/:@=_-]+)",'<a href="\1\2" target="_blank">\1\2</a>',$value);
}

if(isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()){
  // ↑条件はlogin.phpの「//ログイン成功」以降のコードを参照のこと
  // 「idがセッションに記録されている」「最後の行動から1時間(60秒*60=3600)以内である」

  // ログインしている

  $_SESSION['time'] = time();
  // ↑$_SESSION['time']を今の時間で上書き。
  $members = $db->prepare('SELECT * FROM members WHERE id=?');
  $members->execute(array($_SESSION['id']));
  $member = $members->fetch();


} else {
  // ログインしていない
  header('Location: login.php');
  exit();
}

// 投稿を記録する
if(!empty($_POST)){
  // ↑ボタンが押されたかどうか
  if($_POST['message'] != ''){
    // messageが空白でないかどうか
    $message = $db->prepare('INSERT INTO posts SET member_id=?, message=?, reply_post_id=?, created=NOW()');
    $message->execute(array(
      $member['id'],
      $_POST['message'],
      (int)$_POST['reply_post_id']
      // メンバー情報(ログイン情報から取る)とメッセージの情報を送信。
      // reply_post_idも、なんの数値も送られてこないとエラーになるので
      // 頭に(int)を置いて送信する。
    ));

    header('Location: index.php');
    exit();
    // 最後index.phpにジャンプするのは重複を防ぐため。
  }
}
  // 投稿を取得する
  $page = $_REQUEST['page'];
  if($page == ''){
    $page = 1;
  }
  $page = max($page, 1);

  // 最終ページを取得する
  $counts = $db->query('SELECT COUNT(*) AS cnt FROM posts');
  $cnt = $counts->fetch();
  $maxPage = ceil($cnt['cnt'] / 5);
  $page = min($page, $maxPage);
  // 最大ページ数のうち小さい方を$pageに代入.
  // これによって、「最大ページ数よりも大きな値を指定されても
  // 最後のページを表示する」ようになる。

  $start = ($page - 1) * 5;

  // $posts = $db->query('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id ORDER BY p.created DESC');
  // ↑単に表示するだけなのでprepare→executeは必要ない。

  // ただし、「ページ分けがしたい」ということなら
  // 必要になる。

  $posts = $db->prepare('SELECT m.name, m.picture, p.* FROM posts p, members m WHERE m.id=p.member_id ORDER BY p.created DESC LIMIT ?,5');
  $posts->bindParam(1,$start,PDO::PARAM_INT);
  $posts->execute();
  // SQLのLIMITで開始地点を設定し、件数を制限。
  // bindParamで$startを開始地点とする。

  // 返信の場合
  if(isset($_REQUEST['res'])){
    $response = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=? ORDER BY p.created DESC');
    $response->execute(array($_REQUEST['res']));
    $table = $response->fetch();
    $message = '@'.$table['name'].'  '.$table['message'];
  }

 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>今更２周目掲示板</title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
   <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
   <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div id="wrap">
    <div id="head">
      <h1>ひとこと掲示板(笑)</h1>
    </div><!-- #head  -->
    <div id="content">
      <div style="text-align: right;"><a href="logout.php">ログアウト</a></div>
      <form action="" method="post">
        <dl>
          <dt><?php echo h($member['name']) ?>さん、メッセージをどうぞ</dt>
          <dd>
            <textarea value="" name="message" id="" cols="50" rows="5"><?php echo h($message); ?></textarea>
            <input type="hidden" name="reply_post_id" value="<?php echo h($_REQUEST['res']); ?>">
          </dd>
          <dt></dt>
          <dd><input value="投稿する" type="submit"/></dd>
        </dl>
      </form>

      <!-- 投稿内容を表示する -->
      <div class="msg">
        <?php foreach($posts as $post): ?>
          <img src="member_picture/<?php echo h($post['picture']); ?>" alt="" width="48" htight="48">
          <p><a href="view.php?id=<?php echo h($post['id']) ?>"><?php echo makeLink(h($post['message'])); ?></a>　-　<span class="name">(by　<?php echo h($post['name']); ?></span>)[<a href="index.php?res=<?php echo h($post['id']); ?>">返信</a>]</p>
          <!-- <a href="index.php?res=<?php //echo h($post['id']); ?>">
            で、「db全体で何番目のメッセージか」を取得できる。 -->
          <p class="day">
            <?php echo h($post['created']); ?>
            <?php if($post['reply_post_id'] > 0): ?>
              <a href="view.php?id=<?php echo h($post['reply_post_id']) ?>">返信元のメッセージ</a>
            <?php endif; ?>
            <?php if($_SESSION['id'] == $post['member_id']): ?>
              <!-- ↑で「本人の投稿であるかどうか」を確認。
            本人の投稿でない場合には出ない。 -->
              [<a href="delete.php?id=<?php echo h($post['id']); ?>" style="color: #f33;">削除</a>]
            <?php endif; ?>
          </p><!--  .day -->
        <?php endforeach; ?>
      </div><!--  .msg -->
      <ul class="paging" style="display: inline-block;">
        <?php if($page > 1): ?>
          <li><a href="index.php?page=<?php print($page - 1); ?>">前のページへ</a></li>
        <?php else: ?>
          <li>前のページへ</li>
        <?php endif; ?>
        <?php if($page < $maxPage): ?>
          <li><a href="index.php?page=<?php print($page + 1); ?>">次のページへ</a></li>
        <?php else: ?>
          <li>次のページへ</li>
        <?php endif; ?>
      </ul><!--  .paging -->
    </div><!-- #content  -->
  </div><!-- #wrap  -->
 </body>
 </html>
