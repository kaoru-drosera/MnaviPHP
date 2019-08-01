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
     <h3>「送信する」ボタンで実行するコード</h3>
      <pre class="zissyou">
        <?php
          require_once("hello1-8-2.7-1_util.php");
          // ckenコードを読み込む。

          // 文字エンコードの検証。
          if(!cken($_POST)){
            $encoding = mb_internal_encoding();
            $err = "Encoding Error. The expected encoding is".$encoding;
            // エラーメッセージを出して、以下のコードを全てキャンセルさせる。
            exit($err);
          }
          // HTMLエスケープ(XSS対策);
          $_POST = es($_POST);
          // $_POSTで送られてきた値をesが通す、
          // いわば関所的な役割か。

          // エラーフラグ
          $isError = false;
          // 名前を取り出す
          if(isset($_POST['name'])){
            $name = trim($_POST['name']);
            if($name === ""){
              // 空白の時エラー
              $isError = true;
            }

          } else {
            // 未設定の時エラー
            $isError = true;
          }


         ?>
      </pre>

    <div class="zissyou">
      <?php if($isError): ?>
        <span class="error">名前を入力してください。</span>
        <form action="hello1-8-2.7-3_nameCheckForm.html" method="POST">
          <input type="submit" value="戻る">
        </form>
      <?php else: ?>
        <p>ドーモ、<?php echo $name; ?>=サン</p>
        <p>ニンジャ・スレイヤー　デス。</p>
      <?php endif; ?>
    </div><!--  .zissyou -->


    <pre class="gaiyo">
      require_once("hello1-8-2.7-1_util.php");
      // ckenコードを読み込む。

      // 文字エンコードの検証。
      if(!cken($_POST)){
        $encoding = mb_internal_encoding();
        $err = "Encoding Error. The expected encoding is".$encoding;
        // エラーメッセージを出して、以下のコードを全てキャンセルさせる。
        exit($err);
      }
      // HTMLエスケープ(XSS対策);
      $_POST = es($_POST);
      // $_POSTで送られてきた値をesが通す、
      // いわば関所的な役割か。

      // エラーフラグ
      $isError = false;
      // 名前を取り出す
      if(isset($_POST['name'])){
        $name = trim($_POST['name']);
        if($name === ""){
          // 空白の時エラー
          $isError = true;
        }

      } else {
        // 未設定の時エラー
        $isError = true;
      }


    </pre><!--  .gaiyo -->
    <div class="imgwrap">
      <img src="imgs/nameCheck_if_gaiyo.png" alt="nameCheck_if_gaiyo.png">
    </div><!--  .imgwrap -->



    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
