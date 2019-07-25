<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
  class Cook {
    // コックのプロパティ ←「名前」や「性別」などの「属性」
    // コックのメソッド ←「料理を作る」などの「機能」
  }

  $Cook1 = new Cook();
  $Cook2 = new Cook();
    // newの隣にあるCookはさっきclassで作った「Cook(クラス)」の事？

  $Cook1->age = 26;
  // ↑『$Cook1(インスタンス)』の「age(プロパティ)」を「26(プロパティの値)」に設定。
  // $Cook2->omlete();
  // ↑ $Cook2のomlete()メソッドを実行する。(?)


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
    <h2>コンストラクタ</h2>
    <p>今作ったStaffクラスではインスタンスを作った際に</p>
    <p>$nameと$ageプロパティの初期値がない。</p>
    <p>もちろん、プロパティを定義する際に何らかの初期値を設定しておく</p>
    <p>ことはできるが、名前や年齢は個別に設定する値なので初期値があっても意味がない。</p>
    <p>そこで、「new Staff("華",2100)」のようにインスタンスを作成する際に</p>
    <p>引数で渡せるようにするのだ。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>ここで使うのが<strong>「コンストラクタ」</strong>である。</p>
    <p>コンストラクタは<strong>インスタンスが作られるさいに自動的に呼ばれる</strong>特殊な関数である。</p>
    <p>そこで、インスタンスを作るさいに最初に実行したいことをコンストラクタに書いておくのだ。</p>
    <p>コンストラクタは、<strong>「__construct」</strong>という名前で定義する。</p>
    <p>最初にアンダーラインが2個付き、インスタンスを作成するさいに引数を渡すことができる。</p>
    <p>なお、コンストラクタの引数を省略した場合の初期値は、通常の関数の引数と同じように指定できる。</p>
    <p>以下公式。</p>
    <pre>
      function __construct (引数1,引数2,…){
        // インスタンス作成用に最初に実行したい処理
      }
    </pre>
    <p class="pdg"></p><!--  .pdg -->
    <p>「new Staff("華",2100)」のように$nameと$ageでプロパティの初期値を引数で渡すならば、</p>
    <p>引数として受けた値をそれぞれのプロパティに設定しなければなりません。</p>
    <p>そこでコンストラクタを持ったStuffクラスは次のように書くことができる。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>というわけでまたコードをかきかえます</p>
    <p>今回は「// インスタンスプロパティ」の近くに「// コンストラクタ」を追記します</p>
    <p>+Staffクラスにインスタンス(初期値？)を渡します</p>
    <pre>
      //以下、Staffクラス。
        class Staff{
          // インスタンスプロパティ
          public $name;
          public $age;


          // コンストラクタを追記
          function __construct($name, $age){
            // プロパティに初期を導入する
            $this->name = $name;
            $this->age = $age;
          }
          // コンストラクタ追記完了！


          // インスタンスメソッド
          // publicがあるため関数外でも使える

          // helloメソッドを大胆書き換え！
          public function hello(){
            if(is_null($this->name)){
              // $thisは、「使われたインスタンス自身」という意味になる。
              // 例えば$hanaインスタンスで「$hana->hello()」が使われた場合
              // 「$hana->name」が出力されることになる。
              echo "こんにちは！","\n";
            } else {
              echo "こんにちは！","{$this->name}です！","\n";
            };
          }
        }

        // Staffクラスここまで。
        // helloメソッド書き換え完了！


        $hana = new Staff();
        $taro = new Staff();
        // Staffクラスのインスタンスを作る

        $hana->name = "華";
        $hana->age = 2100;
        $taro->name = "多呂";
        $taro->age = 35;
        //プロパティの値を設定する

        print_r($hana);
        print_r($taro);
        // インスタンスを確認する。
        // なお、print_r()を使ってインスタンスを出力すると
        // 連想配列としてプロパティとその値とも両方出力するようだ。

        $hana->hello();
        $taro->hello();
        // メソッドを実行する。
    </pre>

    <pre>
      <?php
      //以下、Staffクラス。
        class Staff{
          // インスタンスプロパティ
          public $name;
          public $age;

          // コンストラクタを追記
          function __construct($name, $age){
            // プロパティに初期を導入する
            $this->name = $name;
            $this->age = $age;
          }
          // コンストラクタ追記完了！


          // インスタンスメソッド
          // publicがあるため関数外でも使える
          //
          // helloメソッドを大胆書き換え！
          public function hello(){
            if(is_null($this->name)){
              // $thisは、「使われたインスタンス自身」という意味になる。
              // 例えば$hanaインスタンスで「$hana->hello()」が使われた場合
              // 「$hana->name」が出力されることになる。
              echo "こんにちは！","\n";
            } else {
              echo "こんにちは！","{$this->name}です！","\n";
            };
          }
        }

        // Staffクラスここまで。書き換え完了！

       ?>
       <?php
       // Staffクラスに初期値(?)を設定。
        $hana = new Staff("華",2100);
        $taro = new Staff("太郎",35);
        // Staffクラスのインスタンスを作る。
        //初期値の設定、完了！
        // ちなみに初期値の設定を忘れた場合以下のエラーが出る。
        // Uncaught ArgumentCountError: Too few arguments to function Staff::__construct(), 0 passed

        $hana->name = "華";
        $hana->age = 2100;
        $taro->name = "多呂";
        $taro->age = 35;
        //プロパティの値を設定する

        print_r($hana);
        print_r($taro);
        // インスタンスを確認する。
        // なお、print_r()を使ってインスタンスを出力すると
        // 連想配列としてプロパティとその値とも両方出力するようだ。

        $hana->hello();
        $taro->hello();
        // メソッドを実行する。
        ?>
    </pre>











    ;

</body>
</html>
