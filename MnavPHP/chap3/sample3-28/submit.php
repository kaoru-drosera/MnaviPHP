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
  <?php
    $file = $_FILES['picture'];
   ?>
   ファイル名(name):<?php print($file['name'].'<br>'); ?>
   ファイルタイプ(type):<?php print($file['type'].'<br>'); ?>
   ファイル名(tmp_name):<?php print($file['tmp_name'].'<br>'); ?>
   ファイル名(error):<?php print($file['error'].'<br>'); ?>
   ファイル名(size):<?php print($file['size'].'<br>'); ?>

   <?php
    $ext = substr($file['name'], -4);
    // 「substr();」文字列から一部分だけを切り取るファンクションだ。
    // ２番目のパラメータの「-4」は「後ろから４番目」という意味で、
    // 以下if文で設定した拡張子を抜き出すことができるのだ。

    if($ext == '.gif' || $ext == '.jpg' || $ext == '.png'):
      $filePath = './user_img/' . $file['name'];
      // 本の通り、「user_img」というフォルダを「sample3-28」のフォルダに
      // 実際に作ってみたぞ！
      // このように、画像の送信先のフォルダには「実際にあるもの」を設定しないと
      // エラーを吐くぞ！

      // ファイルアップロードはセキュリティ的に危険なので、
      // このように拡張子は限定しておくべきなのだ。
      //
      // 多くの種類をアップロードできるようにすればするほど
      // セキュリティ面での危険は増える。
      // 特に「word」「excel」などのoffice系は危険で、
      // 「マクロウイルス」というウイルスを仕込んでいることも多いのだ。

      $success = move_uploaded_file($file['tmp_name'], $filePath);

      if($success):
    ?>
    <img src="<?php print($filePath); ?>">
    <br>
    <?php else: ?>
    * ファイルのアップロードに失敗しました
    <?php endif; ?>

  <?php else: ?>
    ＊　拡張子が.gif, .jpg, .pngのいずれかのファイルをアップロードしてください
  <?php  endif ?>

  できた！！！
  シアンちゃァァァァァァァァァァァァァァァァァァァァァァァァァァァァアあん！！！！！！！！！
</body>
</html>
