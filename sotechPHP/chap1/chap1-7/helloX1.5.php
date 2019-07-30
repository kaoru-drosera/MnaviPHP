<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

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
    <h2>オブジェクト指向プログラミング(OOP)を実演する</h2>
    <h3>ちょこっと実演</h3>
    <h4>クラス定義をちょこっと実演</h4>
    <p><strong>オブジェクトにどんなプロジェクトがあり、メソッドがあるかを定義したもの</strong></p>
    <p>これが<strong>クラス</strong>である。</p>
    <p>クラス定義は、大枠としては以下のコードで書けるぞ。</p>
    <pre class="gaiyo">
      //プロパティとメソッドを定義するクラス
      class クラス名{
        // プロパティの定義
        // メソッドの定義
      }
    </pre>
    <p>早速、「Cook」クラスを今の式をもとに書いてみよう。</p>
    <pre class="gaiyo">
      class Cook {
        // コックのプロパティ ←「名前」や「性別」などの「属性」
        // コックのメソッド ←「料理を作る」などの「機能」
      }
    </pre>
    <pre>
      <?php
      class Cook {
        // コックのプロパティ ←「名前」や「性別」などの「属性」
        // コックのメソッド ←「料理を作る」などの「機能」
      }
       ?>
    </pre>

    <h4>クラスからインスタンスを作る</h4>
    <p>クラスからインスタンスを作るには、「new」演算子を使う。</p>
    <pre class="gaiyo">
      $Cook1 = new Cook();
      $Cook2 = new Cook();
        // newの隣にあるCookはさっきclassで作った「Cook(クラス)」の事？
    </pre>
    <pre class="zissyou">
      <?php
        $Cook1 = new Cook();
        $Cook2 = new Cook();
          // newの隣にあるCookはさっきclassで作った「Cook(クラス)」の事？
       ?>
    </pre>
    <p>以上のコードで実行した時、Cookのインスタンスが2こ作られて、</p>
    <p>それぞれ$Cook1と$Cook2に入ることになる。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h4>プロパティのアクセスとメソッドの実行</h4>
    <p>クラスのインスタンスを使って何か処理を行うには、</p>
    <p>インスタンスに命令したり、インスタンスに問い合わせたりします。</p>
    <p>ただし、<strong>命令や問い合わせができるのは「クラスが定義されている」場合に限る</strong>のだが。</p>
    <pre class="gaiyo">
      $Cook1->age = 26;
      // ↑『$Cook1(インスタンス)』の「age(プロパティ)」を「26(プロパティの値)」に設定。
      $Cook2->omlete();
      // ↑ $Cook2のomlete()メソッドを実行する。(?)
    </pre>
    <pre class="zissyou">
      <?php
        $Cook1->age = 26;
        // ↑『$Cook1(インスタンス)』の「age(プロパティ)」を「26(プロパティの値)」に設定。
        // $Cook2->omlete();
        // ↑ $Cook2のomlete()メソッドを実行する。(?)
       ?>
    </pre>
    <p>例えば、Cookクラスに「age(プロパティ)」と「omlete();(メソッド)」が定義されているならば、</p>
    <p>「->」のように演算子を使って「$Cook1」の「age(プロパティ)」を設定し「$Cook1->age = X」、</p>
    <p>「$Cook2」の「omlete();(メソッド)」メソッドを実行する。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h4>クラスの継承</h4>
    <p>OOPではプログラムコードの機能を改変、拡張したい時「継承」を使う。</p>
    <p>継承こそがOOPの醍醐味…だって。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>軽症ではAクラスに継承したい機能がある時、</p>
    <p><strong>Aクラスのコードを書き変えずに、Aクラスを継承したBクラスを作り</strong>、</p>
    <p><strong>Aクラスに追加したい機能をBクラスに実装する</strong>のだ。</p>
</body>
</html>
