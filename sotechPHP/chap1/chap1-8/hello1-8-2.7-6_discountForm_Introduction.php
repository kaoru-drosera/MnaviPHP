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
      <h3>はじめに</h3>
      <p>hiddenタイプを利用することで、</p>
      <p>フォームでユーザが入力する値とは別に用意した値をPOSTリクエストに含ませることができる。</p>
      <p>今回は戻るボタンでフォームページに戻ったときに入力しておいた値を初期値として表示する方法を紹介だ。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>隠しフィールドでPOSTする</h3>
      <p class="pdg"></p><!--  .pdg -->
      <h3>隠しフィールドを使う</h3>
      <p>フォームのinputタグのtype属性で"hidden"を指定すると見えない隠しフィールドになる。</p>
      <p>この機能を利用することで、<strong>ユーザ入力ではない値をPOSTリクエストに含める</strong>ことができる。</p>
      <p>次のフォームでは「割引率」「単価」「個数」の3つの値をPOSTするが、</p>
      <p>ユーザーに入力してもらうのは「個数」のテキストフィールドだけである。</p>
      <a href="hello1-8-2.7-6_discountForm.php">早速見てみよう！</a>




      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
