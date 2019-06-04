<?php
  ini_set('display_errors','On');
  ini_set('error_responding',E_ALL);

  try{
    $db = new PDO('mysql:dbname=mydb_re_MnavPHP; host=localhost; charset=utf8','root','root');
  }catch(PDOException $e){
    echo 'DB接続エラー:'.$e->getMessage();
  }


 ?>
