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
    <h2>続・クラスの継承</h2>
    <h3>クラスファイルを読み込む</h3>
    <p>まず最初に、「(例:)Soccer.php」ファイルを読み込んでおく。</p>
    <pre>
      //クラスファイルを読み込む
      require_once("Soccer.php");
    </pre>

    <h3>親クラスのコンストラクタ</h3>
    <p>次にSoccerクラスのインスタンスをnew Soccer("伸次")のように作る。</p>
    <p>ここでプロパティ$nameの初期値を渡しているが、</p>
    <p>これは親クラスのPlayerクラスで定義されているコンストラクタが</p>
    <p>名前を受け取って$nameに設定している。</p>
    <pre>
      // Soccerクラスのインスタンスを作る
      $player1 = new Soccer("伸次");
    </pre>
    <h3>親クラスのメソッドと子クラスのメソッドを試す</h3>
    <p>次に親クラスのメソッドwho()と子クラスのメソッドplay()を試してみる。</p>
    <p>メソッドを呼び出す式を見た時、どちらも「$player1->メソッド()」の式なので、</p>
    <p>式を見ただけでは親クラスのメソッドなのか子クラスのメソッドなのかを区別できない。</p>
    <p>どちらもインスタンスのメソッドとして同じように利用できている。</p>
    <pre>
      // Soccerクラスのインスタンスを作る
      $player1 = new Soccer("伸次");
      // 親クラスのメソッドを試す
      $player1 = who();
      // 子クラスのメソッドを試す
      $player2 = play();
    </pre>
    <h3>マジックメソッド __toString()を試す</h3>
    <p>Playerクラスには、__toString()というメソッドが定義されている。</p>
    <p>これは「マジックメソッド」と呼ばれる特殊なメソッドの一つで、</p>
    <p>インスタンスがストリング(?)にキャスト(?)された時に返す値を定義できる。</p>
    <p>Playerクラスでは$nameプロパティの値を返している。</p>
    <pre>
      //ストリングにキャストされた時に返す文字列
      public function __toString(){
        // マジックメソッドの__toString()で文字列にキャストされる
        return $this->name;
      }
    </pre>
    <p>SoccerクラスはPlayerクラスを継承しているので、__toString()の機能も利用できる。</p>
    <p>インスタンス$player2を作って、echoで出力すると$nameプロパティの値を表示されるぞ。</p>
    <pre>
      // マジックメソッドを試す
      //Soccerクラスのインスタンスを作る
      $player2 = new Soccer("つばさ");
      // __toString() メソッドを試す
      echo "{$player2}";
    </pre>

</body>
</html>
