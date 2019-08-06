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
      <h3>正規表現を使って郵便番号をチェックする</h3>
      <p class="pdg"></p><!--  .pdg -->
      <h3>郵便番号をチェックする</h3>
      <p>フォームで入力した郵便番号をチェックするコードは次の通り。</p>
      <p>基本的な流れはこれまでと同じ。</p>
      <p>文字エンコードの検証とHTMLエスケープの処理を行った後で$_POST['zip']から&zipに値を取り出してチェックする。</p>
      <p>郵便番号は「???-????」という形式、つまり「3桁の数字-4桁の数字」をしている。</p>
      <p>これを正規表現のパターンで書くと<strong>「/^[0-9]{3}-[0-9]{4}$/」</strong>となる。</p>
      <p>preg_match()を使って&zipをチェックし、<strong>戻り値がtrueでないときが郵便番号エラーと判断できる</strong>。</p>
      <pre class="zissyou">
        <?php
        require_once("hello1-8-2.7-1_util.php");
        // 文字エンコードの検証
        if(!cken($_POST)){
          $encoding = mb_internal_encoding();
          $err = "Encoding error. The expected encoding is".$encoding;
          // エラーメッセージを出して、以下のコードを全てキャンセルさせる
          exit($err);
        }
        // HTMLエスケープ(XSS対策)
        $_POST = es($_POST);

         ?>
         <?php
        // エラーメッセージを入れる配列
        $errors = [];
        if(isset($_POST['zip'])){
          // 郵便番号を取り出す
          $zip = trim($_POST['zip']);
          // 郵便番号のパターン
          $pattern = '/^[0-9]{3}-[0-9]{4}$/';
          if(!preg_match($pattern,$zip)){
            $errors[] = '郵便番号を正しく入力してください';
          }

        } else {
          // 未設定エラー
          $errors[] = '郵便番号を正しく入力してください';
        }
          ?>
          <?php
          if(count($errors)>0){
            // エラーがあった時
            echo '<ol class="error">';
            foreach($errors as $value){
              echo '<li>'.$value.'</li>';
            }
            echo '</ol><!--  .error -->';
          } else {
            // エラーがなかったとき
            echo "郵便番号は{$zip}です";
          }
           ?>
           <!-- 戻りボタンのフォーム -->
           <form action="hello1-8-2.7-5_zipCheckForm.php" method="POST">
             <ul>
               <li><input type="submit" value="戻る"></li>
             </ul>
           </form>

      </pre><!--  .zissyou -->
      <pre class="gaiyo">

        require_once("hello1-8-2.7-1_util.php");
        // 文字エンコードの検証
        if(!cken($_POST)){
          $encoding = mb_internal_encoding();
          $err = "Encoding error. The expected encoding is".$encoding;
          // エラーメッセージを出して、以下のコードを全てキャンセルさせる
          exit($err);
        }
        // HTMLエスケープ(XSS対策)
        $_POST = es($_POST);


        // エラーメッセージを入れる配列
        $errors = [];
        if(isset($_POST['zip'])){
          // 郵便番号を取り出す
          $zip = trim($_POST['zip']);
          // 郵便番号のパターン
          $pattern = '/^[0-9]{3}-[0-9]{4}$/';
          if(!preg_match($pattern,$zip)){
            $errors[] = '郵便番号を正しく入力してください';
          }

        } else {
          // 未設定エラー
          $errors[] = '郵便番号を正しく入力してください';
        }

          if(count($errors)>0){
            // エラーがあった時
            echo '＜ol class="error">';
            foreach($errors as $value){
              echo '＜li>'.$value.'＜/li>';
            }
            echo '＜/ol><!--  .error -->';
          } else {
            // エラーがなかったとき
            echo "郵便番号は{$zip}です";
          }

      </pre><!--  .gaiyo -->




      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
