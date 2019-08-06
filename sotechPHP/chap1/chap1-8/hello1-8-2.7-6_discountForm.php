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
      <h3>はじめに</h3>
      <p>hiddenタイプを利用することで、</p>
      <p>フォームでユーザが入力する値とは別に用意した値をPOSTリクエストに含ませることができる。</p>
      <p>今回は戻るボタンでフォームページに戻ったときに入力しておいた値を初期値として表示する方法を紹介だ。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>隠しフィールドでPOSTする</h3>
      <p class="pdg"></p><!--  .pdg -->
      <h3>個数だけを入力するフォームを作る</h3>
      <a href="hello1-8-2.7-6_discountForm.php">最初の説明に戻る</a>
      <p>割引率と単価を入力するinputタグのtype属性を"hidden"とし、</p>
      <p>value属性で入力値を設定している点に注目だ。</p>
      <p>では、コードを見てみよう。</p>
      <p><strong>以下、解説</strong></p>
      <ol>
        <li><a href="hello1-8-2.7-6_discountForm_Codekaisetsu_1.php">見えない入力フォームを作る</a></li>
        <li><a href="hello1-8-2.7-6_discountForm_Codekaisetsu_2.php">「計算する」ボタンで実行するコード</a></li>
      </ol>

      <pre class="zissyou">
        <?php
          // 割引率
          $discount = 0.8;
          $off = (1 - $discount)*100;
          if($discount > 0){
            echo "<h2>このページでのご購入は{$off}%offになります</h2>";
          }
          // 単価の設定
          $tanka = 2900;
          // 3ケタ位取り
          $tanka_fmt = number_format($tanka);
         ?>
        <!-- 入力フォームを作る -->
        <form action="hello1-8-2.7-6_discount.php" method="POST">
          <!-- 隠しフィールドに割引率と単価を設定してPOSTする -->
          <input type="hidden" name="discount" value="<?php echo $discount ?>">
          <input type="hidden" name="tanka" value="<?php echo $tanka ?>">
          <!-- ↑変数に入っている値をPOSTする -->
          <ul>
            <li><label for="">単価:<?php echo $tanka_fmt; ?>円</label></li>
            <li><label for="">個数:<input type="number" name="kosu"></label></li>
            <li><input type="submit" value="計算する"></li>
          </ul>
        </form>
      </pre><!--  .zissyou -->
      <pre class="gaiyo">
        ＜?php
          // 割引率
          $discount = 0.8;
          $off = (1 - $discount)*100;
          if($discount > 0){
            echo "＜h2>このページでのご購入は{$off}%offになります＜/h2>";
          }
          // 単価の設定
          $tanka = 2900;
          // 3ケタ位取り
          $tanka_fmt = number_format($tanka);
         ?>
        <!-- 入力フォームを作る -->
        ＜form action="hello1-8-2.7-6_discount.php" method="POST">
          <!-- 隠しフィールドに割引率と単価を設定してPOSTする -->
          ＜input type="hidden" name="discount" value="＜?php echo $discount ?>">
          ＜input type="hidden" name="tanka" value="＜?php echo $tanka ?>">
          <!-- ↑変数に入っている値をPOSTする -->
          ＜ul>
            ＜li>＜label for="">単価:＜?php echo $tanka_fmt; ?>円＜/label>＜/li>
            ＜li>＜label for="">個数:＜input type="number" name="kosu">＜/label>＜/li>
            ＜li>＜label for="">＜input type="submit" value="計算する">＜/label>＜/li>
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
