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
    <h2>クラスの継承</h2>
    <h3>クラスの継承</h3>
    <p><strong>「クラスの継承」</strong>とは、<strong>既存のクラスを拡張するように自身のクラスを定義する</strong>方法である。</p>
    <p class="pdg"></p>
    <p>クラスAをもとにクラスBを作りたい時、クラスAを継承して追加機能だけをクラスBで定義する。</p>
    <p>ベースになるクラスAのコードを改変せず拡張するので、</p>
    <p><strong>拡張による影響がクラスAには及ばない</strong>というメリットがある。</p>
    <p>公式は以下の通り。</p>
    <pre class="gaiyo">
      class 子クラス extends 親クラス{

      }
    </pre>
    <h3>親クラスのPlayerクラス</h3>
    <p>では実際にクラス継承を簡単な例で試してみましょう。</p>
    <p>コードは以下の通り。</p>
    <pre class="gaiyo">
      // Playerクラスを定義する
      class Player{
        // インスタンスプロパティ
        public $name;

        // コンストラクタ
        function __construct($name = "名無し"){
          // 引数が省略された場合の初期値 ↑
          $this->name = $name;
        }

        // ストリングにキャストされてた時に返す文字列。
        // マジックメソッドの定義。
        public function __toString(){
          return $this->name;
        }

        // インスタンスメソッド
        public function who(){
          echo "{$this->name}です。","\n";
        }
      }
    </pre>
    <pre>
      <?php
        // // Playerクラスを定義する
        // class Player{
        //   // インスタンスプロパティ
        //   public $name;
        //
        //   // コンストラクタ
        //   function __construct($name = "名無し"){
        //     // 引数が省略された場合の初期値 ↑
        //     $this->name = $name;
        //   }
        //
        //   // ストリングにキャストされてた時に返す文字列。
        //   // マジックメソッドの定義。
        //   public function __toString(){
        //     return $this->name;
        //   }
        //
        //   // インスタンスメソッド
        //   public function who(){
        //     echo "{$this->name}です。","\n";
        //   }
        // }
       ?>
    </pre>
    <p>まず、親となるPlayerクラスを用意します。</p>
    <p>Playerクラスには$nameプロパティ、コンストラクタ、マジックメソッドの__toString()、</p>
    <p>そしてwho()メソッドが定義してあります。</p>
    <p class="pdg"></p>
  </div><!--  .main-contents -->

  <div class="main-contents">
    <h3>子クラスのSoccerクラス</h3>
    <p>次にPlayerクラスの子クラスとなるSoccerクラスを作る。</p>
    <p>SoccerクラスはPlayerクラスを継承するので、最初にPlayerクラスを定義しているPlayerファイルを読み込む。</p>
    <p>次に<strong>「class Soccer extends Player」</strong>のようにPlayerクラスを親クラスに指定して</p>
    <p>Soccerクラスを定義する。Soccerクラスにはplay()メソッドを定義している。</p>
    <p>play()メソッドでは{$this->name}のようにSoccerクラスでは定義していない</p>
    <p>$nameプロパティを仕様している点に注目するよう。</p>
    <pre class="gaiyo">
      // Playerクラス定義ファイルを読み込む

      // requre_once("Player.php");
      requre_once("helloX4_Player.php");
      class Soccer extends Player{
        public function play(){
          echo "{$this->name}がシュート","\n";
        }
      }
    </pre>
    <pre>
      <?php
        // Playerクラス定義ファイルを読み込む

        // requre_once("Player.php");
        // require_once("helloX4_Player.php");
        // class Soccer extends Player{
        //   public function play(){
        //     echo "{$this->name}がシュート","\n";
        //   }
        // }
       ?>
    </pre>
  </div>

  <div class="main-contents">
    <h3>Soccerクラスのインスタンスを作って利用する</h3>
    <P>では、子クラスのSoccerクラスを使って継承の機能を確かめてみよう。</P>
    <p>次のコードを使ってSoccerクラスのインスタンスを作る。</p>
    <pre class="gaiyo">
      // クラスファイルを読みこむ
      // require_once("Soccer.php");
      require_once("helloX4_Soccer.php");

      // Soccerクラスのインスタンスを作る;
      $player1 = new Soccer("伸次");

      // 親クラスのメソッドを試す
      $player1->who();
      // who()は親クラスのPlayerクラスで
      // 定義している。

      // 子クラスのメソッドを試す
      $player1->play();



     // Soccerクラスのインスタンスを作る
      $player2 = new Soccer("つばさ");

      // __toString()メソッドを試す
      echo "{$player2}";
      // マジックメソッドの__toString()で
      // 文字列にキャストされる
    </pre>
    <pre class="zissyou">
      <?php
        // クラスファイルを読みこむ
        // require_once("Soccer.php");
        require_once("helloX4_Soccer.php");

        // Soccerクラスのインスタンスを作る;
        $player1 = new Soccer("伸次");

        // 親クラスのメソッドを試す
        $player1->who();
        // who()は親クラスのPlayerクラスで
        // 定義している。

        // 子クラスのメソッドを試す
        $player1->play();
       ?>
       <?php
       // Soccerクラスのインスタンスを作る
        $player2 = new Soccer("つばさ");

        // __toString()メソッドを試す
        echo "{$player2}";
        // マジックメソッドの__toString()で
        // 文字列にキャストされる
        ?>
    </pre>
  </div>










    ;

</body>
</html>
