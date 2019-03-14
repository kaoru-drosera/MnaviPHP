<?php
  require_once '/Applications/MAMP/db_config_by_impressPHP.php';
try {
    if (empty($_GET['id'])) throw new Exception('ID不正');
    $id = (int) $_GET['id'];
    $dbh = new PDO('mysql:host=localhost;dbname=db1_by_impressPHP;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM recipes WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
} catch (Exception $e) {
    echo "エラー発生: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
    die();
}
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ep4-withデータベース</title>
  </head>
  <body>
    <h1>レシピの投稿</h1>
    <br>
    <form class="" action="update.php" method="post">
      <p>料理名:</p><input type="text" name="recipe_name" value="<?php echo htmlspecialchars($result['recipe_name'], ENT_QUOTES, 'UTF-8'); ?>"><br>
      <p>カテゴリ:</p>
      <select class="" name="category">
        <option value="">選択してください</option>
        <option value="1" <?php if ($result['category'] === 1) echo "selected" ?>>和食</option>
        <option value="2" <?php if ($result['category'] === 2) echo "selected" ?>>洋食</option>
        <option value="3" <?php if ($result['category'] === 3) echo "selected" ?>>中華</option>
      </select>
      <br>
      <p>難易度:</p><br>
      <input type="radio" name="difficulty" value="1" <?php if ($result['difficulty'] === 1) echo "checked" ?>>簡単
      <input type="radio" name="difficulty" value="2" <?php if ($result['difficulty'] === 2) echo "checked" ?>>普通
      <input type="radio" name="difficulty" value="3" <?php if ($result['difficulty'] === 3) echo "checked" ?>>難しい
      <br>
      <p>予算:</p>
      <input type="number" name="budget" value="<?php echo htmlspecialchars($result['budget'],ENT_QUOTES,'UTF-8'); ?>">円
      <br>
      <p>作り方</p>
      <textarea name="howto" rows="4" cols="40" maxlength="150"><?php echo htmlspecialchars($result['howto'],ENT_QUOTES,'UTF-8'); ?></textarea>
      <br>
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($result['id'], ENT_QUOTES, 'UTF-8'); ?>">
      <input type="submit" value="送信">
    </form>
      <br>
      <a href="http://localhost:8888/impressPHP/MY_flie/chap4/">トップページへ戻る</a>
  </body>
</html>


<!-- http://localhost:8888/impressPHP/MY_flie/chap3/edit.php -->
