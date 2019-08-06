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
      <p class="pdg"></p><!--  .pdg -->
      <h3>割引購入ページと金額ページの両方で共有するデータファイル</h3>
      <p class="pdg"></p><!--  .pdg -->
      <h3>不正なクーポンコード、商品IDといあわせがあったらえらーする(変換機能が死んだ)</h3>
      <p>getCoupotRate()とgetPrice()では引数のクーポンコード/商品IDで価を調べる前に、 </p>
      <p>array_key_exists()を使って問い合わせがあったクーポンコード/商品IDのキーが配列に存在するかどうかを</p>
      <p>事前にチェックする。そして、結果がfalseだった時はNULL(未定義)を返す。</p>
      <p>コードは以下の通り。</p>
      <pre class="gaiyo">
        $couponList = ["nf23qw"=>0.75, "ha45as"=>0.8 "hf56zx"=>8.5];
        $priceList = ["ax101"=>2300, "ax102"=>2900];
        // このデータを外側のファイルやデータベースからの読み込みにするとさらに安全

        // くーぽんこーどで割引率を調べて返す
        function getCoupotRate($code){
          global $couponList;
          // 該当するクーポンコードがあるかどうかをチェックする
          $isCouponRate = array_key_exists($code, $couponList);
          if($isCouponRate){
            return $couponList[$code];
            // 割引率を返す
          } else {
            // みつからなかったらNULLを返す
            return NULL;
          }
        }

        // 商品IDで価格を調べて返す
        function getPrice($id){
          global $priceList;
          // 該当する商品IDがあるかどうかチェックする
          $isGoodsID = array_key_exists($id, $priceList);
          if($isGoodsID){
            return $priceList[$id];
            // ↑価格を返す
          } else {
            // 見つからなかったらNULLを返す
            return NULL;
          }
        }
      </pre><!--  .gaiyo -->





      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
