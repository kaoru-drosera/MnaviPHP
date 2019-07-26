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
      <h2>インターフェースをかるく</h2>
      <h3>GameBookインターフェースを作る</h3>
      <p>次の例では、「GameBookインターフェース」を作る。</p>
      <p>Gamebookインターフェースには</p>
      <ul>
        <li>newGame()</li>
        <li>play()</li>
        <li>isAlive</li>
      </ul>
      <p>の3つのメソッドが宣言してある。</p>
      <p>newGameには引数、isAliveには戻り値の方が指定している。</p>
      <pre>
        interface GameBook{
          function newGame($point);
          // newGameには引数が1つ
          function play();
          function isAlive():bool
          // isAliveは戻り値がbool(真偽値)である必要がある
        }
      </pre>
      <pre>
        <?php
          // interface GameBook{
          //   function newGame($point);
          //   // newGameには引数が1つ
          //   function play();
          //   function isAlive():bool
          //   // isAliveは戻り値がbool(真偽値)である必要がある
          // }
         ?>
      </pre>
      <p>GameBookインターフェースで支持されているのは、</p>
      <ul>
        <li>「newGame()は持ち点$pointで新しいゲームを開始しなさい」</li>
        <li>「play()でゲームを実行しなさい」</li>
        <li>「isAlive()でゲームの結果がわかるようにtrue/falseで返すこと」</li>
      </ul>
      <p>この3点だ。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>GameBookインターフェースを採用したMyGameクラス</h3>
      <p>次のMyGameクラスでは、先のGameBookインターフェースを採用している。</p>
      <p>したがって、<strong>インターフェースの設定に基づいて、newGame(),play(),isAlive()の</strong></p>
      <p><strong>3つのメソッドを実装している。</strong></p>
      <pre>
        // require_once("GameBook.php");
        require_once("helloX5.5_GameBook.php");

        class MyGame implements GameBook{
          // GameBookインターフェースを採用

          public $hitPoint;

          function __construct($point = 50){
            $this->newGame($point);
            // インスタンスの作成と同時にゲーム開始
          }

        // GameBookインターフェースで指定されているメソッド
        // 1.ニューゲーム
        public function newGame($point = 50){
          // インターフェースの指定に基づいて引数が1つ

          $this->hitPoint = $point;
        }

        // 2.ゲーム開始
        public function play(){
          $num = random_int(0,50);
          if($num%2 == 0){
            echo "{$num}ポイント増えました!","\n";
            $this->hitPoint += num;
          } else {
            echo "{$num}ポイント減りました…","\n";
            $this->hitPoint -= num;
          }
          echo "現在{$this->hitPoint}ポイント","\n";
        }

        // 3.勝敗のチェック
        public function isAlive():bool{
          // インターフェースの指定に基づいて
          // 戻り値のデータ型を真偽値に
          return ($this->hitPoint > 0);
        }


        }
      </pre>
      <pre>
        <?php
          // // require_once("GameBook.php");
          // require_once("helloX5.5_GameBook.php");
          //
          // class MyGame implements GameBook{
          //   // GameBookインターフェースを採用
          //
          //   public $hitPoint;
          //
          //   function __construct($point = 50){
          //     $this->newGame($point);
          //     // インスタンスの作成と同時にゲーム開始
          //   }
          //
          // // GameBookインターフェースで指定されているメソッド
          // // 1.ニューゲーム
          // public function newGame($point = 50){
          //   // インターフェースの指定に基づいて引数が1つ
          //
          //   $this->hitPoint = $point;
          // }
          //
          // // 2.ゲーム開始
          // public function play(){
          //   $num = random_int(0,50);
          //   if($num%2 == 0){
          //     echo "{$num}ポイント増えました!","\n";
          //     $this->hitPoint += num;
          //   } else {
          //     echo "{$num}ポイント減りました…","\n";
          //     $this->hitPoint -= num;
          //   }
          //   echo "現在{$this->hitPoint}ポイント","\n";
          // }
          //
          // // 3.勝敗のチェック
          // public function isAlive():bool{
          //   // インターフェースの指定に基づいて
          //   // 戻り値のデータ型を真偽値に
          //   return ($this->hitPoint > 0);
          // }
          //
          //
          // }
         ?>
      </pre>

      <p>まず、newGame()では引数で受けた値を$hitPointプロパティに設定している。</p>
      <p>play()ではゲーム内容を実装する。どのようなゲームかというと0~50の乱数$numを作り、</p>
      <p><strong>$numが偶数なら$numだけポイント、つまり$hitPointに加算、</strong></p>
      <p><strong>$numが奇数なら、つまり$hitPointから減算する。</strong></p>
      <p>そして、</p>
      <p><strong>isAlive()では現在のポイント$hitPointが0より大きければtrue,</strong></p>
      <p><strong>小さければfalseを返している。</strong></p>
    </div><!--  .main-contents -->

    <div class="main-contents">
      <h3>MyGameクラスを試してみる</h3>
      <p>では、MyGameクラスのインスタンスを使ってゲームをしよう。</p>
      <p>play()を実行するたびに1回ゲームが行われるので、</p>
      <p>for文を使ってplay()を10回繰り返す。</p>
      <p>繰り返すたびにisAliveをチェックして、</p>
      <p>falseならば繰り返しをbreakして抜ける。</p>
      <pre>
        // MyGameクラスファイルを読み込む
        require_once("helloX5.5_MyGame.php");

        // MyGameクラスのインスタンスを作る
        $myPlayer = new MyGame();
        for($i=0; $i<=10; $i++){
          $myPlayer->play();
          if(! $myPlayer->isAlive()){
            break;
          }
        }
        echo "ゲーム終了！"
      </pre>
      <pre>
        <?php
          // MyGameクラスファイルを読み込む
          require_once("helloX5.5_MyGame.php");

          // MyGameクラスのインスタンスを作る
          $myPlayer = new MyGame();
          for($i=0; $i<=10; $i++){
            $myPlayer->play();
            if(! $myPlayer->isAlive()){
              break;
            }
          }
          echo "ゲーム終了！"
         ?>
      </pre>
      <p>うわすんげ、クソとはいえホントにゲームできちゃったよ…！</p>
    </div><!--  .main-contents -->







</body>
</html>
