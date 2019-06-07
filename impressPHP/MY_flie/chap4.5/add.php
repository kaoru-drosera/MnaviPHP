  <!DOCTYPE html>
  <html lang="ja" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>ep4-withデータベース</title>
    </head>
    <body>
      <h1>入力フォーム</h1>
      <br>
      <form action="add.php">

        <?php
        require_once '/Applications/MAMP/db_config_by_impressPHP.php';
        $recipe_name = $_POST['recipe_name'];
        $howto = $_POST['howto'];
        $category = (int) $_POST['category'];
        $difficulty = (int) $_POST['difficulty'];
        $budget = (int) $_POST['budget'];
        try{
          // エラーチェック
          include_once '/Applications/MAMP/error_check_by_impressPHP.php';
          // データベース接続
          $dbh = new PDO('mysql:host=localhost; dbname=db1_by_impressPHP;charset=utf8', $user, $pass);
          $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          // データベースにSQLをセット
          $sql = "INSERT INTO recipes (recipe_name, category, difficulty, budget, howto) VALUES(?, ?, ?, ?, ?)";
          $stmt = $dbh->prepare($sql);
          $stmt->bindValue(1, $recipe_name, PDO::PARAM_STR);
          $stmt->bindValue(2, $category, PDO::PARAM_INT);
          $stmt->bindValue(3, $difficulty, PDO::PARAM_INT);
          $stmt->bindValue(4, $budget, PDO::PARAM_INT);
          $stmt->bindValue(5, $howto, PDO::PARAM_STR);
          $stmt->execute();
          // データベース終了
          $dbh = null;

          echo "レシピの登録が完了しました";
        } catch (Execution $e) {
          echo "エラー発生:" . htmlspecialchars($e->getMessage(),ENT_QUOTES, 'UTF-8') . "<br>";
          die();
        }
        ?>
        <br>
        <a href="http://localhost:8888/PHP_Learning_Pool/impressPHP/MY_flie/chap4.5/index.php">トップページへ戻る</a>
      </form>
    </body>
  </html>
<!-- 以上、体験版はここまで！
本編は：
/Applications/MAMP/htdocs
で！ -->
<!-- URL:http://localhost:8888/impressPHP/MY_flie/chap4/index.php -->
