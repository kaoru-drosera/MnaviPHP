<?php
// PHPでのメール送信には以下のコードを使用する。
//
// mb_send_mail(送り先のメールアドレス,メールタイトル,本文,送り主のメールアドレス);

$email = 'fdsdteolx@gmail.com';

mb_language('japanese');
mb_internal_encoding('UTF-8');
// ここで、PHPの文字コードや言語設定を行う。
// 文字コードと言語設定は正しく設定しておく必要がある。
// 本当なら「php.ini」で変更できればいいが、できないことも多いので
// ここで一時的に変更。

// 以下と先頭で、mb_send_mailファンクションに入力する内容を
// 変数にまとめる。
$from = 'noreply@example.com';
// 送り先や送り主は「日本語表記」にすることも可能。(from:しょうが太郎…と言った具合)
// 以下のコードだ。

// $from = mb_encode_mimeheader(mb_conver_encording("しょうが太郎", "JIS", "UTF-8"))."support@h2o-space.com";


// 私がわかる範囲で説明できる
// おそらくよくわかる解説：

// 「mb_encode_mimeheader()」:
// 名前を指定する際には、「MIMEヘッダ」と呼ばれる形式に変更する必要がある。
// 「mb_conver_encording()」:
// 「MIMEヘッダ」に変更する際に文字コードを「JIS」に変更する必要があるのと、
// 「UTF-8」を設定するのに必要だから。

// 解説ここまで

$subject = 'よくわかるPHPの教科書';
$body = 'このメールは、「よくわかるPHPの教科書」から送信しています。やっほー';

$success = mb_send_mail($email,$subject,$body,$from);
// 送るだけでなく、「送信に成功したかどうかを戻り値で返す」ことも可能。
// 以下マニュアルも参照のこと。
// http://php.net/manual/ja/function.mb-send-mail.php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>よくわかるPHPの教科書</title>
</head>
<body>
  <h2>mb_send_mail等を学ぶ</h2>
  <h3>メールを送信する</h3>
  <pre>
    <!-- 以下コードで、メッセージを表示する部分でif構文を使って成功したかどうかを改めて取得し、
    「送信しました」あるいは「送信に失敗しました」というメッセージを表示する。 -->
    <?php if($success): ?>
      電子メールを送信しました。メールボックスを確認してみてください。
    <?php else: ?>
      電子メールを送信に失敗しました。webサーバーの設定などをご確認ください。
    <?php endif; ?>
  </pre>
  <p>あ、でも動作確認にはレンタルサーバーいるんだっけ！</p>
  <p>俺ちゃんてばうっかりさーん！</p>
</body>
</html>
