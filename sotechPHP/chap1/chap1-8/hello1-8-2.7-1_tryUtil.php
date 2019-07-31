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
  </style>
  <div class="main-contents">
    <h2>HTTPの基礎知識</h2>
    <p>※$_POSTを使う解説は長く複雑になるので、</p>
    <p>「hello1-8-2.7-1.php」からはまとめて記述はせずファイルで分けます。</p>
     <h3>ユーザ関数でhtmlspecialcharsを簡略化！名付けて 「es()」! -es()のコード解説-</h3>
     <p class="pdg"></p>
     <h3>実際にes()を使ってみよう</h3>
     <p>では、このes()を試してみよう。es()はrequire_once()で試そう。</p>
     <p>$myCodeには1個の文字列が入っており、$myArrayは複数の文字列が入っている配列である。</p>
     <pre class="gaiyo">
       // util.phpを読み込む
       require_once("hello1-8-2.7-1_util.php");

       // HTMLタグの入ったデータを用意する
       $myCode = "<h2>テスト1</h2>";
       $myArray = ["a"=>"<p>赤</p>","b"=>"<script>alert('hello')</script>"];

       // es()でHTMLエスケープして表示する
       echo '$myCodeの値',es($myCode); // 変数$myCodeの値をHTMLエスケープする
       echo '\n\n';
       echo '$myArrayの値';
       print_r(es($myArray)); // 配列$myArrayに入っているすべての値をHTMLエスケープする
     </pre>
     <pre class="zissyou">
      <?php
        // util.phpを読み込む
        require_once("hello1-8-2.7-1_util.php");

        // HTMLタグの入ったデータを用意する
        $myCode = "<h2>テスト1</h2>";
        $myArray = ["a"=>"<p>赤</p>","b"=>"<script>alert('hello')</script>"];

        // es()でHTMLエスケープして表示する
        echo '$myCodeの値',es($myCode); // 変数$myCodeの値をHTMLエスケープする
        echo "\n\n";
        echo '$myArrayの値';
        print_r(es($myArray)); // 配列$myArrayに入っているすべての値をHTMLエスケープする
       ?>
     </pre>
     <p>一見何も変わっていないが、注目すべきはデベロッパーツール。</p>
     <p>以下のコードがデベロッパーツールでは特殊文字になっている。</p>
     <div class="imgwrap"><img src="imgs/es().jpg" alt="es()"></div>
     <p>hahahahahaha</p>


    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
