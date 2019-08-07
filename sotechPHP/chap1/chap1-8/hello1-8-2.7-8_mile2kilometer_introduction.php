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
      <h3>フォームの作成と結果表示を同じファイルで行う</h3>
      <p class="pdg"></p><!--  .pdg -->
      <h3>一つのファイルでフォーム処理の入出力を行う</h3>
      <p>前例までの例ではフォーム入力のページと処理結果を表示するページを分けて2ページを使って表示していた。</p>
      <p>つまり、<strong>入力用のPHPファイルと出力用のPHPファイルを作っていた</strong>。</p>
      <p>だが、今回はこれを1つのファイルで書くことももちろんできる。</p>
      <p>これまでのサンプルでは、「出力ページのURLが直接開かれた場合にどう対応するか」に触れてきたが、</p>
      <p>入出力が同じURLになるので、その対処も自ずと組み込むことになる。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>マイル数を入力するとキロメートルに換算できるページ</h3>
      <p>次の例では、テキストフィールドにマイル数を入力するとキロメートルに換算した結果を</p>
      <p>同じページに表示する。換算結果が同じページに表示されるので、続けて別の値を換算することができる。</p>




      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
