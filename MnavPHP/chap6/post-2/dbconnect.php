<?php

  try{
    $db = new PDO('mysql:dbname=mini_bbs;host=localhost;charset=utf8','root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    echo 'DB接続エラー:  '.$e->getMessage();
    exit();
  }

 ?>
