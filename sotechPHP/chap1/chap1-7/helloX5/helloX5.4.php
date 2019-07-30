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
    <div class="main-contents">
      <h2>インターフェースをかるく</h2>
      <p>インターフェースはクラスで実装すべきメソッドを規格として定めるものである。</p>
      <p>例えば、MyClassクラスがRedBookインターフェースを採用するなら、</p>
      <p>MyClassはRedBookインターフェースで定められているメソッドを必ず実装しなければならない。</p>
      <p>ただ、インターフェースではメソッドの機能については定めていないので、</p>
      <p>MyClassがメソッドにどんな機能を実装するかについては関知しない。</p>
      <p>画像とってきたよー。p242。</p>
      <div class="imgwrap"><img src="imgs/インターフェース0.jpg" alt="インターフェース0"></div>
      <p class="pdg"></p><!--  .pdg -->
      <p>これは、日本の企画にあっている電化製品ならばコンセントにさせるけど、</p>
      <p>どんな機能の製品なのかまでは関知しないのに似ている。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>インターフェースを定義する</h3>
      <p>インターフェースではメソッドと定数を定義できる。</p>
      <p>メソッドは名前と引数の数式だけを定義し、機能の実装までは行わない。</p>
      <p>アクセス権はpublicのみが設定可能である。</p>
      <p>指定を省略すると初期値のpublicが適用されるので指定する必要はない。</p>
      <p>いかがインターフェースの公式。</p>
      <pre class="gaiyo">
        // インターフェースの定義
        interface インターフェース名{
          const 定数名 = 値;
          function 関数名(引数,引数,…);
        }
      </pre>
      <p>他のインターフェースを継承したインターフェースも作ることができる。</p>
      <p>その場合以下の通り。</p>
      <pre class="gaiyo">
        // 他のインターフェースを継承したインターフェース
        interface 子インターフェース名 extends(exitend?) 親インターフェース{
          const 定数=値;
          function 関数名(引数,引数,…);
        }
      </pre>
      <p>もっと簡単な例として、WorldRuleインターフェースを作ってみる。</p>
      <p>WorldRuleインターフェースでは、hello()メソッドの実装だけを指定しています。</p>
      <pre class="gaiyo">
        interface WorldRule{
          function hello();
          // WorldRuleインターフェースの規格では、
          // hello()を実装しなければなりません。
        }
      </pre>
      <pre>
        <?php
          // interface WorldRule{
          //   function hello();
          //   // WorldRuleインターフェースの規格では、
          //   // hello()を実装しなければなりません。
          // }
         ?>
      </pre>

      <h3>インターフェースを採用する</h3>
      <p>インターフェースを採用するクラスでは、<strong>「implements」</strong>で</p>
      <p>インターフェースを指定する。継承と違って、複数のインターフェースを採用できる。</p>
      <pre class="gaiyo">
        // インターフェースを採用するクラス
        class クラス名 implements インターフェース名,インターフェース名,…{
          // クラスのコード
        }
      </pre>
      <p>もし、クラスの継承も行う場合は次の書式になる。</p>
      <pre class="gaiyo">
        // インターフェースを採用するクラスに親クラスがある場合
        class クラス名 extends 親クラス名 implements  インターフェース名,インターフェース名,…{
          // クラスのコード
        }
      </pre>
      <p>先のWorldRuleインターフェースを採用するMyClassクラスは、</p>
      <p>「implements」キーワードでWorldRuleを指定してクラス定義をする。</p>
      <p>WorldRuleインターフェースで必ず実装しなければならないのはhello()である。</p>
      <p>ここではhello()が事項されたならば「こんにちは」と表示されるようになっている。</p>
      <pre class="gaiyo">
        require_once("helloX5.4_WorldRule.php");

        class MyClass implements WorldRule{
          // WorldRuleインターフェースを採用する。

          //WorldRuleインターフェースで指定されているメソッド
          public function hello(){
            echo "こんにちは！","\n";
            // WorldRuleインターフェースで指定されている
            // hello()を実装します
          }

          // MyClass独自のメソッド
          public function thanks(){
            echo "ありがとう","\n";
          }

        }

      </pre>
      <pre class="zissyou">
        <?php
        require_once("helloX5.4_WorldRule.php");

        class MyClass implements WorldRule{
          // WorldRuleインターフェースを採用する。

          //WorldRuleインターフェースで指定されているメソッド
          public function hello(){
            echo "こんにちは！","\n";
            // WorldRuleインターフェースで指定されている
            // hello()を実装します
          }

          // MyClass独自のメソッド
          public function thanks(){
            echo "ありがとう","\n";
          }

        }

         ?>
      </pre>





    </div><!--  .main-contents -->









</body>
</html>
