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
      <h3>クーポンコードを使って割引率を決める</h3>
      <p>フォーム入力に限らずユーザから送られてくる値に不正がないかどうかはチェックする必要がある。</p>
      <p>割引率や価格などは直せ雨の値をそのまま受け渡さない工夫が必要である。</p>
      <p>この節では、前節で作った割引ページフォームを改良して、</p>
      <p>クーポンコードと商品IDを使って割引率と価格の改ざんに対処する方法を紹介するぞ。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>割引率と価格を安全に渡す</h3>
      <p>前節で隠しフィールドを説明するために使ったサンプルでは、</p>
      <p>割引率と価格を隠しフィールドの値にしてサーバ側にPOSTしていた。</p>
      <p>しかし、もし「割引率99%、価格1円」というように改竄されると大きな被害が出る。</p>
      <p>p295</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>重要な値を直接送らない</h3>
      <p>このような改竄に対応するために行わなければならないことは少なくないが、</p>
      <p>最低限行うべきことの一つに、<strong>「直接送らない」</strong>という対処の仕方がある。</p>
      <p>次のサンプルでは、割引率や商品にクーポンコードや商品IDをつけておき、</p>
      <p>サーバとやりとりする情報はそのような識別IDだけにする。</p>
      <p>実際に割引率を表示したり金額を計算したりする場合には、</p>
      <p>クーポンコードや商品IDを引数にして別ファイルに用意した配列やデータベースから取り出した値を使う。</p>
      <p>これならば正しいクーポンコードや商品IDがわからないと不正ができない。</p>
      <p>もし、発行されていないクーポンコードや商品IDの問い合わせがあったならばエラーとして処理する。</p>
      <p>p.296</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3></h3>





      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
