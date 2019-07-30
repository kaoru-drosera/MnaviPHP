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
    <h2>クラス定義</h2>
    <h3>クラス定義</h3>
    <p>クラス定義は「class」キーワードで定義する。</p>
    <p>クラスに定義できる内容はたくさんあるが、基本的には関数で定義します。</p>
    <p>クラス名は大文字小文字で区別し、慣例として大文字から始めます。</p>
    <p>publicキーワードはアクセス権を示します。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>publicをつけると他のクラスからもアクセスできるようになります。</p>
    <p>プロパティのアクセス権は必須ですが、メソッドのアクセス権は省略できます。</p>
    <p>メソッドのアクセス権を省略するとpublicになります。</p>
    <p>公式は以下の通り。</p>
    <pre class="gaiyo">
      //プロパティとメソッドがあるクラス定義
      class クラス名{
        //プロパティ
        public const 定数名 = 値;
        public $変数名;

        //メソッド
        public function メソッド名(){
        }
      }
    </pre>
    <p>この書式で定義しているプロパティとメソッドは、インスタンスのプロパティとメソッドなので、</p>
    <p>正確にはインスタンスプロパティとインスタンスメソッドと呼ぶ。</p>
    <p>というのも、クラスにもプロパティとメソッドを定義できるから。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>例えば、Staffクラスの定義は次のように書く。</p>
    <p>Staffクラスにはnameプロパティ、ageプロパティ、hello()メソッドが定義してある。</p>
    <p>例行くよー…。</p>
    <pre class="gaiyo">
      //以下、Staffクラス。
        class Staff{
          // インスタンスプロパティ
          public $name;
          public $age;

          // インスタンスメソッド
          // publicがあるため関数外でも使える
          public function hello(){
            echo "こんにちは!","\n";
          }
        }
        //Staffクラスここまで


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

    <pre class="zissyou">
      <?php
      //以下、Staffクラス。
        class Staff{
          // インスタンスプロパティ
          public $name;
          public $age;

          // インスタンスメソッド
          // publicがあるため関数外でも使える
          public function hello(){
            echo "こんにちは!","\n";
          }
        }
        //Staffクラスここまで

       ?>
       <?php
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
        ?>
    </pre>
    <p>現時点では正しく動くものじゃないようだ。</p>
    <p>hello()メソッドに名前が反映されていない。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h3>プロパティの初期値</h3>
    <p>プロパティには初期値を設定できます。</p>
    <p>ただし、設定できるのは単純な値だけで、計算式などの式は指定できない。</p>
    <pre class="gaiyo">
      // 設定できるもの
      public $hour = 360;
      // 設定できないもの。計算式(60 * 60…など)は設定できない。
      public $hour = 60 * 60;
    </pre>
    <p class="pdg"></p><!--  .pdg -->
    <h3>インスタンスを作る</h3>
    <p>インスタンスはnew演算子で作る。</p>
    <p>今更だがコードは以下の通り。</p>
    <pre class="gaiyo">
      $hana = new Staff();
      $taro = new Staff();
    </pre>
    <h3>インスタンスプロパティのアクセス</h3>
    <p>staffクラスには$nameプロパティと$ageプロパティがある。</p>
    <p>このプロパティには初期値が設定されていないので、今から設定しよう。</p>
    <p>インスタンスの値は、それぞれのインスタンスに「->」演算子を使ってアクセスする。</p>
    <p class="pdg"></p><!--  .pdg -->
    <pre class="gaiyo">
      // インスタンスプロパティにアクセスする
      $インスタンス -> プロパティ名;
    </pre>
    <p>次のコードはインスタンス$hanaと$taroの</p>
    <p>それぞれの$nameプロパティと$ageプロパティに値を設定している部分である。</p>
    <p>この時、「$hana->name」のようにプロパティ名のnameには$をつけないので注意。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>print_r()で確認すると、2このインスタンスが作られて、</p>
    <p>それぞれのプロパティに値が設定されているのがわかるだろう。</p>
    <p>さぁ次の例行くよ</p>
    <pre class="gaiyo">
      // プロパティの値を設定する
      $hana->name = "華";
      $hana->age = "2100";
      $taro->name = "太郎";
      $taro->age = "35";
      //インスタンスを確認する
      print_r($hana);
      print_r($taro);

      //出力結果。
      Staff Object
    (
    [name] => 華
    [age] => 2100
    )
    Staff Object
    (
    [name] => 多呂
    [age] => 35
    )
    </pre>
    <p class="pdg"></p><!--  .pdg -->
    <h4>インスタンスメソッドの実行</h4>
    <p>インスタンスメソッドを実行する場合も同じように「->」演算子を使う。</p>
    <pre class="gaiyo">
      $インスタンス->メソッド();
    </pre>
    <p>$hanaと$taroに対して、hello()を出力するコードは次の通り。</p>
    <p>Staffクラスで定義してあるhello()が実行されて、</p>
    <p>「こんにちは！」のように出力される。</p>
    <pre class="gaiyo">
      // メソッドを実行する
      $hana->hello();
      $taro->hello();

      // 出力結果は以下の通り。
      こんにちは!
      こんにちは!

      //↑この表示で問題なかったようだ…
    </pre>
    <p class="pdg"></p><!--  .pdg -->
    <p><strong>次のスライドで、コードを書き換えて</strong></p>
    <p><strong>ちゃんと「こんにちは！多呂です！」と表示されるようにするおー！</strong></p>



















    ;

</body>
</html>
