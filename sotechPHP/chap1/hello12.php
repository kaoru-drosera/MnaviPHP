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
    <h3>変数の値渡しと参照渡し</h3>
    <h4>変数の値渡し</h4>
    <p>関数の引数に変数を渡した時、関数には変数に入っている値が渡される。</p>
    <p>これから紹介する例では、$numには最初「5」が入っており、</p>
    <p>そこにoneUp($num)のようにoneUp()に$numを渡します。</p>
    <p>$numを受け取ったoneUp()では、引数に1を加算する。</p>
    <pre>
      function oneUp($var){
        // $varで変数の値を受け取る。
        $var += 1;
      }
      $num = 5;
      oneUp($num);
      // $numを引数にする。
      echo $num;
    </pre>
    <pre>
      <?php
        function oneUp($var){
          // $varで変数の値を受け取る。
          $var += 1;
        }
        $num = 5;
        oneUp($num);
        // $numを引数にする。
        echo $num;
       ?>
    </pre>
    <p>ところが、以上の例を見てみると数が初期値の「5」のまま。</p>
    <p>oneUp()の引数として$numを渡したのに、$numに1が加算されていない。</p>
    <p>その理由は、oneUp()では<strong>$numに入っている「5」を受け取っただけで、変数自体を受け取っていない</strong>から。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h4>変数の参照渡し</h4>
    <p>次の例を見ていこう。</p>
    <p>oneUp()の定義文の引数に「&」をつけて、「&$var」としてみるのだ。</p>
    <p>これで、計算は成功して$numが5から「6」になってくれる。</p>
    <p>引数の前に&をつけると、変数の値ではなく変数の参照(アドレス)を受け取る。</p>
    <p>$numの参照を受け取った$varは、実質的に$numに「1を足す」ことになるのだ。</p>
    <pre>
    </pre>
    <pre>
      <?php
      function oneUp2(&$var){
        // $varで変数の"参照"を受け取る。
        $var += 1;
      }
      $num = 5;
      oneUp2($num);
      // $numを引数にする。
      echo $num;
       ?>
    </pre>
    <p>これで成功だ！year!</p>
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->

  <div class="main-contents">
    <h3>引数の個数を固定しない</h3>
    <p>ユーザ定義関数では、「...$members」のように指定することで、</p>
    <p>引数の個数が指定されていない場合に対応する方法があった。</p>
    <p>ここでは、「関数に渡された引数を調べられる3つの関数を使う方法」を説明する。</p>
    <h4>func_get_args()、func_num_args()、func_get_arg()</h4>
    <p><strong>func_get_args()</strong>は、関数に渡された引数を配列で返すもの。</p>
    <p><strong>func_num_args()</strong>は、引数の個数を返す。</p>
    <p><strong>func_get_arg()</strong>は、指定した引数の値を返す。</p>
    <pre>
      function myFunc(){
        $allArgs = func_get_args();
        // すべての引数
        $total = array_sum($allArgs);
        // 引数の値の合計。(アライさんじゃないのだ！)
        $numArgs = func_num_args();
        // 引数の個数
        if($numArgs>0){
          $average = $total/$numArgs;
          $lastValue = func_get_arg($numArgs-1);
          //最後の値を取り出す
        } else {
          $lastValue = $average = $total = "(データなし)";
        }
        echo "合計点",$total,"\n";
        echo "平均点",$average,"\n";
        echo "最後の点数",$lastValue,"\n";
      }
      myFunc(43,67,55,75);
      //実行！

    </pre>
    <pre>
      <?php
        function myFunc(){
          $allArgs = func_get_args();
          // すべての引数
          $total = array_sum($allArgs);
          // 引数の値の合計。(アライさんじゃないのだ！)
          $numArgs = func_num_args();
          // 引数の個数
          if($numArgs>0){
            $average = $total/$numArgs;
            $lastValue = func_get_arg($numArgs-1);
            //最後の値を取り出す
          } else {
            $lastValue = $average = $total = "(データなし)";
          }
          echo "合計点",$total,"\n";
          echo "平均点",$average,"\n";
          echo "最後の点数",$lastValue,"\n";
        }
        myFunc(43,67,55,75);
        //実行！

       ?>
    </pre>
    <p>myFunc()では、この3つの関数を使って引数で与えた数値の合計と平均、最後の値を表示しています。</p>
    <p>myFunc()の定義文には引数を受け取る引数変数がありませんが、何子の引数でも処理できる。</p>
    <p>なお、「array_sum()」は「配列の値の合計」を求める関数である。</p>
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
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
</body>
</html>
