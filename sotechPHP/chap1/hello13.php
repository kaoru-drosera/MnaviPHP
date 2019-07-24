<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>

 <?php
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>論理式？</title>
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
  </style>

  <div class="main-contents">
    <h3>可変変数</h3>
    <p>可変変数を使うと変数名を動的に変更できる。</p>
    <p>例えば、「$$color」のようにさらに$を重ねることで、</p>
    <p>元の$colorに入っていた値を名前にした変数を作れるのだ。</p>
    <pre>
      $color = "red";
      $$color = 125; //$redと同じに。
      echo $red;
    </pre>
    <pre>
      <?php
        $color = "red";
        $$color = 125; //$redと同じに。
        echo $red;
       ?>
    </pre>
    <p>上の例では最初、変数$colorには"red"がある。</p>
    <p>そこに$$colorとして125を代入すると、変数「$red」に125を入れたことになる。</p>
    <p>$colorの値が"red"なので、「$($color)=$red」と考えるといい…そうである。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>もう一つ例を見てみよう。</p>
    <p>計算式は「$ryoukin=$tanka*$kosu」だが、</p>
    <p>単価は$unitPrice、個数は$quantityの変数が割り当てられているものとする。</p>
    <pre>
      $unitPrice = 230;
      $quantity = 5;
      $tanka = "unitPrice";
      $kosu = "quantity";
      // 変数に変数名を入れる
      $ryoukin = $$tanka * $$kosu;
      //入っている変数名の変数を使って計算する。
      //$ryoukin = $unitPrice*$quantityと意味が同じに
      echo $ryoukin."円";
    </pre>
    <pre>
      <?php
        $unitPrice = 230;
        $quantity = 5;
        $tanka = "unitPrice";
        $kosu = "quantity";
        // 変数に変数名を入れる
        $ryoukin = $$tanka * $$kosu;
        //入っている変数名の変数を使って計算する。
        //$ryoukin = $unitPrice*$quantityと意味が同じに
        echo $ryoukin."円";
       ?>
    </pre>
    <p>$tanka = "unitPrice"、$kosu = "quantity"のように、式で使いたい変数に</p>
    <p>それぞれの変数名をストリングで割り当てよう。</p>
    <p>次に、「$ryoukin = $$tanka*$$kosu」のように可変変数を使って式を書く。</p>
    <p>これで、「$ryoukin = $unitPrice * $quantity」と同じような式になる。</p>
    <pre>
      $$tanka = $($unitPrice) = 230;?
      $$kosu = $($quantity) = 5;?
    </pre>
    <p>配列と可変変数を組み合わせる場合は「どのように展開されるか」に注意が必要。</p>
    <p>ミスを防ぐ方法として、${$var[0]}、あるいは${$var}[0]のように{}を使って展開順を明確に。</p>
    <p>ちなみに、php7からグローバル関数と可変変数は併用できなくなったそうである。</p>
  </div><!--  .main-contents -->

  <div class="main-contents">
    <h3>可変関数</h3>
    <p>可変関数はストリングの関数名から同盟の関数を実行する。</p>
    <p>可変関数は、$var()のように変数に()をつけて実行します。</p>
    <p>可変変数と考え方は同じだが、</p>
    <p>指定した関数が存在するかどうかをfunction_exists()で確かめてから実行する。</p>
    <pre>
      function hello($who){
        echo "{$who}さん、こんにちは。";
      }
      function seeYou($who){
        echo "{$who}さん、またあした";
      }
      $msg = "bye";
      // 実行する関数を決める。
      if(function_exists($msg)){
        $msg("金太郎");
        // 選んだ関数を実行。
      }
    </pre>
    <pre>
      <?php
        function hello($who){
          echo "{$who}さん、こんにちは。";
        }
        function seeYou($who){
          echo "{$who}さん、またあした";
        }
        $msg = "seeYou";
        // 実行する関数を決める。
        if(function_exists($msg)){
          $msg("金太郎");
          // 選んだ関数を実行。
        }
       ?>
    </pre>
    <p>関係ないけど、可変関数ってこんな？</p>
    <pre>
      //可変関数の設定
      $可変関数名 = "関数名"($をつけない)
      //可変関数の実行
      function_exists($可変関数名)
    </pre>
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->

  <div class="main-contents">
    <h3>無名関数</h3>
    <p>無名関数は「名前を指定しない関数」。別名「クロージャ」「ラムダ式」「ラムダ関数」とも。</p>
    <p>無名関数は、コールバック関数として関数の引数とすることがよくある。</p>
    <p>また、無名関数は変数に入れて扱うことができ、$var()のように変数に()を入れて実行する。</p>
    <pre>
      function(引数1,引数2,…,引数n){
        処理
      }
    </pre>
    <pre>
      <?php
        $myFunc = function($who){
          echo "{$who}さん、こんにちは";
          //無名関数を変数$myfuncに代入
        };
        //↑代入分なのでセミコロンが必要
        $myFunc("中田");
       ?>
    </pre>
    <p>この例は、無名鑵子を変数$myFuncに代入して実行している。</p>
    <p>変数への代入なので、行末へのセミコロンの代入は忘れないよう。</p>
    <p>代入した関数は$myFunc("田中")のように実行する</p>
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->

  <div class="main-contents">
    <h4>無名関数で使う変数に値を設定する</h4>
    <p>親のスコープにある変数を無名関数の中で使うには、use($var)のように</p>
    <p>useキーワードを使って無名関数に変数を渡す。これは無名関数を呼び出す際に渡す引数とは異なる。</p>
    <pre>
      $msg = "ありがとう";
      $myFunc = function ($who) use ($msg){
        //無名関数で使う変数に値を設定する
        echo "{$who}さん、".$msg;
      };
      //↑代入分なのでセミコロンが必要
      $myFunc("中田");
    </pre>
    <pre>
      <?php
        $msg = "ありがとう";
        $myFunc = function ($who) use ($msg){
          //無名関数で使う変数に値を設定する
          echo "{$who}さん、".$msg;
        };
        //↑代入分なのでセミコロンが必要
        $myFunc("中田");
       ?>
    </pre>
    <p>↑の例で言えば$msgに「ありがとう」に代入し、その値をuse($msg)で無名関数にする。</p>
    <p>これにより、「echo "{$who}さん、$msg"」の文は「echo "{$who}さん、"."ありがとう"」になる。</p>
    <p>グローバル関数とは違うので、</p>
    <p>無名関数を$myFuncに代入した後で親のスコープで$msgの値を変更しても無名関数の中の$msgの値は変化しない。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->

  </div><!--  .main-contents -->
</body>
</html>
