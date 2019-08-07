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
      <h3>マイル数を入力するとキロメートルに換算できるページ</h3>
      <p>次の例では、テキストフィールドにマイル数を入力するとキロメートルに換算した結果を</p>
      <p>同じページに表示する。換算結果が同じページに表示されるので、続けて別の値を換算することができる。</p>
      <pre class="zissyou">
        <?php
          require_once("hello1-8-2.7-1_util.php");

          // 文字コードの検証
          if(!cken($_POST)){
            $encoding = mb_internal_encoding();
            $err = "Encoding Error. The expected encoding is ".$encoding;
            // エラーメッセージを出して以下のコードを全てキャンセルさせる
            exit($err);
          }

          // htmlエスケープ
          $_POST = es($_POST);
         ?>
         <?php
          // POSTされた値を取り出す
          if(isSet($_POST)){
            // POST二値があるのでこのページがフォーム入力のactionで再度開く　ここから
            // 数値かどうか確認する
            $isNum = is_numeric($_POST["mile"]);
            if($isNum){
              // 数値なら計算式とフォーム表示の値で使う
              $mile = $_POST["mile"];
              $error = "";
            } else {
              $mile = "";
              $error = '<span class="error">数値を入力してください</span>';
              // POST二値があるのでこのページがフォーム入力のactionで再度開く　ここまで
            }
          } else {
            // POSTされた値がない時。
            // $_POSTに値がないのでこのページが初めて開く
            $isNum = false;
            $mile = "";
            $error = "";
          }
          ?>
          <!-- 入力フォームを作る(現在のページにPOSTする) -->
          <form action="<?php echo es($SERVER['PHP_SELF']); ?>" method="POST">
            <ul>
              <li>
                <label for="">
                マイルをkmに換算:<input type="text" name="mile" value="<?php echo $mile; ?>">
                </label>
                <!-- エラー表示 -->
                <?php echo $error; ?>
            </li>
              <li><input type="submit" value="計算する"></li>
            </ul>
          </form>
          <?php
          // 数値であれば結果を表示する
            if($isNum){
              echo "<hr />";
              // $mileに数値が入っている時
              // kmに換算して表示する
              $kilomater = ceil($mile * 1.609344);
              echo "{$mile}マイルは約{$kilomater}kmです";
              // $mileに数値が入っている時
              // kmに換算して表示する
            }
           ?>
      </pre><!--  .zissyou -->
      <pre class="gaiyo">
        require_once("hello1-8-2.7-1_util.php");

        // 文字コードの検証
        if(!cken($_POST)){
          $encoding = mb_internal_encoding();
          $err = "Encoding Error. The expected encoding is ".$encoding;
          // エラーメッセージを出して以下のコードを全てキャンセルさせる
          exit($err);
        }

        // htmlエスケープ
        $_POST = es($_POST);

        // POSTされた値を取り出す
        if(isSet($_POST)){
          // POST二値があるのでこのページがフォーム入力のactionで再度開く　ここから
          // 数値かどうか確認する
          $isNum = is_numeric($_POST["mile"]);
          if($isNum){
            // 数値なら計算式とフォーム表示の値で使う
            $mile = $_POST["mile"];
            $error = "";
          } else {
            $mile = "";
            $error = '＜span class="error">数値を入力してください＜/span>';
            // POST二値があるのでこのページがフォーム入力のactionで再度開く　ここまで
          }
        } else {
          // POSTされた値がない時。
          // $_POSTに値がないのでこのページが初めて開く
          $isNum = false;
          $mile = "";
          $error = "";
        }

        <!-- 入力フォームを作る(現在のページにPOSTする) -->
        ＜form action="＜?php echo es($SERVER['PHP_SELF']); ?>" method="POST">
          ＜ul>
            ＜li>
              ＜label for="">
              マイルをkmに換算:＜input type="text" name="mile" value="＜?php echo $mile; ?>">
              ＜/label>
              <!-- エラー表示 -->
              ＜?php echo $error; ?>
          ＜/li>
            ＜li>＜input type="submit" value="計算する">＜/li>
          ＜/ul>
        ＜/form>

        // 数値であれば結果を表示する
          if($isNum){
            echo "＜hr />";
            // $mileに数値が入っている時
            // kmに換算して表示する
            $kilomater = ceil($mile * 1.609344);
            echo "{$mile}マイルは約{$kilomater}kmです";
            // $mileに数値が入っている時
            // kmに換算して表示する
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
