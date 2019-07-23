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
  <title>論理式？</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main-contents">
    <h3>if,for,while,switch復習</h3>
    <p>A＜＜B→元の数＜＜かける回数</p>
    <?php
    $sex = "woman";
    $age = 34;
    if($sex == "woman"){
      if($age>=30 && $age<=40){
        echo "採用です";
      }else{
        echo "30代の方を募集しております";
      }
    }else{
      echo "女性のみの募集です";
    }

     ?>
  </div>
  <div class="main-contents">
    <?php $age = 25; ?>
    <?php if($age<=15): ?>
    <p>15才以下の料金は500円です。</p>
  <?php elseif($age<=19): ?>
    <p>16才から19才は2000円です。</p>
  <?php else: ?>
    <p>20才以上は2500円です。</p>
  <?php endif; ?>
  </div>

  <div class="main-contents">
    <?php
    $color = "blue";
    switch($color){
      case "green":
      $price = 120;
      break;
      case "red";
      $price = 140;
      break;
      case "blue";
      $price = 160;
      break;
      default:
      $price = 100;
      break;
    }
    echo "{$color}は{$price}円","<br>";

     ?>
  </div>
  <div class="main-contents">
    <p>「どの条件にも当てはまらない状態」の「default」は省略することもできる。</p>
    <p>ただし、その場合変数に標準値を設定すること。</p>
    <?php
    $color = "yellow";
    $price = 100;
    switch($color){
      case "green":
      $price = 120;
      break;
      case "red";
      $price = 140;
      break;
      case "blue";
      $price = 160;
      break;
    }
    echo "{$color}は{$price}円","<br>";
     ?>
  </div>
  <div class="main-contents">
    <h3>switch文でhtmlコードを表示</h3>
    <style>
      .green{
        color:green;
      }
      .red{
        color:red;
      }
      .purple{
        color:purple;
      }
      .white{
        color: white;
        background-color: darkgray;
      }
      .green,
      .red,
      .purple,
      .white{
        font-weight: bold;
        font-size: 28px;
      }
    </style>
    <?php
    $color = "purple";
    switch($color):
      case "green":
     ?>
     <p class="green">緑皿は120円</p>
     <?php
     break;
      case "red"
      ?>
     <p class="red">赤皿は140円</p>
     <?php
     break;
       case "purple":
      ?>
      <p class="purple">紫皿は180円</p>
      <?php
      break;
      default:
       ?>
       <p class="white">白皿は100円</p>
       <?php
       break;
     endswitch;
        ?>
        <p>switchでhtmlコードを表示したい場合は、</p>
        <p>endswitch：を用いた式を用いるといい。</p>
        <p>ただし、式の最後にはかならずendswitchをつけること。</p>
        <p>参考:http://alphasis.info/2012/05/php-control-endswitch-html/</p>
  </div>
  <div class="main-contents">
    <h3>while復習</h3>
    <pre>
      <?php
      $numArray = array();
      // 空の配列を作る
      while(count($numArray) < 5){
        $num = mt_rand(1,30);
        // 1~30から乱数を1つ作る
        if(! in_array($num, $numArray)){
          //$numArrayに含まれているかどうか調べる
          array_push($numArray, $num);
          // $numArrayに含まれていなければ追加する
        }
      }
      print_r($numArray);
      // ５個数値が入った配列を確認する
      ?>
    </pre>
     <p>while文は、</p>
     <p>「まず処理を行った後でチェックを行い、条件が満たされていれば繰り返して処理」</p>
     <p>というループ処理である。似たようなものとしてdo-whileがある。</p>
  </div>

  <div class="main-contents">
    <pre>
      <?php
      do{
        // 変数に1~13の乱数を入れる
        $a = mt_rand(1,13);
        $b = mt_rand(1,13);
        $c = mt_rand(1,13);
        $d = mt_rand(1,13);
        $abc = $a+$b+$c;
        // 合計が21になったらループを抜ける
        if($abc == 21){
          break;
          // breakでループを抜けられる。
        }
      } while(TRUE);
      echo "合計が21になる3この数字。{$a}、{$b}、{$c}";

      ?>
    </pre>
     <p>while内で使用する数字や変数の誤字にはくれぐれも注意しよう。</p>
     <p>すぐ無限ループにつながってマシンが固まるぞ。</p>
  </div>

  <div class="main-conents">
    <h3>for文変わり種…ほか</h3>
    <p>forの3番目を、『i--』にすることで1番目の値を減らすことが可能だ。</p>
    <pre>
      <?php
      for($i=10; $i>0; $i--){
        echo "{$i}回。";
      }
      ?>
    </pre>
     <p>forで使う変数は、別に$iでなくてもいい。3つすべての変数の値が合っていれば。</p>
     <pre>
       <?php
       $price = 0;
       for($kazu=1; $kazu<=6; $kazu++){
         if($kazu<=3){
           // 3人以上読んだ場合、4人目から500円引き。
           $price += 1000;
         }else{
           $price += 500;
         }
         echo "{$kazu}人、{$price}円。"."<br>";
       }
       ?>
     </pre>
      <p>for文を「ネスト」させて組み合わせる。</p>
      <pre>
        <?php
        for($i=0; $i<=3; $i++){
          // カウンタ$iの繰り返し
          for($j=0; $j<=5; $j++){
            // カウンタ$jの繰り返し
            echo "{$i}-{$j}"." | ";
          }
          echo PHP_EOL; echo "<br>";
        }
        ?>
      </pre>
  </div>

  <div class="main-contents">
    <p>breakで配列にマイナスの値があった時に中断する。</p>
    <pre>
      <?php
      $list = array(20,-32,50,-5,40);
      $count = count($list); //配列の値の個数
      $sum = 0;
      for($i=0; $i<$count; $i++){
        // 配列$listから値を一つ取り出す
        $value = $list[$i];
        if($value<0){
          // $valueがマイナスだった時、繰り返しを中断します
          $sum = "マイナスの値{$value}が含まれていたので中断しました。";
          break;
        }else{
          $sum += $value;
        }
      }
      echo "合計:$sum";
      ?>
    </pre>
     <p>breakだと繰り返し自体が終了する。</p>
     <p>「マイナスがあっても中断して欲しくない」→「マイナスがないものだけを合計したい」</p>
     <p>という場合にはcontinueを使うといい。</p>
     <pre>
       <?php
       $list = array(20,-32,50,-5,40);
       $count = count($list); //配列の値の個数
       $sum = 0;
       for($i=0; $i<$count; $i++){
         // 配列$listから値を一つ取り出す
         $value = $list[$i];
         if($value<0){
           continue;
         }else{
           $sum += $value;
         }
       }
       echo "合計:$sum";
       ?>
     </pre>
  </div>

</body>
</html>
