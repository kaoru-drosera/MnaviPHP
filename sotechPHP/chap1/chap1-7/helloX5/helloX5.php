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
    <h3>トレイトを定義する</h3>
    <p>クラス継承では親クラスを1つしか指定できないが、</p>
    <p><strong>トレイトでは複数のトレイトを同時に指定してコードを活用することができる。</strong></p>
    <p>トレイトは次に示すようにクラス定義と似た書式で定義できる。</p>
    <p>クラスを継承したトレイトを定義することもできる。</p>
    <p>トレイトは以下の公式で書ける。</p>
    <pre class="gaiyo">
      // トレイトの定義
      trait トレイト名{
        // トレイトのプロパティ
        // トレイトのメソッド
      }
    </pre>
    <pre class="gaiyo">
      // 親クラスを指定したトレイトの定義
      trait トレイト名 extends 親クラス{
        // トレイトのプロパティ
        // トレイトのメソッド
      }
    </pre>
    <p class="pdg"></p><!--  .pdg -->
    <h3>DateToolトレイトを定義する</h3>
    <p>次の例ではDateToolトレイトを定義しています。</p>
    <pre class="gaiyo">
      // 2つの関数があるDateToolトレイト
      trait DateTool{
        // DateTimeを年月日の書式で返す
        public function ymdString($date){
          $dateString = $date->format('Y年m月d日');
          return $dateString;
        }

        // 指定に数後の年月日で返す
        public function addYmdString($date, $days){
          $date->add(new DateInterval("P{$day}D"));
          return $this->ymdString($date);
        }
      }
    </pre>
    <pre>
      <?php
        // // 2つの関数があるDateToolトレイト
        // trait DateTool{
        //   // DateTimeを年月日の書式で返す
        //   public function ymdString($date){
        //     $dateString = $date->format('Y年m月d日');
        //     return $dateString;
        //   }
        //
        //   // 指定に数後の年月日で返す
        //   public function addYmdString($date, $days){
        //     $date->add(new DateInterval("P{$day}D"));
        //     return $this->ymdString($date);
        //   }
        // }
       ?>
    </pre>
    <p>DateToolトレイトには、ymdString()とaddYmdString()の2つの関数が定義してある。</p>
    <p>ymdString()は引数で受け取ったDateTimeクラスの日数データを</p>
    <p>「2016年03月15日」といった年月日のストリングにして返す。</p>
    <p>addYmdString()引数で受け取った日数の指定日付後の日付を年月日のストリングにして返すのだ。</p>
    <p class="pdg"></p>
    <h3>トレイトの使い方</h3>
    <p>トレイトを利用するには、<strong>「use」</strong>キーワードを指定する。</p>
    <pre class="gaiyo">
      class クラス名{
        use トレイト名,トレイト名…
        // クラスのコード
      }
    </pre>
    <p>上の公式をよく見るとわかるように、<strong>同時に複数のトレイトを指定して利用することができる。</strong></p>
    <p><strong>外部ファイルのトレイトを使う場合は、先にrequire_once()を読み込んでおく</strong>ように。</p>
    <p class="pdg"></p>
    <h3>DateToolトレイトを利用するMilkクラスを定義する</h3>
    <p>では、先に作ったDateToolトレイトを利用するMilkクラスを作ろう。</p>
    <p>Milkクラスではuse DateToolでDateToolトレイトの利用を宣言しておき、</p>
    <p>コンストラクタで$theDateプロパティと$limitDateプロパティの値を設定で</p>
    <p>DateToolトレイトの関数を使って年月日のストリングを作って保存している。</p>
    <pre class="gaiyo">
      // クラスの読み込み。
      // require_once("DateTool.php");
      require_once("helloX5_DateTool.php");

      class Mlik{
        // DateTool トレイトを使用する
        use DateTool;
        // プロパティ宣言
        public $theDate;
        public $limitDate;

        function __construct(){
          // 今日の日付
          $now = new DateTime();
          // 年月日に直して設定する
          $this->theDate = $this->ymdString($now);
          // 10日後の日付
          $this->limitDate = $this->addYmdString($now, 10);
          // 10日後の日付を作る 　　　　　　　　　　　　　　　　↑
        }
      }
    </pre>
    <pre>
      <?php
        // // クラスの読み込み。
        // // require_once("DateTool.php");
        // require_once("helloX5_DateTool.php");
        //
        // class Mlik{
        //   // DateTool トレイトを使用する
        //   use DateTool;
        //   // プロパティ宣言
        //   public $theDate;
        //   public $limitDate;
        //
        //   function __construct(){
        //     // 今日の日付
        //     $now = new DateTime();
        //     // 年月日に直して設定する
        //     $this->theDate = $this->ymdString($now);
        //     // 10日後の日付
        //     $this->limitDate = $this->addYmdString($now, 10);
        //     // 10日後の日付を作る 　　　　　　　　　　　　　　　　↑
        //   }
        // }
       ?>
    </pre>
    <p>まず、DateTimeクラスのインスタンス$nowを作る。</p>
    <p>$nowには現在の日時データが入る。</p>
    <p>これをDateToolトレイトで定義してあるymdString()を使って年月日のストリングにして$theDateに保存し、</p>
    <p>addYmdString()を使って10日後の年月日を求めて$limitDate二保存する。</p>
    <p>「$this->」で指していることからも分かるように、</p>
    <p>どちらの関数もMilkクラスで定義してある関数のように使うことができる。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h3>Milkクラスのインスタンスを作って確かめる</h3>
    <p>Milkクラスのインスタンス1myMlikを作って、</p>
    <p>2つのプロパティに値が設定されたかどうかを確かめてみる。</p>
    <pre class="gaiyo">
      // Milkクラスファイルを読み込む
      require_once("helloX5_Milk.php");
      // Mlikクラスのインスタンスを作る
      $myMilk = new Milk();
      echo "作成日:",$myMilk->theDate;
      echo "\n";
      echo "期限日",$myMilk->limitDate;
    </pre>
    <pre class="zissyou">
      <?php
        // Milkクラスファイルを読み込む
        require_once("helloX5_Milk.php");
        // Mlikクラスのインスタンスを作る
        $myMilk = new Milk();
        echo "作成日:",$myMilk->theDate;
        echo "\n";
        echo "期限日",$myMilk->limitDate;
       ?>
    </pre>
    <p>$myMilk->theDateを見ると作った日付、$myMilk->limitDateを見ると</p>
    <p>その10日後の日付が入っている。</p>







</body>
</html>
