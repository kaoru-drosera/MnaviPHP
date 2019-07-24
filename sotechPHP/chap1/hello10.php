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
    <h3>関数</h3>
    <p>function 関数名(引数,…){return 戻り値}を使って、「関数」を作れるのはご存知だろう。</p>
    <p>だが、あらかじめ値が設定された関数が幾つかあるのだ。</p>
    <p>このテキストで何回か使った「mt_rand()」も「関数」に数えられるものだ。</p>
    <pre>
      <?php
        for($i=1; $i<=10; $i++){
          // $iが10になるまでmt_rand()が1~100の間で乱数を引き出す
          $num = mt_rand(1,100);
          echo "{$num}, ";
        }
       ?>
    </pre>
    <p>もう一度。あらかじめ設定された関数がある。</p>
    <p>今日はその中から「数学関数」を一部ご紹介。</p>
    <style>
      .table1 thead th{
        background-color: black;
        color: white;
      }
    </style>
    <table class="table1" border="1" cellspacing="10" cellpadding="10">
      <thead>
        <tr>
          <th>関数</th>
          <th>戻り値</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>abs(数値)</th>
          <td>数値の絶対値</td>
        </tr>
        <tr>
          <th>ceil(数値)</th>
          <td>小数点を切り上げたもの</td>
        </tr>
        <tr>
          <th>floor(数値)</th>
          <td>小数点を切り捨てたもの</td>
        </tr>
        <tr>
          <th>round(数値)</th>
          <td>小数点を四捨五入したもの</td>
        </tr>
        <tr>
          <th>max(値,値…)</th>
          <td>値の最大値。string(文字列?)ならアルファベット順</td>
        </tr>
        <tr>
          <th>min(値,値…)</th>
          <td>値の最小値。string(文字列?)ならアルファベット順</td>
        </tr>
        <tr>
          <th>sqit(数値)</th>
          <td>数値の平方根</td>
        </tr>
        <tr>
          <th>pow(a,b)</th>
          <td>aのb乗。a**bと同じ。</td>
        </tr>
        <tr>
          <th>mt_rand()</th>
          <td>何も入れない場合、0からmt_getrandmax()までの乱数。</td>
        </tr>
        <tr>
          <th>mt_rand(最小値,最大値)</th>
          <td>おまたせ。最小値から最大値までの乱数。</td>
        </tr>
        <tr>
          <th>pi()</th>
          <td>円周率。πって英語でpi、って書くんだ…</td>
        </tr>
        <tr>
          <th>sin(X)、cos(X)、tan(X)</th>
          <td>Xラジアンのそれぞれ正弦、余弦、正接。</td>
        </tr>
        <tr>
          <th>is_nan(値)</th>
          <td>値が数値の時true、そうでない時false。これ模擬アプリを作った時によく使っているやつ。</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="main-contents">
    <h3>数学関数で計算だ</h3>
    <p>さっき紹介した数学関数をもとに、</p>
    <p>「距離と角度から高さを求める(三角関数が必要なやつ)」計算をしてみるぞ。</p>
    <pre>
      <?php
        $kyori = 20;
        $kakudo = 32 * pi()/180; // 度数をラジアン(?)に変更
        $takasa = $kyori * tan($kakudo);
        $takasa = round($takasa*10)/10; // roundで四捨五入

        echo "木の高さは{$takasa}mです。";
       ?>
    </pre>
  </div>

  <div class="main-contents">
    <h3>ユーザ定義関数復習</h3>
    <p>今更だが、関数は自分で作れる。だから復習である。</p>
    <p>公式はこんな。</p>
    <pre>
      function 関数名(引数1,引数2,…){
        処理
        return 戻り値;
        //↑returnを必ず入れよう。そうしないと計算結果が返ってこない。
        //ちなみに、returnには「最終的な計算結果」を入れるといいんだろうか？
      }
    </pre>
    <p>「数値を2倍にする」サンプル関数。</p>
    <pre>
      function double($n){
        $result = $n * 2;
        return $result;
      }
    </pre>
    <p>では、早速このサンプル関数で「125」を倍にしてみよう。</p>
    <pre>
      $ans = double(125);
      echo $ans;
      <?php
      function double($n){
        $result = $n * 2;
        return $result;
      }
      $ans = double(125);
      echo $ans; echo "<br>";
       ?>
    </pre>
  </div>

  <div class="main-contents">
    <p>少々難しい関数を作ってみよう。「料金計算」だ。</p>
    <pre>
      function price($Uprice,$howMany){
        $shipCost = 250;
        $price = $Uprice * $howMany;
        //5000円未満は送料250円
        if($ryoukin<5000){
          $price += $shipCost;
        }
        return $price;
      }

      //2400円を2個購入した場合と1200円を5個購入した場合
      $price1 = price(2400,2);
      $price2 = price(1200,5);
      echo "金額1は{$price1}円"."<br>".PHP_EOL;
      echo "金額2は{$price2}円"."<br>".PHP_EOL;

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

      //2400円を2個購入した場合と1200円を5個購入した場合
      $price1 = price(2400,2);
      $price2 = price(1200,5);
      echo "金額1は{$price1}円"."<br>".PHP_EOL;
      echo "金額2は{$price2}円"."<br>".PHP_EOL;

      ?>
    </pre>
  </div>

  <div class="main-contents">
    <h3>ユーザ定義関数をHTMLコードに埋め込む</h3>
    <p>3200円を2個購入した場合は</p>
    <?php
      $price3 = price(3200,2);
      echo "{$price3}円";
     ?>
    <p>800円を5こ購入したら</p>
    <?php
      $price4 = price(800,5);
      echo "{$price4}円";
     ?>
  </div>

</body>
</html>
