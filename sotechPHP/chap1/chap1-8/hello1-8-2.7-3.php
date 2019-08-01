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
     <h3>フォームの入力データチェック</h3>
     <p>入力フォームの処理では、「間違いなく入力したかどうか」をユーザ本人に確認してもらったり、</p>
     <p>入力忘れがないかどうか…といったことをチェックしたりする必要がある。</p>
     <p>文字数を調べる、正規表現を使ってチェックする、文字種を変換する…といった操作は</p>
     <p>chap5の「文字列」で詳しく取り上げるので参照のこと。</p>
     <p class="pdg"></p>
     <h3>値が入っているかどうか</h3>
     <p>フォームに入力された値を利用する前に、「値が妥当かどうか、そもそも値が入っているかどうか」</p>
     <p>を調べる必要がある。</p>
     <p>次の例では、まず名前を入力するフォームを「nameCheckForm.php」で表示し、</p>
     <p>「送信する」ボタンで「nameCheck.php」で実行する。</p>
     <p>例えば、名前に「井上」が入力されていたなら、その名前を使って</p>
     <p>「こんにちは、『井上』さん」</p>
     <p>のように表示する。</p>
     <p>名前が入力されていなかったならば、再び「nameCheckForm.php」を表示する「戻る」ボタンを表示。</p>



    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
