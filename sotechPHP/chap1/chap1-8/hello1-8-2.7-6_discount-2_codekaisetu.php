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
      <p class="pdg"></p><!--  .pddg -->
      <h3>戻るボタンで個数を渡す</h3>
      <p>割引ページフォームでフォーム入力された「個数」の値はPOSTされ渡されてきていて$kosuに入っている。</p>
      <p>そこで「戻る」ボタンで割引購入ページに戻る際のPOSTデータに$kosuの値を含めて送り返す。</p>
      <p>その方法は「割引率」と「単価」の渡し方と同じで、見えない入力フォームを使う。</p>
      <p>先のサンプルdiscount.phpの最後にある「戻りボタンのフォーム」のHTMLコード部分を次のように書き換える。</p>
      <pre class="gaiyo">
        ＜form action="hello1-8-2.7-6_discountForm-2.php" method="POST">
          ＜input type="hidden" name="kosu" value="＜?php echo $kosu; ?>">
          <!-- ↑隠しフィールドに個数を指定してPOSTする -->
          ＜ul>
            ＜li>＜input type="submit" value="戻る">＜/li>
          ＜/ul>
        ＜/form>
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>「戻る」ボタンで開いた時前回入力した値を表示する</h3>
      <p>個数の入力フォームを表示するコードは基本的には元のものと違いはないが、</p>
      <p>「戻る」ボタンでPOSTされた値を受け取って、</p>
      <p>「個数」テキストフィールドの初期値として設定するコードが追加されている。</p>
      <p>戻りにはユーザ入力はないが、念のために最初に文字エンコードの検証とHTMLエスケープも行っている。</p>
      <p>discountFormの「//割引率」より上のコードに、以下のコードを追加している。</p>

      <pre class="gaiyo">
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

      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>POSTリクエストに値があれば取り出す</h3>
      <p>「戻る」ボタンで開いたかどうかは、</p>
      <p>isset()を使って$_POST['kosu']に値がセットされているかどうかで判断する。</p>
      <p>値がセットされているのならば$kosuにその値を取り出すのだ。</p>
      <p>p293の図が欲しい</p>
      <p>discountFormのHTMLエスケープのすぐ下のこのコードだ。</p>
      <pre class="gaiyo">
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
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>入力フォームに$kosuの値を初期値として表示する</h3>
      <p>個数を入力するテキストフィールドに$kosuにいれた値を表示するには、</p>
      <p>inputタグにvalue属性に値を設定する。</p>
      <p>フォームを作る部分はHTMLコードで直接書いているので、</p>
      <p>「value="＜?php echo $kosu;?>"」のように指定します</p>
      <p>そうそう。ここを直していないばかりに「戻る」を押しても値が空のままなのだった。</p>
      <pre class="gaiyo">
        <!-- ↑変数に入っている値をPOSTする -->
        ＜ul>
          ＜li>＜label for="">単価:＜?php echo $tanka_fmt; ?>円＜/label>＜/li>
          ＜li>＜label for="">個数:＜input type="number" name="kosu" value="＜?php echo $kosu; ?>">＜/label>＜/li>
  　　                                                                                                                                ↑個数のフォームのvalueに、「＜?php echo $kosu; ?>」を追加。
          ＜li>＜input type="submit" value="計算する">＜/li>
        ＜/ul>
      </pre><!--  .gaiyo -->









      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
