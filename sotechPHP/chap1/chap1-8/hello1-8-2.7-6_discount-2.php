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
  <title>webページを作成するにあたっての知識(?)</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="">
</head>
<body>
  <style>
  *{
    /* margin: 0; */
  }
  .table1 thead th{
    background-color: black;
    color: white;
  }
  .form1{
    background-color: darkgray;
  }
  .input[type="submit"]{
    border: none;
    font-size: 16px;
  }
  .pdg{
    padding-top: 50px;
  }
  .gaiyo{
    background-color: rgb(255, 227, 227);
  }
  .zissyou{
    background-color:rgb(219, 255, 0) ;
  }
  .imgwrap{
    max-width: 800px;
    width: 100%;
  }
  .imgwrap img{
    width: 100%;
  }

  /* @charset "UTF-8"; */
  div{
    margin :1em;
  }
  li{
    list-style-type: none;
    margin-bottom: 1em;
  }
  ol > li{
    list-style-type: decimal;
    margin-bottom : 0;
  }
  a{
    color: #5e78c1;
    text-decolation: none;
  }
  a:hover {
    color :#b04188;
    text-decoration: underline;
  }
  .error{
    color: #f00;
  }


  </style>
    <div class="main-contents">
      <h2>HTTPの基礎知識</h2>
      <p>※$_POSTを使う解説は長く複雑になるので、</p>
      <p>「hello1-8-2.7-1_util.php」からはまとめて記述はせずファイルで分けます。</p>
      <h3>見えない入力フォームを作る</h3>
      <pre class="zissyou">
        <?php
          require_once("hello1-8-2.7-1_util.php");

          // 文字コードの検証
          if(!cken($_POST)){
            $encoding = mb_internal_encoding();
            $err = "Encoding Error. The expected encoding is".$encoding;
            // エラーメッセージを出して、すべての処理を停止させる
            exit($err);
          }

          // HTMLエスケープ(XSS防止)
          $_POST = es($_POST);


          // // 再入力ならば前回の値を初期値にする
          // // 個数に値があるかどうか
          // if(isset($_POST['kosu'])){
          //   // discount.phpの隠しフォームから値が送られている場合、
          //   $kosu = $_POST['kosu'];
          //   // 前回の値が入る
          // } else {
          //   $kosu = "";
          // }
          // ↑ここにはいらない。


          //
          //
          // 隠しフィードから値を受け取る
          // エラーメッセージを入れる配列
          $errors = [];
          // 割引率の入力値
          if(isset($_POST['discount'])){
            $discount = $_POST['discount'];
            // 入力値のチェック
            if(!is_numeric($discount)){
              // 数値でないときエラー
              $errors[] = "割引率のエラー";
            }
          } else{
            // 未設定エラー
            $errors[] = "割引率が未設定";
          }

          // 単価の入力値
          if(isset($_POST['tanka'])){
            $tanka = $_POST['tanka'];
            // 入力値のチェック
            if(!is_numeric($_POST['tanka'])){
              $errors[] = "単価のエラー";
            }
          } else {
            $errors[] = "単価が未設定";
          }
          // 隠しフィードから値を受け取るここまで
          //
          //


          //
          //
          // 入力フィードから値を受け取る
          // 個数の入力値
          if(isset($_POST['kosu'])){
            $kosu = $_POST['kosu'];
            // 入力値のチェック
            // if($kosu<0){
            if(!ctype_digit($kosu)){
              // 整数でない時エラー
              $errors[] = "個数は正の整数で入力してください。";
            }
          } else {
            $errors[] = "個数が未設定";
          }
          // 入力フィードからの値を受け取るここまで
          //
          //

         ?>
         <?php
            if(count($errors)>0){
              // エラーがあった時
              echo '<ol class="error">';
              foreach($errors as $value){
                echo '<li>',$value,'</li>';
              }
              echo '</ol><!--  .error -->';
            } else {
              // エラーがなかった時
              $price = $tanka * $kosu;
              $discount_price = floor($price * $discount); //floorは切り捨て
              $off_price = $price - $discount_price;
              $off_per = (1 - $discount)*100;
              // 3ケタ取り
              $tanka_fmt = number_format($tanka);
              $discount_price_fmt = number_format($discount_price);
              $off_price_fmt = number_format($off_price);
              // 表示する
              echo "単価:{$tanka_fmt}円","個数:{$kosu}個","<br />";
              echo "金額:{$discount_price_fmt}円","<br />";
              echo "(割引:-{$off_price_fmt}円、{$off_per}%OFF)","<br />";
            }

          ?>
          <!-- 戻りボタンのフォーム -->
          <form action="hello1-8-2.7-6_discountForm-2.php" method="POST">
            <input type="hidden" name="kosu" value="<?php echo $kosu; ?>">
            <!-- ↑隠しフィールドに個数を指定してPOSTする -->
            <ul>
              <li><input type="submit" value="戻る"></li>
            </ul>
          </form>
      </pre><!--  .zissyou -->

      <pre class="gaiyo">
        ＜?php
          require_once("hello1-8-2.7-1_util.php");

          // 文字コードの検証
          if(!cken($_POST)){
            $encoding = mb_internal_encoding();
            $err = "Encoding Error. The expected encoding is".$encoding;
            // エラーメッセージを出して、すべての処理を停止させる
            exit($err);
          }

          // HTMLエスケープ(XSS防止)
          $_POST = es($_POST);

          //
          //
          // 隠しフィードから値を受け取る
          // エラーメッセージを入れる配列
          $errors = [];
          // 割引率の入力値
          if(isset($_POST['discount'])){
            $discount = $_POST['discount'];
            // 入力値のチェック
            if(!is_numeric($discount)){
              // 数値でないときエラー
              $errors[] = "割引率のエラー";
            }
          } else{
            // 未設定エラー
            $errors[] = "割引率が未設定";
          }

          // 単価の入力値
          if(isset($_POST['tanka'])){
            $tanka = $_POST['tanka'];
            // 入力値のチェック
            if(!is_numeric($_POST['tanka'])){
              $errors[] = "単価のエラー";
            }
          } else {
            $errors[] = "単価が未設定";
          }
          // 隠しフィードから値を受け取るここまで
          //
          //


          //
          //
          // 入力フィードから値を受け取る
          // 個数の入力値
          if(isset($_POST['kosu'])){
            $kosu = $_POST['kosu'];
            // 入力値のチェック
            // if($kosu＜0){
            if(!ctype_digit($kosu)){
              // 整数でない時エラー
              $errors[] = "個数は正の整数で入力してください。";
            }
          } else {
            $errors[] = "個数が未設定";
          }
          // 入力フィードからの値を受け取るここまで
          //
          //

         ?>
         <
         ?php
            if(count($errors)>0){
              // エラーがあった時
              echo '＜ol class="error">';
              foreach($errors as $value){
                echo '＜li>',$value,'＜/li>';
              }
              echo '＜/ol><!--  .error -->';
            } else {
              // エラーがなかった時
              $price = $tanka * $kosu;
              $discount_price = floor($price * $discount); //floorは切り捨て
              $off_price = $price - $disocunt_price;
              $off_per = (1 - $discount)*100;
              // 3ケタ取り
              $tanka_fmt = number_format($tanka);
              $discount_price_fmt = number_format($discount_price);
              $off_price_fmt = number_format($off_price);
              // 表示する
              echo "単価:{$tanka_fmt}円","個数:{$kosu}個","＜br />";
              echo "金額:{$discount_price_fmt}円","＜br />";
              echo "(割引:-{$off_price_fmt}円、{$off_per}%OFF)","＜br />";
            }

          ?>
          <!-- 戻りボタンのフォーム -->
          ＜form action="hello1-8-2.7-6_discountForm.php" method="POST">
            ＜ul>
              ＜li>＜input type="submit" value="戻る">＜/li>
            ＜/ul>
          ＜/form>
      </pre><!--  .gaiyo -->



      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
