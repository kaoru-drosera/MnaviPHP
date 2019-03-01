  <?php

    // *forWIN
  // try{
  //   $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', '');
  //
  // } catch (PDOException $e) {
  //   echo 'DB接続エラー:' . $e->getMessage();
  // }

  //   *forMAC
    $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', 'root');

  } catch (PDOException $e) {
    echo 'DB接続エラー:' . $e->getMessage();
  }

  // このように、「データベース接続」など
  // 「同じ記述が複数ファイルで必要な場合」は共通化させて、
  // 「require('5-6dbconnect(forMac).php')」のようにして読み込ませると良い。

   ?>
   <?php //↓こんな感じじゃ！ ?>
   <?php //require('5-6dbconnect(forMac).php'); ?>
