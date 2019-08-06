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
      <h3>「計算する」ボタンで実行するコード</h3>
      <p>「計算する」ボタンで実行するdiscount.phpでは、</p>
      <p>POSTされた値を$_POSTで受け取って処理する。</p>
      <p>hiddenタグを使ってPOSTされたデータも他のデータとの区別もない。</p>
      <p>ここの値は$_POSTから次のように変数に取り出すこともできる。</p>
      <p>見えないフィールドからの入力であっても改竄の危険はあるので入力チェックもする。</p>
      </pre><!--  .zissyou -->
      <pre class="gaiyo">
        ＜?php
          require_once("hello1-8-2.7-1_util.php");

          // エラーメッセージを入れる配列
          $errors = [];
          // 割引率の入力値
          if(isset($_POST['discount'])){
            $discount = $_POST['discount'];
            // 入力値のチェック
            if(!is_numeric($discount)){
              // 数値でないときエラー
              $errors[] = "割引率のエラー";
            }
          } else{
            // 未設定エラー
            $errors[] = "割引率が未設定";
          }

          // 単価の入力値
          if(isset($_POST['tanka'])){
            $tanka = $_POST['tanka'];
            // 入力値のチェック
            if(!is_numeric($_POST['tanka'])){
              $errors[] = "単価のエラー";
            }
          } else {
            $errors[] = "単価が未設定";
          }

         ?>
      </pre><!--  .gaiyo -->



      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
