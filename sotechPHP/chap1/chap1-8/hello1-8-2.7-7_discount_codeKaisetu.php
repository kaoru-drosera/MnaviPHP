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
      <h3>割引購入ページを作る</h3>
      <p>割引購入ページは前節のhiddenValue_default/discountForm.php(p.291)と基本は同じ。</p>
      <p>違いは2点。</p>
      <p>一つ目は、saleData.phpからセールデータを読み込んで</p>
      <p>クーポンコードと商品IDから割引率$discountと単価$tankaを設定する点である。</p>
      <p>二つ目は、フォームの隠しフィールドから</p>
      <p>割引率と単価を送信する際にもクーポンコードと商品IDを送る点である。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>クーポンコードから割引率、商品IDから価格をリセットする</h3>
      <p>前準備として$couponListと$priceListが書いてあるsaleData.phpを読み込んでおき、</p>
      <p>次にクーポンコード$couponCodeと商品ID$GoodsIDの値を設定する。</p>
      <p>そして、saleData.phpに定義してあるgetCouponRate()とgetPrice()を使って単価を求める。</p>
      <pre class="gaiyo">
        // セールデータを読み込む
        require_once("hello1-8-2.7-7_saleData.php");
        // クーポンコードと商品ID
        $couponCode = "ha45as";
        $GoodsID = "ax102";
        // 割引率と単価
        $discount = getCouponRate($couponCode);
        $tanka = getPrice($GoodsID);
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>POSTされたリクエストを処理する</h3>
      <p>POSTされたリクエストを処理するdocument.phpのコードも前節のhiddenValue_default/discount.phpと同じ。</p>
      <p>違いは隠しフィードから送られてきた値がクーポンコードと商品IDなので、</p>
      <p>共通のセールデータを読み込んで割引率と価格に置き換える必要がある点である。</p>
      <p>送られてきたクーポンコードと商品IDがセールデータに見つからなければ、POSTデータに改竄があったかも…？</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>該当するクーポンコード、商品IDがあるかどうかチェックする</h3>
      <p>入力フォームからPOSTされたクーポンコード、商品ID、そして個数を$_POSTから取り出して計算する流れはこれまでと同じ。</p>
      <p>まず、POSTされたクーポンコードと商品IDを$_POSTから取り出す。</p>
      <p>もし、値が設定されていない時は""を代入して変数を空に初期化しておく。</p>
      <p>値を空にしておけば続く値チェックでエラーとして処理される。</p>
      <pre class="gaiyo">
        // ここからでクーポンコードと商品IDを使って、割引率と単価を調べる
        // 隠しフィードから値を受け取る
        // エラーメッセージを入れる配列
        $errors = [];
        // クーポンコード
        if(isset($_POST['couponCode'])){
          $couponCode = $_POST['couponCode'];
        } else{
          // 未設定エラー
          $couponCode = "";
        }

        // 商品ID
        if(isset($_POST['GoodsID'])){
          $GoodsID = $_POST['GoodsID'];
        } else {
          $GoodsID = "";
        }
        // 隠しフィードから値を受け取るここまで
        //
        //
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <p>次に、POSTされたクーポンコードと商品IDから割引率と価格を調べるためにsaleData.phpを読み込み、</p>
      <p>続いてsaleData.phpで定義してあるgetCouponRate()とgetPrice()で</p>
      <p>クーポンコードと商品IDから割引率から単価を調べ、もしどちらかの値がNULLだったならば</p>
      <p>不正な操作があったと判断して続く処理を全てキャンセルする。</p>
      <p>この部分は先のdiscountForm.phpと共通の処理である。</p>
      <pre class="gaiyo">
        // セールデータを読み込む
        require_once("hello1-8-2.7-7_saleData.php");
        // クーポンコードと商品ID
        $couponCode = "ha45as";
        $GoodsID = "ax102";
        // 割引率と単価
        $discount = getCouponRate($couponCode);
        $tanka = getPrice($GoodsID);
        // 割引率と単価に値があるかどうかをチェックする
        if(is_null($discount) || is_null($tanka)){
          $err = '＜div class="error">不正な操作がありました＜/div><!--  .error -->';
          exit($err);
        }
      </pre><!--  .gaiyo -->
      <p>p304</p>



      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
