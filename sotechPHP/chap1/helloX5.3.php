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
    <h2>トレイト</h2>
    <div class="main-contents">
      <h3>メソッドに別名をつける</h3>
      <p>$insteadofを使うことでhello()はHanaToolトレイトで</p>
      <p>定義してあるものを使うことを指定できたが、</p>
      <p>TaroToolトレイトのhello()も使いたいという場合も出てくる。</p>
      <p class="pdg"></p><!--  .pdg -->
      <p>そのような場合には、<strong>「as」演算子</strong>を使って<strong>TaroToolトレイトのhello()には</strong></p>
      <p><strong>taroHello()のように別名をつける</strong>ことで呼び出せるようにしよう。</p>
      <pre class="gaiyo">
        require_once("helloX5.2_HanaTool.php");
        require_once("helloX5.2_TaroTool.php");
        // MyClasクラスを定義する
        class MyClass{
          // 2つのトレイトを使用する
          use TaroTool, HanaTool{
            // TaroToolとHanaToolの2つのトレイトの利用を宣言する

            TaroTool::hello as taroHello;
            HanaTool::hello as hanaHello;
            // ↑2つのhello()に別名をつけます
            HanaTool::hello insteadof TaroTool;
            // ↑単に「hello」が呼ばれた時は、HanaToolのhello()を実行する。
          }
        }
      </pre>
      <pre>
        <?php
          // require_once("helloX5.2_HanaTool.php");
          // require_once("helloX5.2_TaroTool.php");
          // // MyClasクラスを定義する
          // class MyClass{
          //   // 2つのトレイトを使用する
          //   use TaroTool, HanaTool{
          //     // TaroToolとHanaToolの2つのトレイトの利用を宣言する
          //
          //     TaroTool::hello as taroHello;
          //     HanaTool::hello as hanaHello;
          //     // ↑2つのhello()に別名をつけます
          //     HanaTool::hello insteadof TaroTool;
          //     // ↑単に「hello」が呼ばれた時は、HanaToolのhello()を実行する。
          //   }
          // }
         ?>
      </pre>
      <p>この例では、hello()はHanaToolトレイトのhello()を使うという設定に加えて、</p>
      <p>TaroToolトレイトのhello()にはtaroHello()、HanaTooトレイトのhello()にもhanaHello()の別名をつけている。</p>
      <pre class="gaiyo">
        // MyClassクラスファイルを読み込む
        // require_once("MyClass.php");
        require_once("helloX5.3_MyClass.php");
        // MyClassクラスのインスタンスを作る
        $myObj = new MyClass();
        $myObj->hello();
        echo "\n";
        $myObj->weekday();
      </pre>
      <pre class="zissyou">
        <?php
          // MyClassクラスファイルを読み込む
          // require_once("MyClass.php");
          require_once("helloX5.3_MyClass.php");
          // MyClassクラスのインスタンスを作る
          $myObj = new MyClass();
          $myObj->hello();
          echo "\n";
          $myObj->weekday();
         ?>
      </pre>
      <p>このmyClassクラスを使って試してみると、それぞれのトレイトで定義しているhello()を</p>
      <p>taroHelloトレイトはtaroHello()で、HanaToolトレイトはhanaHello()で実行できることがわかる。</p>
    </div><!--  .main-contents -->









</body>
</html>
