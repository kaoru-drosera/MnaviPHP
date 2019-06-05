<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>やっと始まり第6章.php</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="../../bootstrap.min.css">
</head>
<body>
  <p>次にフォームに必要事項をご入力ください。</p>
  <form action="" methods="post" enctype="multipart/form-data">
    <dl>
      <dt>ニックネーム<span class="required">必須</span></dt>
      <dd><input type="text" class="" name="name" size="35" maxlength="225"></dd>
      <dt>メールアドレス<span class="required">必須</span></dt>
      <dd><input type="text" class="" name="email" size="35" maxlength="225"></dd>
      <dt>パスワード<span class="required">必須</span></dt>
      <dd><input type="password" class="" name="password" size="10" maxlength="20"></dd>
      <dt>写真など</dt>
      <dd><input type="file" class="" name="image" size="35" maxlength=""></dd>
    </dl>
    <div><input type="submit" value="入力内容を確認する"></div>
  </form>
</body>
</html>
