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
     <p>PHPでフォームの値を送る時には、必ず「htmlspecialchars」を使うこと。</p>
     <p>その理由は今まではなんとなくだったが、</p>
     <p>それは「XSS(クロスサイトスプリクティング)」を防ぐためである。</p>
     <p>要するに、htmlspecialchars処理を行っていないフォームはHTMLやjsコードを送り込まれ、</p>
     <p>GETやPOSTのURLを書き換えられる不正アクセスをやられるからである。</p>
     <pre class="gaiyo">
       // htmlspecialchars公式

      htmlspecialchars(値,ENT_QUOTES,"UTF-8");

      // 第二引数には必ず「ENT_QUOTES」を入れる
     </pre>
     <p></p>
     <p class="pdg"></p>

     <h4>丸腰コードにXSSが来襲！</h4>
     <pre class="gaiyo">

       // URLをエンコードする
       $data = "<h1>HA-HA-HA!</h1>";
       $data = rawurlencode($data);


       // クエリ文字列のリンクを作る
       $url = "hello1-8-2.6_checkDate_outHSC.php";
       echo "<a href={$url}?data={$data}>","送信する","</a>";

     </pre>
     <?php

     // URLをエンコードする
     $data = "<h1>HA-HA-HA!</h1>"."<script>alert('ah-ha-ha-ha-ha!');</script>";
     $data = rawurlencode($data);


     // クエリ文字列のリンクを作る
     $url = "hello1-8-2.6_checkDate_outHSC.php";
     echo "<a href={$url}?data={$data}>","送信する","</a>";

      ?>
      <p class="pdg"></p>
     <h4>htmlspecialcharsを導入！</h4>
     <pre class="gaiyo">

       // URLをエンコードする
       $data = "<h1>HA-HA-HA!</h1>";
       $data = rawurlencode($data);


       // クエリ文字列のリンクを作る
       $url = "hello1-8-2.6_checkDate.php";
       echo "<a href={$url}?data={$data}>","送信する","</a>";

     </pre>
     <?php

       // URLをエンコードする
       $data = "<h1>HA-HA-HA!</h1>"."<script>alert('ah-ha-ha-ha-ha!');</script>";
       $data = rawurlencode($data);


       // クエリ文字列のリンクを作る
       $url = "hello1-8-2.6_checkDate.php";
       echo "<a href={$url}?data={$data}>","送信する","</a>";

      ?>



    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
