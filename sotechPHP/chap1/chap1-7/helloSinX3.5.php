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
    <h3>スタティックプロパティとスタティックメソッド</h3>
    <p>クラスには、<strong>インスタンスのプロパティとメソッドだけでなく、</strong></p>
    <p><strong>クラス自身のクラスプロパティとクラスメソッドを</strong>設定することができます。</p>
    <p>PHPでは、これを<strong>「static」キーワード</strong>を利用して作る</p>
    <p><strong>スタティックプロパティ(静的プロパティ)</strong>と<strong>スタティックメソッド(静的メソッド)</strong></p>
    <p>公式はこんな感じ。</p>
    <pre>
      class クラス名{
        // スタティックプロパティ
        public static const 定数名 = 値;
        public static $変数名;

        // スタティックメソッド
        public static function メソッド名(){

        }
      }
    </pre>

    <h3>クラスの中からクラスメンバーにアクセスする</h3>
    <p>このクラスメンバーをクラス内で利用するには、</p>
    <p><strong>「self::」</strong>をつけて<strong>「self::$変数名」</strong>あるいは<strong>「self::メソッド」</strong></p>
    <p>のようにアクセスする。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>では、今からStaffクラスにスタティックプロパティ$piggyBankとスタティックメソッドdeposit()を定義する。</p>
    <p>$piggyBankは貯金箱で、その貯金箱にお金を入れるメソッドがdeposit()です。</p>
    <p>deposit()では引数で受けた値$yenを$piggyBankに加算する。</p>
    <p>$piggyBankにはself::$piggyBankの式でアクセスするのだ。</p>
    <p>さぁ、コードで書いてみよう。「」</p>
    <p><strong>下のコードだけでなく、クラス定義が「helloSinX3.5_Staff.php」にある</strong>のでそれも確認のこと。</p>
    <pre>
      // クラスメソッドを実行する
      Stuff::deposit(100);
      Stuff::deposit(150);
      // Stuffクラスのクラスメソッドdeposit()を直接実行する。

      // クラスプロパティを確認する。
      echo Stuff::$piggyBank,"円になりました\n";
      // Stuffクラスのクラスプロパティ$piggyBankの
      // 値を取り出す

      // インスタンスを作る
      $hana = new Stuff("花", 2100);
      // インスタンスメソッドを実行する
      $hana->latePenalty(); //遅刻して罰金
      // クラスプロパティを確認する
      echo Stuff::$piggyBank,"円になりました\n";
    </pre>
    <pre>
      <?php
        // クラスメソッドを実行する
        Stuff::deposit(100);
        Stuff::deposit(150);
        // Stuffクラスのクラスメソッドdeposit()を直接実行する。

        // クラスプロパティを確認する。
        echo Stuff::$piggyBank,"円になりました\n";
        // Stuffクラスのクラスプロパティ$piggyBankの
        // 値を取り出す

        // インスタンスを作る
        $hana = new Stuff("花", 2100);
        // インスタンスメソッドを実行する
        $hana->latePenalty(); //遅刻して罰金
        // クラスプロパティを確認する
        echo Stuff::$piggyBank,"円になりました\n";



       ?>
    </pre>
    <h3>インスタンスメソッドからクラスメソッドを実行する</h3>
    <p>インスタンスメソッドのlatePenalty()は、「遅刻すると1000円罰金を払う」メソッドだ。</p>
    <p>実行されると、クラスメソッドの「deposit(1000)」が実行されて、</p>
    <p>$piggyBankに1000が加算される。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>インスタンスメンバーからクラスメンバーを利用する場合も同じように「self::クラスメンバー」の式で</p>
    <p>self::deposit(1000)のように実行する。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h3>クラスの外からクラスメンバーを利用する</h3>
    <p>他のクラスから利用する場合は「クラス名::クラスメンバー」でアクセスする。</p>
    <p>次のコードではStuffクラスの機能を利用している。</p>
    <p>最初にStuff.phpを読み込み、次にStaff::deposti(1000)のように</p>
    <p>Staffクラスのクラスメンバーを直接挿して実行しています。</p>
    <p>そして、クラスプロパティにStaff::$piggyBankでアクセスして預金した結果を調べるのだ。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>続いてインスタンス$hanaを作り、$hanaのインスタンスメソッドlatePenalty()を実行。</p>
    <p>latePenalty()を実行すると1000円預金されるので、Stuff::$piggyBankでアクセスして</p>
    <p>預金額をもう一度確認しています。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h3>アクセス修飾子</h3>
    <p>クラスメンバーのアクセス権は、public、protected、privateの3種類の<strong>アクセス修飾子</strong>で設定する。</p>
    <p>適切な使い分けにはOOPに対する中級者レベルの理解が必要になる場面がある。</p>
    <table class="table1" border="1" cellspacing="10">
      <thead>
        <tr>
          <th>修飾子</th>
          <th>アクセス件</th>
        </tr>
      </thead>
      <tdoby>
        <tr>
          <th>public</th>
          <td>どこからでもアクセスが可能</td>
        </tr>
        <tr>
          <th>protected</th>
          <td>定義したクラスと子クラスからアクセス可能</td>
        </tr>
        <tr>
          <th>private</th>
          <td>定義したクラス内のみでアクセスが可能</td>
        </tr>
      </tdoby>
    </table>
    <p>リードオンリーまたはライトオンリーのプロパティを作りたいと言った場合に、</p>
    <p>protectedやprivateのアクセス修飾子を利用してプロパティの読み書きを禁止に設定し、</p>
    <p>publicなメソッドを介してアクセスできるようにするといった手法を使う。</p>
  </div><!--  .main-contents -->










    ;

</body>
</html>
