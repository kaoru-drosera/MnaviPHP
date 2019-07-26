<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
require_once("helloSinX3.5_Staff.php");
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>オブジェクト指向</title>
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
    .gaiyo{
      background-color: rgb(255, 227, 227);
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
    <h2>抽象クラスを軽く</h2>
    <h3>抽象クラスを定義する</h3>
    <p><strong>抽象クラスは、抽象メソッドがあるクラス</strong>のことをいう。</p>
    <p>抽象メソッドはメソッドの宣言だけで機能を実装していないメソッドで、</p>
    <p>抽象クラスを継承した子クラスで必ずオーバーライドして機能を実装しなければならない。</p>
    <p>抽象メソッドには、public、protected、privateのアクセス権を指定することができる。</p>
    <pre>
      abstract class 抽象クラス名{
        abstract function 抽象メソッド名(引数,引数,…);
        // 抽象クラスの機能の実装
      }
    </pre>
    <p>上の書式で示すように、<strong>抽象メソッドには「abstract」を付ける</strong>。</p>
    <p><strong>抽象メソッドを宣言したならば、クラス定義にも「abstruct」を付ける。</strong></p>
    <p class="pdg"></p><!--  .pdg -->
    <p>サンプルコードをば。</p>
    <pre>
      abstract class ShopBiz{
        // 抽象メソッド
        abstract function thanks();

        // インスタンスメンバー
        protected $uriage = 0;
        protected function sell($price){
          if(is_numeric($price)){
            echo "{$price}円です。";
            $this->uriage += $price;
          }
          // 子クラスで実装されるメソッドを呼び出す
          $this->thanks();
          // 抽象メソッドのthanks()の機能は、
          // ShowBizクラスの子クラスで実装する。
        }
      }
    </pre>
    <pre>
      <?php
        // abstract class ShopBiz{
        //   // 抽象メソッド
        //   abstract function thanks();
        //
        //   // インスタンスメンバー
        //   protected $uriage = 0;
        //   protected function sell($price){
        //     if(is_numeric($price)){
        //       echo "{$price}円です。";
        //       $this->uriage += $price;
        //     }
        //     // 子クラスで実装されるメソッドを呼び出す
        //     $this->thanks();
        //     // 抽象メソッドのthanks()の機能は、
        //     // ShowBizクラスの子クラスで実装する。
        //   }
        // }
       ?>
    </pre>
    <p>このコードの下の画像取ってきてほしい p248にあるから</p>
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->

  <div class="main-contents">
    <h2>抽象クラスを継承して抽象メソッドを実装する</h2>
    <p><strong>抽象クラスのインスタンスを直接作ることはできない。</strong></p>
    <p>抽象クラスは必ず<strong>継承して使う。</strong></p>
    <p class="pdg"></p><!--  .pdg -->
    <p>そして、<strong>抽象クラスを継承した子クラスでは抽象メソッドを必ずオーバーライドして</strong></p>
    <p><strong>機能を実装しなければならない</strong>。</p>
    <p>抽象メソッドにアクセス権が設定されている場合には、</p>
    <p>子クラスでオーバーライドする場合には同じかそれよりもゆるいアクセス権を設定しなければならない。</p>
    <p>公式をば</p>
    <pre>
      class クラス名 extends 抽象クラス名{
        function 抽象メソッド名(){
          // メソッドをオーバーライドして機能を定義する
        }
        // 子クラスの機能の実装
      }
    </pre>
      <h3>ShopBiz抽象クラスを継承する</h3>
      <pre>
        require_once("helloX5.6_ShowBiz.php");

        class MyShop extends ShopBiz{
          // ShopBiz 抽象クラスで指定されているメソッド
          public function thanks(){
            // ShopBizクラスの抽象メソッドthanks()を実装する
            echo "ありがとうございました","\n";
          }

          // 販売する
          public function hanbai($tanka, $kosu){
            $price = $tanka * $kosu;
            // ShopBiz 抽象クラスから継承しているメソッドを実行。
            $this->sell($price);
            // ShopBizクラスのsell()の中でthanks()が実行されている
          }

          // 売り上げ合計を調べる
          public function getUriage(){
            echo "売り上げ合計は、{$this->uriage}円です";
          }
        }
      </pre>
      <pre>
        <?php
          // require_once("helloX5.6_ShowBiz.php");
          //
          // class MyShop extends ShopBiz{
          //   // ShopBiz 抽象クラスで指定されているメソッド
          //   public function thanks(){
          //     // ShopBizクラスの抽象メソッドthanks()を実装する
          //     echo "ありがとうございました","\n";
          //   }
          //
          //   // 販売する
          //   public function hanbai($tanka, $kosu){
          //     $price = $tanka * $kosu;
          //     // ShopBiz 抽象クラスから継承しているメソッドを実行。
          //     $this->sell($price);
          //     // ShopBizクラスのsell()の中でthanks()が実行されている
          //   }
          //
          //   // 売り上げ合計を調べる
          //   public function getUriage(){
          //     echo "売り上げ合計は、{$this->uriage}円です";
          //   }
          // }
         ?>
      </pre>
      <p>次のMyShopクラスは、先のShopBiz抽象クラスを継承しているクラスである。</p>
      <p>したがって、ShopBizクラスで宣言されている抽象メソッドのthanks()を</p>
      <p>オーバーライドして実装している。</p>
      <p>さらにhanbai()を定義し、その中で親クラスであるShopBizクラスの</p>
      <p>sell()を呼び出して使っている。</p>
      <p class="pdg"></p><!--  .pdg -->
      <p>thanks()は「ありがとうございました」と表示するだけだが、</p>
      <p>hanbai()では引数を受け取った短歌と個数から金額$priceを求めて、</p>
      <p>継承しているsell($price)を実行している。</p>
      <p>getUriage()では、ShopBizクラスのsell()で加算しているuriageプロパティの値を調べて表示する。</p>
    </div><!--  .main-contents -->

    <div class="main-contents">
      <h3>MyShopクラスのインスタンスを作って試してみる</h3>
      <p>それではMyShopクラスのインスタンス$myObjを作って、hanbai()とgetUriage()を試そう。</p>
      <pre>
        // MyShop クラスファイルを読み込む
        require_once("helloX5.6_MyShop.php");
        // MyShop クラスのインスタンスを作って試す
        $myObj = new MyShop();
        $myObj->hanbai(240,3);
        $myObj->hanbai(400,1);
        $myObj->getUriage();
      </pre>
      <pre>
        <?php
          // MyShop クラスファイルを読み込む
          require_once("helloX5.6_MyShop.php");
          // MyShop クラスのインスタンスを作って試す
          $myObj = new MyShop();
          $myObj->hanbai(240,3);
          $myObj->hanbai(400,1);
          $myObj->getUriage();
         ?>
      </pre>
      <p class="pdg"></p><!--  .pdg -->
      <p>$myObj->hanbai(240,3)を実行すると値段が計算されてsell()に渡され、</p>
      <p>「720円です。ありがとうございました」と表示される。</p>
      <p>「ありがとうございました」は抽象メソッドthanks()をオーバーライドした結果である。</p>
      <p>$myObj->getUriage()を実行した結果は「売り上げ合計は、1120円です」のように表示されるのだ。</p>




    </div><!--  .main-contents -->





</body>
</html>
