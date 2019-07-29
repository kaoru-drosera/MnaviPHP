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
    background-color:rgb(242, 255, 166) ;
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
    <h3>メソッドの衝突を避ける</h3>
      <p>複数のトレイトを使うと<strong>同じ名前でメソッドが定義されている</strong>ことがあり、</p>
      <p>そのような場合にどのトレイトのメソッドを使うかを指定する方法がある。</p>
    <h3>同じ名前があるメソッド</h3>
      <pre class="gaiyo">
        // TaroToolトレイトを定義する
        trait TaroTool{
          public function hello(){
            // TaroToolにhelloツールがある
            echo "ハロー";
          }

          // 今日の曜日
          public function weekDay(){
            $week = ["日","月","火","水","木","金","土",];
            $now = new DateTime();
            $w = (int)$now->format('w');
            $weekday = $week[$w];
            echo "今日は",$weekday,"曜日です。";
          }
        }
      </pre>
      <pre>
        <?php
          // // TaroToolトレイトを定義する
          // trait TaroTool{
          //   public function hello(){
          //     // TaroToolにhelloツールがある
          //     echo "ハロー";
          //   }
          //
          //   // 今日の曜日
          //   public function weekDay(){
          //     $week = ["日","月","火","水","木","金","土",];
          //     $now = new DateTime();
          //     $w = (int)$now->format('w');
          //     $weekday = $week[$w];
          //     echo "今日は",$weekday,"曜日です。";
          //   }
          // }
         ?>
      </pre>
      <p>まず、TaroToolトレイトとHanaToolトレイトを用意する。</p>
      <pre class="gaiyo">
        // HanaToolトレイトを定義する
        trait HanaTool{
          public function hello(){
            // HanaToolトレイトにもhello()があります
            echo "ご　き　げ　ん　よ　う　！";
          }
        }
      </pre>
      <pre>
        <?php
          // // HanaToolトレイトを定義する
          // trait HanaTool{
          //   public function hello(){
          //     // HanaToolトレイトにもhello()があります
          //     echo "ご　き　げ　ん　よ　う　！";
          //   }
          // }
         ?>
      </pre>
    </div>

    <div class="main-contents">
      <h3>「insteadof」キーワードを使って名前の衝突を防ぐ</h3>
      <p>名前の衝突を防ぐには<strong>「insteadof」</strong>キーワードを使う。</p>
      <p>ちなみに<strong>「A insteadof B」で「Bの代わりにA」</strong>という意味。insteadofの使い方もだいたいそんな。</p>
      <p>次のコードではTaroToolトレイトとHanaToolトレイトを利用する。</p>
      <pre class="gaiyo">
        require_once("helloX5.2_HanaTool.php");
        require_once("helloX5.2_TaroTool.php");
        // MyClasクラスを定義する
        class MyClass{
          // 2つのトレイトを使用する
          use TaroTool, HanaTool{
            // TaroToolとHanaToolの2つのトレイトの利用を宣言する
            HanaTool::hello insteadof TaroTool;
            // HanaToolのhello()を使うことを宣言する
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
          //     HanaTool::hello insteadof TaroTool;
          //     // HanaToolのhello()を使うことを宣言する
          //   }
          // }
         ?>
      </pre>
      <p>トレイトを指定するuse文では、TaroTool、HanaToolと2つのトレイトの設定に加えて</p>
      <p>ブロック文が付いてくる。ブロック文では<strong>「HanaTool::hello insteadof TaroTool」</strong>のように</p>
      <p>のように、HanaToolトレイトのHello()を使うことを宣言。</p>
      <pre class="gaiyo">
        // MyClassクラスファイルを読み込む
        // require_once("MyClass.php");
        require_once("helloX5.2_MyClass.php");
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
        require_once("helloX5.2_MyClass.php");
        // MyClassクラスのインスタンスを作る
        $myObj = new MyClass();
        $myObj->hello();
        echo "\n";
        $myObj->weekday();
         ?>
      </pre>
      <p class="pdg"></p><!--  .pdg -->
      <p>実際にMyClassインスタンスを作り、どちらのhello()か確認したところ、</p>
      <p>「ごきげんよう」と表示されて<strong>HanaToolトレイトのhello()が実行された</strong>ことが分かる。</p>
      <p>また、weekday()の結果も表示されるのでTaroToolトレイトも利用できている。</p>
    </div><!--  .main-contents -->









</body>
</html>
