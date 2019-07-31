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
     <h3>実際にes()を作ってみよう</h3>
     <p>実際に作ってみよう。こんな感じに。</p>
     <pre class="gaiyo">
       // 引数に対してhtmlspecialchars()を実行するes()

       //XSS対策のためのHTMLエスケープ
       function es($data, $charset){
         if(is_array($data)){
           // 再帰呼び出し
           return array_map(__METHOD__, $data);
           // 配列の場合は、値を1づつ引数にして、
           // 再帰呼び出しをする

         } else {
           // HTMLエスケープを使う
           return htmlspecialchars($data, ENT_QUOTES, $charset);

         }
       }
     </pre>
     <p class="gaiyo"></p>
     <p>引数<strong>$dataをis_arrayでチェックし、</strong></p>
     <p>$dataの値が配列ではない場合はそのままhtmlspecialchars()を実行し、</p>
     <p>配列ならばarray_map()を使って値を順に<strong>__METHOD__</strong>、つまりesで処理する式をreturnする。</p>
     <p>これは<strong>「再帰呼び出し」</strong>という方法である。</p>
     <p>こうすることで、es()は引数が1この値でも配列でもhtmlspeialchars()で処理することができる。</p>
     <p class="pdg"></p>
     <p><strong>「__METHOD__」</strong>は、<strong>「現在実行中のメソッド自身を示す特殊な定数(マジック定数)」</strong>である。</p>
     <p>ここでは「es()」を指すので、esのなかでesを使っていることになる。</p>
     <p>この手法が、<strong>「再帰呼び出し」</strong>である。</p>


    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
