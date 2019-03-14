  <?php

    // *forWIN
  try{
    $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', '');

  } catch (PDOException $e) {
    echo 'DB接続エラー:' . $e->getMessage();
  }

  //   *forMAC
  //   $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', 'root');
  //
  // } catch (PDOException $e) {
  //   echo 'DB接続エラー:' . $e->getMessage();
  // }

   ?>
