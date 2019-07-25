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
    <h2>クラス定義ファイルを作りました</h2>
    <p>クラスを開発する上でも、クラスごとにファイルを作って保存する方が</p>
    <p>合理的である。そして、使用するファイルで外部のクラスファイルを読み込んで使うようにする。</p>
    <p>クラス定義ファイルを作る場合は、一つのファイルに一つのクラスを定義するようにして、</p>
    <p>定義するクラスと同名のファイルにすると管理がしやすい。</p>
    <p>例えば、「helloSin(ry」なら「Stuff.php」とかにしとけばよかったのだ。</p>
    <p>なお、HTMLで表示しないphpのみのファイルなら<strong>終了タグがいらない。</strong></p>
    <pre>
      require_once("helloSinX3.3ClassEscape.php");

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
    </pre>

    <pre>
      <?php
      require_once("helloSinX3.3ClassEscape.php");
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
