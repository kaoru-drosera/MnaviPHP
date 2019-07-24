<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>

 <?php
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>論理式？</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
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
  </style>
  <div class="main-contents">
    <h3>ローカルスコープとグローバルスコープ</h3>
    <p>今から、「『price()』関数の誤った例」をやってみる。</p>
    <p>「250*2=500」となるはずが、「250*2=0」となってしまった例である。</p>
    <pre>
      $howMany = 2;
      // 個数
      function calcPrice(){
        // 料金を計算する
        $price = 250 * $howMany;
        // ↑のように、$howManyはpriceの内部でだけ有効な「ローカル変数」である。
        //　外に同じ名前の関数があっても、関数内で計算があった時は別扱いするようだ。
        echo "{$price}円です";
      }
      echo "{$howMany}個で";
      calcPrice();
    </pre>
    <pre>
      <?php
      $howMany = 2;
      // 個数
      function calcPrice(){
        // 料金を計算する
        $price = 250 * $howMany;
        // ↑のように、$howManyはpriceの内部でだけ有効な「ローカル変数」である。
        //　外に同じ名前の関数があっても、関数内で計算があった時は別扱いするようだ。
        echo "{$price}円です";
      }
      echo "{$howMany}個で";
      calcPrice();
      ?>
    </pre>
    <p>↑このように、関数が正常に機能しなくなるのだ。</p>
    <p>この場合、「global」関数を使う必要がある。</p>
    <p>以下のように使うのだ。</p>
    <pre>
      global $変数名
    </pre>
    <p>global変数を使って、以上の式を書き直してみよう。</p>
    <pre>
      $howMany = 2;
      // 個数
      function calcPrice2(){
        // 料金を計算する
        global $howMany;
        // $howManyをグローバル関数に
        $price = 250 * $howMany;
        // ↑のように、$howManyはpriceの内部でだけ有効な「ローカル変数」である。
        //　外に同じ名前の関数があっても、関数内で計算があった時は別扱いするようだ。
        echo "{$price}円です";
      }
      echo "{$howMany}個で";
      calcPrice2();
    </pre>
    <pre>
      <?php
      $howMany = 2;
      // 個数
      function calcPrice2(){
        // 料金を計算する
        global $howMany;
        // $howManyをグローバル関数に
        $price = 250 * $howMany;
        // ↑のように、$howManyはpriceの内部でだけ有効な「ローカル変数」である。
        //　外に同じ名前の関数があっても、関数内で計算があった時は別扱いするようだ。
        echo "{$price}円です";
      }
      echo "{$howMany}個で";
      calcPrice2();
      ?>
    </pre>
    <p>global関数を使うことで、</p>
    <p>「関数内で用いられる変数」を使った計算が成功した！業前。</p>
    <p>さてもう一度やってみよう。</p>
    <p class="pdg">今度は、「消費税率計算」の誤った例と正しい例を見ていこう。</p><!--  .pdg -->

  </div>
  <div class="main-contents">
    <p>まずは誤った例。</p>
    <pre>
      $tax = 0.1;
      //料金を計算する
      function taxPrice($tanka, $kosu){
        $ryokin = $tanka*$kosu*(1+$tax);
        // taxPrice()の中でのみ利用できる関数であるため、値がない
        echo "{$ryokin}円です。";

      }
      // 実行する
      taxPrice(250 ,4);
      echo "税込".$tax*100,"%";
    </pre>
    <pre>
      <?php
        $tax = 0.1;
        //料金を計算する
        function taxPrice($tanka, $kosu){
          $ryokin = $tanka*$kosu*(1+$tax);
          // taxPrice()の中でのみ利用できる関数であるため、値がない
          echo "{$ryokin}円です。";

        }
        // 実行する
        taxPrice(250 ,4);
        echo "税込".$tax*100,"%";
       ?>
    </pre>
    <p>このように、「消費税上乗せ」に失敗している。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>今度は正しい例。</p>
    <pre>
      $tax = 0.1;
      //料金を計算する
      function taxPrice2($tanka, $kosu){
        global $tax;
        $ryokin = $tanka*$kosu*(1+$tax);
        // taxPrice()の中でのみ利用できる関数であるため、値がない
        echo "{$ryokin}円です。";

      }
      // 実行する
      taxPrice2(250 ,4);
      echo "税込".$tax*100,"%";
    </pre>
    <pre>
      <?php
        $tax = 0.1;
        //料金を計算する
        function taxPrice2($tanka, $kosu){
          global $tax;
          $ryokin = $tanka*$kosu*(1+$tax);
          // taxPrice()の中でのみ利用できる関数であるため、値がない
          echo "{$ryokin}円です。";

        }
        // 実行する
        taxPrice2(250 ,4);
        echo "税込".$tax*100,"%";
       ?>
    </pre>
    <p>$taxを関数内でグローバル関数としたことで、</p>
    <p>関数内で行った計算が反映され、結果消費税上乗せに成功している！</p>
  </div><!--  .main-contents -->

  <div class="main-contents">
    <p class="pdg"></p><!--  .pdg -->
    <h3>スタティック関数</h3>
    <p>スタティック関数は関数内でのみ有効なローカルスコープだが、</p>
    <p>その値はグローバル変数と同じようにずっと保持される。</p>
    <p>そのため、「関数内での新しい初期値」に初期化する際に必要なことが多くあるのだ。</p>
    <pre>
      function countUp(){
        static $count = 0;
        // 初期化
        $count += 1;
        // カウントアップ
        return $count;
      }
      for($i=0; $i<=10; $i++){
        // 10回実行する
        $num = countUp();
        echo "{$num}回目。"."<br>";
      }
    </pre>
    <pre>
      <?php
      function countUp(){
        static $count = 0;
        // 初期化
        $count += 1;
        // カウントアップ
        return $count;
      }
      for($i=0; $i<=10; $i++){
        // 10回実行する
        $num = countUp();
        echo "{$num}回目。"."<br>";
      }
       ?>
    </pre>
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->

</body>
</html>
