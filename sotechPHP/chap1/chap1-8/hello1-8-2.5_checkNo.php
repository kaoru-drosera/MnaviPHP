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
    <h3>送信フォームを作る</h3>

    <pre class="gaiyo">
      // フォーム入力の値を得る(単価と個数)
      $tanka = $_POST["tanka"];
      $kosu = $_POST["kosu"];
      // →formで入力された値が、nameに応じてpostで送られてくる。
      // これを変数に取る。

      // 計算する
      $price = $tanka * $kosu;

      //表示する
      $tanka = number_format($tanka);
      $price = number_format($price);
      echo "単価{$tanka}円 ✖︎ {$kosu}個　は","\n", "{$price}円です。"
    </pre><!--  .gaiyo -->
    <div class="codewrap">
      <p class="pdg"></p>
      <?php

        // GETリクエストのパラメータの値を受け取る
        $no = $_GET["no"];
        // GETされた値を取り出す

        // 番号リスト
        $nolist = [3,5,7,8,9];

        // 検索する
        if(in_array($no,$nolist)){
          echo "{$no}はありました。";
        } else {
          echo "{$no}は見つかりませんでした。";
        }

       ?>
       <p class="pdg"></p><!--  .pdg -->
    </div><!--  .codewrap -->
    <a href="hello1-8-2.5.php">戻る</a>

    <p class="pdg"></p><!--  .pdg -->
    <h3>GETされた値を調べる</h3>
    <p>GETされた値は$_GETグローバル変数に入る。</p>
    <p>$_POSTと同様に<strong>$_GETもフォームのinput項目の値の配列になる</strong>。</p>
    <p>入力された各値は、<strong>name属性に付けた名前をキーにして配列$_GETに保存される</strong>。</p>
    <p>このファイルにおいて、番号を入力するinputタグのnameには"no"という名前をつけている。</p>
    <p>そのため、$_GET["no"]でアクセスできる。配列の中に番号があるかどうかは「in_array()」</p>
    <p>で判断している。</p>
    <p class="pdg"></p>

    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
