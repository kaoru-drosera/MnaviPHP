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
     <h3>「hello1-8-2.7-3_nameCheckForm.html」コード解説</h3>
     <p class="pdg"></p><!--  .pdg -->
     <h3>文字エンコードが正しくなければ続く処理をキャンセルする</h3>
     <p>まず最初に文字エンコードのチェックを行う。</p>
     <p>使用している「cken()」は前節で説明したutilで読み込んだもの。</p>
     <p>「cken()」を利用するために、前もって「hello1-8-2.7-1_util.php」を読み込んでおこう。</p>
     <p class="pdg"></p><!--  .pdg -->
     <p>cken($_POST)がfalseの時は、exit($err)を実行している。</p>
     <p>exit($err)を実行すると、$errで入れているエラーメッセージを表示し、</p>
     <p>いかに続くコードをの実行を全てキャンセルする。</p>
     <p>メッセージの最後の$encodingには、</p>
     <p>mb_internal_encoding()で調べた内部エンコーディングの文字エンコード名が入っている。</p>
     <p>英文なのは文字化け防止。</p>

    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
