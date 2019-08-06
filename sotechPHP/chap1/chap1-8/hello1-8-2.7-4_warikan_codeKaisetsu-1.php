<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>webページを作成するにあたっての知識(?)</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="">
</head>
<body>
  <style>
  *{
    /* margin: 0; */
  }
  .table1 thead th{
    background-color: black;
    color: white;
  }
  .form1{
    background-color: darkgray;
  }
  .input[type="submit"]{
    border: none;
    font-size: 16px;
  }
  .pdg{
    padding-top: 50px;
  }
  .gaiyo{
    background-color: rgb(255, 227, 227);
  }
  .zissyou{
    background-color:rgb(219, 255, 0) ;
  }
  .imgwrap{
    max-width: 800px;
    width: 100%;
  }
  .imgwrap img{
    width: 100%;
  }

  /* @charset "UTF-8"; */
  div{
    margin :1em;
  }
  li{
    list-style-type: none;
    margin-bottom: 1em;
  }
  ol > li{
    list-style-type: decimal;
    margin-bottom : 0;
  }
  a{
    color: #5e78c1;
    text-decolation: none;
  }
  a:hover {
    color :#b04188;
    text-decoration: underline;
  }
  .error{
    color: #f00;
  }


  </style>
    <div class="main-contents">
      <h2>HTTPの基礎知識</h2>
      <p>※$_POSTを使う解説は長く複雑になるので、</p>
      <p>「hello1-8-2.7-1_util.php」からはまとめて記述はせずファイルで分けます。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>フォームの値が数値かどうか確認する</h3>
      <p>フォームに数値として使える値が入力されたかどうかをチェックしたい時は、</p>
      <p><strong>「ctype_digit()」</strong>または<strong>「is_numeric()」</strong>を使って判定できる。</p>
      <p>フォームからの入力は文字列になるので、<strong>「is_float()」</strong>や<strong>「is_int」</strong>はそのままでは使えない。</p>
      <p class="pdg"></p><!--  .pdg -->
      <p>ctype_digitはすべての文字が0-9の数字かどうかを判定する。←できなかったから不等号使ってなんとかしたぞ！どーしてくれるよおんどれ！</p>
      <p>0以上の整数はtrueになるが、0やマイナスの値はfalseになる。</p>
      <p><strong>is_numeric()</strong>は小数点や+-符号を含んだ数字、さらに16進数表記の文字列を数値と判断してtrueを返す。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>値をチェックしてエラーメッセージを登録していく</h3>
      <p>入力値にエラーがあったならば最後にエラーメッセージを表示したいので、</p>
      <p>まず最初にメッセージを追加していく配列$errorを初期化して用意しておく。</p>
      <pre class="gaiyo">
        //
        // エラーメッセージを入れる配列
        $errors = [];
        //
        //
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <p>POSTされた合計金額が整数かどうかは、ctype_digit()を使ってチェックできる。←できなかったぞお前ー！</p>
      <p><strong>0以上の整数ではないとき「合計金額を整数で入力してください」というメッセージを$errorsに返す。</strong></p>
      <pre class="gaiyo">
        //
        //
        // 合計金額のチェック。
        // ここでPOSTされた合計金額をチェックする  「$_POST['goukei']」?
        if(isset($_POST['goukei'])){
          $goukei = $_POST['goukei'];
          // if(!ctype_digit($goukei)){
          // ↑ctype_digit意味なーい！反応しない！試しに合計金額で試したら
          // そのまま０円でイケちゃったよー！
          if($goukei <= 0){
            // 0以上の整数でないときはエラー
            $errors[] = "合計金額を0以上の整数で入力してください";
          }
        } else {
          $errors[] = "合計金額が未設定";
        }
        // ここでPOSTされた合計金額をチェックする
        //
        //
      </pre><!--  .gaiyo -->
      <a href="hello1-8-2.7-4_warikan_codeKaisetsu.php">説明に戻る</a>
      <div>
        <a href="hello1-8-2.7-4_warikanForm_introduction.php">最初の説明</a>
        |
        <a href="hello1-8-2.7-4_warikan_codeKaisetsu-2.php">フォームの値が0でないか、-でないかを確認する</a>
      </div>




      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
