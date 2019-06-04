<?php

  // ini_set('display_errors','On');
  // ini_set('error_responding',E_ALL);
  // define('WP_MEMORY_LIMIT', '64M');


  try{
    $db = new PDO('mysql:dbname=mydb_re2:MnavPHP; host=localhost; charset=utf8;','root','root');
  }catch(PDOException $e){
    echo 'DB接続エラー: '.$e->getMessage();
  };

 ?>
