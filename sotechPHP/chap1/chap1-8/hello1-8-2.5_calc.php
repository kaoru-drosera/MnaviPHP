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
        // フォーム入力の値を得る(単価と個数)
        $tanka = $_POST["tanka"];
        $kosu = $_POST["kosu"];
        // →formで入力された値が、nameに応じてpostで送られてくる。
        // これを変数に取る。

        // 計算する(合計金額)
        $price = $tanka * $kosu;

        //表示する(3ケタ取り)
        $tanka = number_format($tanka);
        $price = number_format($price);
        echo "単価{$tanka}円 ✖︎ {$kosu}個　は","\n", "{$price}円です。";
       ?>
       <p class="pdg"></p><!--  .pdg -->
    </div><!--  .codewrap -->
    <a href="hello1-8-2.php">戻る</a>

    <h3>POSTされた値を調べる</h3>
    <p><strong>POSTされた値は$_POSTグローバル変数に入る。</strong></p>
    <p>$_POSTはフォームのinput項目の値の配列になる。</p>
    <p>入力された各値は、name属性につけた名前をキーにして配列$_POSTに保存される。</p>
    <p>先の「hello1-8-2.5.php」において、</p>
    <p>各inputタグのname属性で「単価:」には"tanka"、「個数:」には"kosu"</p>
    <p>という名前が付けてあるので、単価は$_POST["tanka"]、個数は["kosu"]でアクセスが可能。</p>
    <p><strong>number_format()</strong>は、数値を3ケタ位取りして表示する関数である。</p>

    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
