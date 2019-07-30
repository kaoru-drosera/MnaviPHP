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
    <h3>受け取ったデータをHTLエスケープする -htmlspecialchars-</h3>

    <pre class="gaiyo">

      // function h($value){
      //   htmlspecialchars($value, ENT_QUOTES, "utf-8");
      // }
      // function eh($value){
      //   echo htmlspecialchars($value, ENT_QUOTES, "utf-8");
      // }
      // ↑htmlspecialcharsにはこれが便利かなと。
      // こうかは　ないみたいだ…
      // ↑間違えた。returnがいるらしかった。

      // ↓正しくは以下。
      function h($value){
        return htmlspecialchars($value, ENT_QUOTES, "utf-8");
      }
      // function eh($value){
      //   return echo htmlspecialchars($value, ENT_QUOTES, "utf-8");
      // }
      // ↑は使えなかった。echoは無理らしい。

        // GETリクエストのパラメータの値を受け取る
        $data = $_GET["data"];

        // URLをデコードする
        $data = rawurldecode($data);
        // 読めるように、エンコードを解除します(デコード);

        // htmlspecialcharsでXSS対策。
        // $data = htmlspecialchars($data, ENT_QUOTES, "utf-8");
        $data = h($data);

        echo "「{$data}」を受けとりました。";

    </pre><!--  .gaiyo -->
    <div class="codewrap">
      <p class="pdg"></p>
      <?php

      // function h($value){
      //   htmlspecialchars($value, ENT_QUOTES, "utf-8");
      // }
      // function eh($value){
      //   echo htmlspecialchars($value, ENT_QUOTES, "utf-8");
      // }
      // ↑htmlspecialcharsにはこれが便利かなと。
      // こうかは　ないみたいだ…
      // ↑間違えた。returnがいるらしかった。

      // ↓正しくは以下。
      function h($value){
        return htmlspecialchars($value, ENT_QUOTES, "utf-8");
      }
        // GETリクエストのパラメータの値を受け取る
        $data = $_GET["data"];

        // URLをデコードする
        $data = rawurldecode($data);
        // 読めるように、エンコードを解除します(デコード);

        // htmlspecialcharsでXSS対策。
        // $data = htmlspecialchars($data, ENT_QUOTES, "utf-8");
        $data = h($data);

        echo "「{$data}」を受けとりました。";

       ?>
       <p class="pdg"></p><!--  .pdg -->
    </div><!--  .codewrap -->
    <a href="hello1-8-2.6.php">戻る</a>

    <p class="pdg"></p><!--  .pdg -->

    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
