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
      <p class="pdg"></p><!--  .pdg -->
      <h3>エラーがあったかどうかを判断して分岐する</h3>
      <p>最終的にエラーがあったかどうかは、$errorにエラーメッセージが入っているかどうかで判断する。</p>
      <p>ここで先の例のnameCheck.phpと同じようにif文を使った分岐を行う。</p>
      <p>今回は一般的なif{}else{}を使ってるが、＜?php ?＞で区切られていることに注目だ。</p>
      <pre class="gaiyo">
        ＜?php
        //
        //
        if(count($errors)>0){
          // ↑ trueのとき。
          //配列$errorsの値が0子でないときはエラーがあったことになります

          // エラーの内容をリスト表示する
          echo '＜ol class="error">';
          foreach($errors as $value){
            echo "＜li>",$value,"＜/li>";
          }
          echo "＜/ol><!--  .error -->";
          // エラーの内容をリスト表示する
          ?＞

      </pre><!--  .gaiyo -->
      <div class="imgwrap"><img src="imgs/hello1-8-2.7-4_warikan.php_1.png" alt="hello1-8-2.7-4_warikan.php_1.png"></div><!--  .imgwrap -->
      <pre class="gaiyo">
      } else {
        //
        //
        // エラーがなかった時。
        // エラーがなかった時に実行する内容。
        $amari = $goukei % $ninzu;
        $price = ($goukei - $amari) / $ninzu;

        // 3ケタ取り
        $goukei_fmt = number_format($goukei);
        $price_fmt = number_format($price);

        // 表示する
        echo "{$goukei_fmt}円を{$ninzu}人で割り勘する時は、","<br />";
        echo "一人当たり{$price_fmt}円を支払えば、不足分は{$amari}円です","<br />";
        //
        //

      }
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>エラーメッセージを表示する</h3>
      <p>配列$errorsに入っている値の個数をcount()で調べて<strong>1個以上ならばforeach文でエラーメッセージを取り出し、</strong></p>
      <p><strong>ulタグを使ってリストを表示する。</strong></p>
      <pre class="gaiyo">
        ＜?php
        if(count($errors)>0){
          // ↑ trueのとき。
          //配列$errorsの値が0子でないときはエラーがあったことになります

          // エラーの内容をリスト表示する
          echo '＜ol class="error">';
          foreach($errors as $value){
            echo "＜li>",$value,"＜/li>";
          }
          echo "＜/ol><!--  .error -->";
          // エラーの内容をリスト表示する
          ?＞
      </pre><!--  .gaiyo -->








      <a href="hello1-8-2.7-4_warikan_codeKaisetsu.php">説明に戻る</a>
      <div>
        <a href="hello1-8-2.7-4_warikan_codeKaisetsu-2.php">フォームの値が0でないか、-でないかを確認する</a>
        |
        <a href="hello1-8-2.7-4_warikan_codeKaisetsu-4.php">「戻る」のボタンを表示する</a>
      </div>



      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
