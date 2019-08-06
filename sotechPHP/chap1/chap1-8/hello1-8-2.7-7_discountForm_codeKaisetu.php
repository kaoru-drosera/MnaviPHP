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
      <h3>割引購入ページを作る</h3>
      <p>割引購入ページは前節のhiddenValue_default/discountForm.phpとほぼ同じ。</p>
      <p>違う点は2つ。</p>
      <p>一つ目は、saleData.phpからセールデータを読み込んで</p>
      <p>クーポンコードと商品IDから割引率$discountと単価$tankaを設定する点である。</p>
      <p>2つ目は、フォームの隠しフィールドから割引率と単価を送信する際にも</p>
      <p>クーポンコードと商品IDを送る点である。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>クーポンコードから割引率、商品IDから価格をセットする</h3>
      <p>前準備として$couponListと$priceListが書いてあるsaleData.phpを読み込んでおき、</p>
      <p>次にクーポンコード$couponCodeと商品ID$GoodsIDの値を設定する。</p>
      <p>そして、saleData.phpに定義してある</p>
      <p>getCouponRate()とgetPrice()を使って割引率を単価を求める。</p>
      <pre class="gaiyo">
        // データファイルを読み込む
        require_once("hello1-8-2.7-7_saleData.php");
        // クーポンコードと商品ID
        $couponCode = "ha45as";
        $GoodsID = "ax102";

        // 割引率と単価
        $discount = getCoupotRate($couponCode);
        $tanka = getPrice($GoodsID);
        // クーポンコードと商品IDから割引率と単価を求める
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>不正なコードが使われたなら警告して処理をキャンセルする</h3>
      <p>$discountと$tanka二読み込んだ値のどちらかがNULLだった時は、</p>
      <p>不正が使われたことになるので、</p>
      <p>exit()を使って「不正な操作がありました」というエラーメッセージを出して</p>
      <p>続くコードの処理を全てキャンセルする。</p>
      <pre class="gaiyo">
        // 割引率と単価に値があるかどうかチェックする
        if(is_null($discount) || is_null($tanka)){
          // エラーメッセージを出して、以下のコードを全てキャンセルする
          $err = '＜div class="error">不正な操作がありました。＜/div><!--  .error -->';
          exit($err);
        }
      </pre><!--  .gaiyo -->
      <p class="pre"></p><!--  .pre -->
      <h3>隠しフィールドの値にクーポンコードと商品IDを設定する</h3>
      <p>値が揃ったところで入力フォームを作ろう。</p>
      <p>入力フォームには2つの隠しフィールドと個数を入力するフィールドがある。</p>
      <p>この部分は前節と同じだが、重要なのは</p>
      <p><strong>2つの隠しフィールドでは割引率の代わりに</strong></p>
      <p><strong>クーポンコード$couponCode,価格の代わりに商品ID$GoodsIDを</strong></p>
      <p><strong>valueに設定している</strong>ところ。</p>
      <p>name属性も<strong>"couponCode"と"GoodsID"</strong>にするところ。</p>
      <pre class="gaiyo">
        <!-- 隠しフィールドにクーポンコードと商品IDを設定してPOSTする。前のコードに変更あり -->
          ＜input type="hidden" name="couponCode" value="＜?php echo $couponCode ?>">
          ＜input type="hidden" name="GoodsID" value="＜?php echo $GoodsID ?>">
          <!-- 割引率は直接書かず、＜?php echo ?>で表示させる -->
          <!-- ↑変数に入っている値をPOSTする -->
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <p>検証を使ってソースコードを見ると、隠しフィールドに設定されている値も見ることができるが、</p>
      <p>ソースコードには参照しているセールデータに関する記述はない。</p>
      <p>フォームのvalueにはクーポンコードや商品IDが入っているので、</p>
      <p>割引率や価格を直接書き換えるといった不正を防ぐことができる。</p>
      <p>p300</p>

      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
