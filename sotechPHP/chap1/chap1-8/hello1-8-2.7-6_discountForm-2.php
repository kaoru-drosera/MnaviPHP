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
      <h3>戻ったページに前回の入力値を残しておく</h3>
      <p>「戻る」ボタンで入力フォームに戻った時、</p>
      <p>新規にフォーム入力画面を表示すると入力フィールドの値は空になっている。</p>
      <p>前ページに戻った場合には、前回入力した値が残っている方が親切である。</p>
      <p>このような場合にも、hiddenタイプの入力を利用できる。</p>
      <p>なお、ページ間の移動で値を持ち帰りたい時には<strong>「セッション関数」</strong>を利用する方法がある。</p>
      <p>セッション関数については改めて説明する。p368。</p>

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


        // 再入力ならば前回の値を初期値にする
        // 個数に値があるかどうか
        if(isset($_POST['kosu'])){
          // discount.phpの隠しフォームから値が送られている場合、
          $kosu = $_POST['kosu'];
          // 前回の値が入る
        } else {
          $kosu = "";
        }
        // 文字コードとHTMLエスケープ一式と、
        // ↑のコードを付け加える。

         ?>
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
        <form action="hello1-8-2.7-6_discount-2.php" method="POST">
          <!-- 隠しフィールドに割引率と単価を設定してPOSTする -->
          <input type="hidden" name="discount" value="<?php echo $discount ?>">
          <input type="hidden" name="tanka" value="<?php echo $tanka ?>">
          <!-- ↑変数に入っている値をPOSTする -->
          <ul>
            <li><label for="">単価:<?php echo $tanka_fmt; ?>円</label></li>
            <li><label for="">個数:<input type="number" name="kosu" value="<?php echo $kosu; ?>"></label></li>
            <!-- 個数のフォームのvalueに、「＜?php echo $kosu; ?>」を追加。 -->
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
