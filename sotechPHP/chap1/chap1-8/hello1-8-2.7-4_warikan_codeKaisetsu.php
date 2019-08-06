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
      <h3>入力された値が数値かどうか、0でないかどうか</h3>
      <p>↓ ようやっとのコードの表示だ。</p>
      <h4>説明を見る</h4>
      <ol>
        <li><a href="hello1-8-2.7-4_warikanForm_introduction.php">最初の説明</a></li>
        <li><a href="hello1-8-2.7-4_warikan_codeKaisetsu-1.php">フォームの値が数値かどうか確認する</a></li>
        <li><a href="hello1-8-2.7-4_warikan_codeKaisetsu-2.php">フォームの値が0でないか、-でないかを確認する</a></li>
        <li><a href="hello1-8-2.7-4_warikan_codeKaisetsu-3.php">エラーがあったかどうかを判断して分岐する</a></li>
        <li><a href="hello1-8-2.7-4_warikan_codeKaisetsu-4.php">「戻る」のボタンを表示する</a></li>
      </ol>

      <pre class="gaiyo">
        ＜?php
          require_once("hello1-8-2.7-1_util.php");

          // 文字エンコードの検証
          if(!cken($_POST)){
            $encoding = mb_internal_encoding();
            $err = "Encoding Error. The expected encoding is".$encoding;
            // エラーメッセージを出して、以下のコードを全てキャンセルさせる
            exit($err);
          }
          // HTMLエスケープ (XSS対策)
          $_POST =  es($_POST);

          //
          // エラーメッセージを入れる配列
          $errors = [];
          //
          //


          //
          //
          // 合計金額のチェック。
          // ここでPOSTされた合計金額をチェックする  「$_POST['goukei']」?
          if(isset($_POST['goukei'])){
            $goukei = $_POST['goukei'];
            if(!ctype_digit($goukei)){
              // 0以上の整数でないときはエラー
              $errors[] = "合計金額を0以上の整数で入力してください";
            }
          } else {
            $errors[] = "合計金額が未設定";
          }
          // ここでPOSTされた合計金額をチェックする
          //
          //

          //
          //
          // 人数のチェック
          // ここで、POSTされた人数をチェックする。  「$_POST['ninzu']」?
          if(isset($_POST['ninzu'])){
            $ninzu = $_POST['ninzu'];
            if(!ctype_digit($ninzu)){
              // 0以上の整数でないとエラー
              $errors[] = "人数を0以上の整数で入力してください";
            } else if ($ninzu === 0) {
              $errors[] = "人数は0以上を入力してください(0では割れません)";
            }
          } else {
            $errors[] = "人数が未設定";
          }
          // ここで、POSTされた人数をチェックする。
          //
          //

          //
          //
          if(count($errors)>0){
            // ↑ 配列$errorsの値が0子でないときはエラーがあったことになります

            // エラーの内容をリスト表示する
            echo '＜ol class="error">';
            foreach($errors as $value){
              echo "＜li>",$value,"</li>";
            }
            echo "＜/ol><!--  .error -->";
            // エラーの内容をリスト表示する
            ?＞
      </pre>
      <div class="imgwrap"><img src="imgs/hello1-8-2.7-4_warikan.php_1.png" alt="hello1-8-2.7-4_warikan.php_1"></div><!--  .imgwrap -->
      <pre class="gaiyo">
        ＜?php
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
          echo "{$goukei_fmt}円を{$ninzu}人で割り勘する。","＜br />";
          echo "一人当たり{$price_fmt}円を支払えば、不足分は{$amari}円です","＜br />";
          //
          //

        }
         ?＞
      </pre><!--  .gaiyo -->
      <p>p279の画像持ってきてにゃ</p>
      div.imgwrap>img[src=imgs/ alt]
      <p class="pdg"></p><!--  .pdg -->
      <h3>HTML5の入力制限機能</h3>
      <p>HTML5にはrequired、min、max、maxlength、patternといった入力制限機能がある。</p>
      <p>しかし、HTML5に対応していないブラウザがあるのはもちろんのこと、</p>
      <p>実際サーバに送られてくる値は必ずチェックする必要がある。</p>











      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
