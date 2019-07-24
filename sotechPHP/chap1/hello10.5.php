<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>

 <?php
 function price($Uprice,$howMany){
   $shipCost = 250;
   $price = $Uprice * $howMany;
   //5000円未満は送料250円
   if($ryoukin<5000){
     $price += $shipCost;
   }
   return $price;
 }

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
    <h3>ユーザ定義関数をHTMLコードに埋め込む-2</h3>
    <p>3200円を2個購入した場合は</p>
    <pre>
      <?php
      $price3 = price(3200,2);
      echo "{$price3}円";
      ?>
    </pre>
    <p>800円を5こ購入したら</p>
    <pre>
      <?php
      $price4 = price(800,5);
      echo "{$price4}円";
      ?>
    </pre>
     <p>ちなみにさっき設定した関数はHTMLコードの前にある。</p>
     <p>ちなみに、jsとは違い後ろにおいても発動するぞ。</p>
  </div>

  <div class="main-contents">
    <h3>関数の中断</h3>
    <p>最終的な計算結果を表示するためのreturnだが、</p>
    <p>単独で使うと「関数を中断する」ことができるようになる。</p>
    <p>ただし、ifと一緒に使うのが主だ。</p>
    <pre>
      function warikan($total,$ninzu){
        if($ninzu<=0){
          // 人数が正でない(=0)時は処理を中断する
          return;
          // return で中断する。
        }
        $result = $total/$ninzu;
        echo "{$total}円を{$ninzu}人で分けると{$result}円。";
        echo "<br>".PHP_EOL;
      }
      // 割り算の結果を表示する
      warikan(2500, 2);
      warikan(3000, 0);
      warikan(5500, 4);
      <p></p>
      <?php
      function warikan($total,$ninzu){
        if($ninzu<=0){
          // 人数が正でない(=0)時は処理を中断する
          return;
          // return で中断する。
        }
        $result = $total/$ninzu;
        echo "{$total}円を{$ninzu}人で分けると{$result}円。";
        echo "<br>".PHP_EOL;
      }
      // 割り算の結果を表示する
      warikan(2500, 2);
      warikan(3000, 0);
      warikan(5500, 4);
       ?>
       <p>↑真ん中の「warikan(3000,0)」の式は、\$ninzuの値が0なため関数が中断されている。</p>
    </pre>
  </div>
    <div class="main-contents">
      <h3>引数の省略と"初期値"</h3>
      <p>引数に初期値を設定することで、引数を省略できる関数を定義することができる。</p>
      <p>ただし、初期値がある引数は初期値がない引数より後に置く必要があるから注意だ。</p>
      <p></p>
      <p>早速、「第二引数を省略した場合は1で計算する」関数を作ってみよう。</p>
      <pre>
        function charge($rank,$days=1){
          // 第２引数の宿泊数が省略された時は、
          // $daysには初期値の1が入る。
          switch($rank){
            case "A":
            $price = 15000 * $days;
            break;
            case "B":
            $price = 12000 * $days;
            break;
            defalut = 8000 * $days;
            break;
          }
          return $price;
        }
        $price1 = charge("B",2);
        $price2 = charge("A");
        echo "金額1は{$price1}円"."<br>".PHP_EOL;
        echo "金額2は{$price2}円"."<br>".PHP_EOL;
        <?php
        function charge($rank,$days=1){
          // 第２引数の宿泊数が省略された時は、
          // $daysには初期値の1が入る。
          switch($rank){
            case "A":
            $price = 15000 * $days;
            break;
            case "B":
            $price = 12000 * $days;
            break;
            defalut:
            $price = 8000 * $days;
            break;
          }
          return $price;
        }
        $price1 = charge("B",2);
        $price2 = charge("A");
        // $price3 = charge();
        echo "<br>"."<br>";
        echo "金額1は{$price1}円"."<br>".PHP_EOL;
        echo "金額2は{$price2}円"."<br>".PHP_EOL;
        // echo "金額3は{$price3}円"."<br>".PHP_EOL;
        // 初期値の指定がない第一引数も省略できるらしいが、エラーを吐いたのでやめ。
        // Uncaught ArgumentCountError: Too few arguments to function charge(), 0 passed
        ?>
      </pre>
    </div>

  <div class="main-contents">
    <h3>引数の個数を固定しない</h3>
    <p>説明もあったがわけがわからないので保留。</p>
    <p></p>
    <p>第二引数以降の引数の個数を固定しない</p>
    <pre>
      function team($name,...$members){
        print_r($name . PHP_EOL);
        print_r($members);

        //team()を試す
        team("peach","佐藤","田中","加藤");
      }
      <?php
      function team($name,...$members){
        print_r($name . PHP_EOL);
        print_r($members);

        //team()を試す
        team("peach","佐藤","田中","加藤");
      }
       ?>
    </pre>
    <p>↑なんでかこれはできなかった。</p>
    <p></p>
    <p>チーム名とメンバーをチームデータにして返す</p>
    <pre>
      function team($name,...$members){
        print_r($name . PHP_EOL);
        print_r($members);

        //team()を試す
        team("peach","佐藤","田中","加藤");
      }
      <?php
      function teams($name,...$members){
        $list = implode("、",$members);
        return "{$name}:{$list}";
      }
      //team()を試す
      $team1 = teams("peach","佐藤","田中","加藤");
      $team2 = teams("kabosu","比呂","紀江子");

      echo $team1."<br>";
      echo $team2."<br>";
       ?>
    </pre>
    <p>↑これはできた！</p>
  </div>

  <div class="main-contents">
    <h3>引数と返り値の方指定</h3>
    <p>引数と返り値はデータ型を設定することができる。</p>
    <p>公式としてはこんな感じ。</p>
    <pre>
      function 関数名(データ型 引数1,データ型 引数2,…):返り値のデータ型{
        //処理
        return 返り値;
      }
    </pre>
    <p>指定できるデータは次の通り。</p>
    <table class="table1" cellspacing="10" border="1">
      <thead>
        <tr>
          <th>データ型</th>
          <th>説明</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>array</th>
          <td>配列</td>
        </tr>
        <tr>
          <th>callable</th>
          <td>コールバック関数</td>
        </tr>
        <tr>
          <th>bool</th>
          <td>ブール(真偽？)値</td>
        </tr>
        <tr>
          <th>float</th>
          <td>浮動小数点数(float、double,実数)</td>
        </tr>
        <tr>
          <th>int</th>
          <td>整数値</td>
        </tr>
        <tr>
          <th>string</th>
          <td>文字列</td>
        </tr>
        <tr>
          <th>クラス名/インターフェース名</th>
          <td>指定のクラスのインスタンス</td>
        </tr>
        <tr>
          <th>self</th>
          <td>インスタンス自身</td>
        </tr>
      </tbody>
    </table>
    <p class="pdg"></p>
    <p>引数の型を指定</p>
    <p>int型でない値を引数で受け取ると、数字の場合その場でintに変換して処理を行う。</p>
    <p>引数の型をintにすることで、引数として受け取った時点ですぐに計算結果を得られるのだ。</p>
    <pre>
      function twice(int $var){
        // 引数を「整数」に
        $var *= 2;
        return $var;
      }

      // 実行！
      $num = 10.8;
      $result = twice($num);
      echo "{$num}の2倍は",$result;
      <?php
        function twice(int $var){
          // 引数を「整数」に
          $var *= 2;
          return $var;
        }

        // 実行！
        $num = 10.8;
       ?>
    </pre>
    <?php
    $result = twice($num);
    echo "{$num}の2倍は",$result;
     ?>
     <p class="pdg"></p>
     <p>返り値のデータ型を指定</p>
     <p>floatで引数を受け取り、計算後の結果をintで返す実験。</p>
     <p>floatで小数点まで表示した結果を計算した後、</p>
     <p>intに戻すことで小数点を切り捨てた結果を得る。</p>
     <pre>
      <?php
        function twice2(float $var):int{
          //引数はfloatだが、返り値はintで返す。
          $var *= 2;
          return $var;
        }

        //実行する
        $num = 10.8;
        $result = twice2($num);
        echo "{$num}の2倍は",$result;
       ?>
     </pre>
  </div>

</body>
</html>
