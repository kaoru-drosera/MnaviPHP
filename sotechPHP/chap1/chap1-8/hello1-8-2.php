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

    <p>HTMLで送信フォームを作り、フォームのアクションでPHPプログラムを実行する。</p>
    <p>formタグのmethod属性でPOSTまたはGETを指定し、action属性で実行するPHPファイルを指定するのだ。</p>

    <h3>テキストフィールドの値をPOSTメソッドで送信する</h3>
    <form action="hello1-8-2_calc.php" method="POST">
      <!-- <ul>
        <li><label for="tanka">単価:  <input type="number" name="tanka" id="tanka"></label></li>
        <li><label for="kosu">個数:  <input type="number" name="kosu" id="kosu"></label></li>
        <li><label for="submit1"><input type="submit" value="計算開始！" id="submit1"></label></li>
      </ul> -->
      <ul>
        <li><label>単価:  <input type="number" name="tanka" ></label></li>
        <li><label>個数:  <input type="number" name="kosu" ></label></li>
        <li><label><input type="submit" value="計算開始！" ></label></li>
      </ul>
    </form>
    <p class="pdg"></p><!--  .pdg -->
    <h3>POSTされた値を調べる</h3>
    <p><strong>POSTされた値は$_POSTグローバル変数に入る。</strong></p>
    <p>$_POSTはフォームのinput項目の値の配列になる。</p>
    <p>入力された各値は、name属性につけた名前をキーにして配列$_POSTに保存される。</p>
    <p>先の「hello1-8-2.php」において、</p>
    <p>各inputタグのname属性で「単価:」には"tanka"、「個数:」には"kosu"</p>
    <p>という名前が付けてあるので、単価は$_POST["tanka"]、個数は["kosu"]でアクセスが可能。</p>
    <p>number_format()は、数値を3ケタ位取りして表示する関数である。</p>

    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
