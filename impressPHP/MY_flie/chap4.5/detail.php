  <!DOCTYPE html>
  <html lang="ja" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>ep4-withデータベース</title>
    </head>
    <body>
      <?php
      require_once '/Applications/MAMP/db_config_by_impressPHP.php';
      try {
          if (!isset($_GET['id'])) throw new Exception('IDなし');
          //!issetはemptyとほぼ同義だが、
          // 「0の判定を行ったときに0を空とするのか、数値が入力されているのかどちらで判定するか」
          //で意味が違う
          if (!preg_match('/\A[0-9]{1,4}+\z/',$_GET['id'])) throw new Exception('ID不正');
          // preg_match()=正規表現により、値が期待するパターンにマッチするかどうか
          // preg_match('/\A[0-9]{1,4}+\z/',変数);=「４桁の整数」という意味

          $id = (int) $_GET['id'];
          if (($id < 1) || ($id) > 1000) throw new Exception('ID範囲外');
          // データベース接続
          $dbh = new PDO('mysql:host=localhost;dbname=db1_by_impressPHP;charset=utf8',$user,$pass);
          $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          // データベース操作
          $sql = "SELECT * FROM recipes WHERE id = ?";
          $stmt = $dbh->prepare($sql);//SQLの利用には準備が必要
          // プレースホルダーの値を入力
          $stmt->bindValue(1,$id, PDO::PARAM_INT);
          // セットしたSQLを実行
          $stmt->execute();
          // データベースの値を配列で格納する
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          // echoで表示内容を表示
          echo "料理名:" . htmlspecialchars($result['recipe_name'],ENT_QUOTES,'UTF-8') . "<br>\n";
          echo "カテゴリ:" . htmlspecialchars($result['category'],ENT_QUOTES,'UTF-8') . "<br>\n";
          echo "予算:" . htmlspecialchars($result['difficulty'],ENT_QUOTES,'UTF-8') . "<br>\n";
          echo "難易度:" . htmlspecialchars($result['budget'],ENT_QUOTES,'UTF-8') . "<br>\n";
          echo "作り方:<br>" . nl2br(htmlspecialchars($result['howto'],ENT_QUOTES,'UTF-8')) . "<br>\n";
          // データ出力の確認
          // print_r($result);
          // データベース終了
          $dbh = null;
          // var_dump($id);
      } catch (Exception $e) {
          echo "エラー発生:" . htmlspecialchars($e->getMessage(),ENT_QUOTES,'UTF-8') . "<br>";
          die();
      }
      ?>
      <br>
      <a href="http://localhost:8888/PHP_Learning_Pool/impressPHP/MY_flie/chap4.5/index.php">トップページへ戻る</a>
    </body>
  </html>
<!-- 以上、体験版はここまで！
本編は：
/Applications/MAMP/htdocs
で！ -->
<!-- URL:http://localhost:8888/impressPHP/MY_flie/chap4.5/detail.php -->
