<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ep4-withデータベース</title>
  </head>
  <body>

    <?php
    require_once '/Applications/MAMP/db_config_by_impressPHP.php';
    try{
      if (!isset($_GET['id'])) throw new Exception('IDなし');
      //!issetはemptyとほぼ同義だが、
      // 「0の判定を行ったときに0を空とするのか、数値が入力されているのかどちらで判定するか」
      //で意味が違う
      if(!preg_match('/\A[0-9]{1,4}+\z/',$_GET['id'])) throw new Exception('ID不正');
      // preg_match()=正規表現により、値が期待するパターンにマッチするかどうか
      // preg_match('/\A[0-9]{1,4}+\z/',変数);=「４桁の整数」という意味

      $id = (int) $_GET['id'];
      if(($id < 1) || ($id) > 1000) throw new Exception('ID範囲外');

      // データベース接続
      $dbh = new PDO('mysql:host=localhost;dbname=db1_by_impressPHP;charset=utf8',$user,$pass);
      $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      // データベース操作
      // 実行したい操作（削除）
      $sql = "DELETE FROM recipes WHERE id = ?";
      // どのデータを削除する…？
      $stmt = $dbh->prepare($sql);//準備
      $stmt->bindValue(1, $id, PDO::PARAM_INT);//削除したいデータを指定する
      $stmt->execute();//いざ、実行
      // データベース終了
      $dbh = null;
      echo "ID:" . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . "の削除が完了しました";
    } catch (Execution $e) {
      echo "エラー発生:" . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
      die();
    }
    ?>
    <br>
    <a href="http://localhost:8888/PHP_Learning_Pool/impressPHP/MY_flie/chap4.5/index.php">トップページへ戻る</a>

  </body>
</html>


<!-- URL:http://localhost:8888/impressPHP/MY_flie/chap3/delete.php -->
