<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>難関・ファイルアップロードの受信を学ぶ</h2>
  <h3>ファイルアップロードを受信する</h3>

  <form class="" action="submit.php" method="post" enctype="multipart/form-data">
    <!--
    「enctype」は「encode type」のこと。
    「multipart/form-data」は、「これまでの文字情報のみのフォームに加えて、
    ファイルをそのまま送信することができる」形式。
    ファイルアップロードには必ずこの形式が必要。

    そして、ファイルアップロードでは「method」は「POST」のみ。
   -->
   <input type="text" name="ok" value=""><br>
   写真:<input type="file" name="picture" value=""><br>
   <input type="submit" value="送信する">

  </form>

</body>
</html>
