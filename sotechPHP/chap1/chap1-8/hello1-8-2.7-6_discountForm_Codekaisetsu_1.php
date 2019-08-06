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
      <h3>見えない入力フォームを作る</h3>
      <p>POSTリクエストに割引率と単価を含めるには、</p>
      <p>ユーザーが値を入力するフォームを作る場合と同じようにinputタグで割引率と単価の入力部品を作る。</p>
      <p>そして<strong>inputタグのtype属性の値をhidden</strong>として<strong>見えない隠しフィードにする</strong>。</p>
      <p>そのあとで、先に値を設定しておいた割引率$discountと単価$tankaのそれぞれの値をvalueに設定する。</p>
      <p class="pdg"></p><!--  .pdg -->
      <p>ここでは入力フォームの作成をHTMLコードで直接書いているので、</p>
      <p><strong>「value="＜?php echo $discount ?>"」</strong></p>
      <p>のように値の入った変数を書き出す部分だけをPHPタグで囲う。</p>
      <pre class="gaiyo">
        // 隠しフィールドを作る
        ＜input type="hidden" name="discount" value="＜?php echo $discount ?>">
        ＜input type="hidden" name="tanka" value="＜?php echo $tanka ?>">
      </pre><!--  .gaiyo -->
      <a href="hello1-8-2.7-6_discountForm.php">フォームに戻る</a>




      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
