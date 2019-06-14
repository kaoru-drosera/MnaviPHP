<?php
  try{
    // ↓うろ覚えで書いたミスコード。畜生
    // new PDO('dbname=,host=localhost,=utf-8','root','root');
    $db = new PDO('mysql:dbname=mini_bbs2;host=localhost;charset=utf-8','root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // ↑SQLのエラーを表示してくれるのが上のコードだ。
    // 本には書かれなかったけど重要なコードだ。
    // 他の本でも勉強するっかなぁ…。
  } catch (PDOException $e) {
    echo 'DB接続エラー:　'.$e->getMessage();
    exit();
    // ↑処理を停止させるコードが抜けていた
  }
 ?>
