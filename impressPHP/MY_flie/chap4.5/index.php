<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>レシピ一覧 by ep47</title>
  </head>
  <body>
    <h1>レシピ一覧</h1>
    <a href="SN＿form.html">レシピを登録する</a>
    <?php
    try{
      // データベース接続
      $user = "uzuki";
      $pass = "YZJAoDkBp2y3gA7x";
      $dbh = new PDO('mysql:host=localhost;dbname=db1_by_impressPHP;charset=utf8', $user, $pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // データベース操作
      $sql = "SELECT * FROM recipes";
      $stmt = $dbh->query($sql);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // print_r($result);
      echo "<table>\n";
      echo "<tr>\n";
      echo "<th>料理名</th> <th>予算</th> <th>難易度</th>\n";
      echo "</tr>\n";
      foreach ($result as $row) {
        echo "<tr>\n";
        echo "<td>" . htmlspecialchars($row['recipe_name'],ENT_QUOTES,'UTF-8') . "</td>\n";
        echo "<td>" . htmlspecialchars($row['budget'],ENT_QUOTES,'UTF-8') . "</td>\n";
        echo "<td>" . htmlspecialchars($row['difficulty'],ENT_QUOTES,'UTF-8') . "</td>\n";
        echo "<td>\n";
        echo "<a href=detail.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">詳細</a>\n";
        echo " | <a href=edit.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">変更</a>\n";
        echo " | <a href=delete.php?id=" . htmlspecialchars($row['id'],ENT_QUOTES,'UTF-8') . ">削除</a>\n";
        echo "</td>\n";
        echo "</tr>\n";
      }
      echo "</table>\n";

      // データベース終了（接続を切る）
      $dbh = null;
    } catch (Exception $e) {
      echo "エラー発生:" . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
    }
    ?>
  </body>
</html>
<!-- 以上、体験版はここまで！
本編は：
/Applications/MAMP/htdocs
で！ -->
<!-- URL:http://localhost:8888/impressPHP/MY_flie/chap4/index.php -->
