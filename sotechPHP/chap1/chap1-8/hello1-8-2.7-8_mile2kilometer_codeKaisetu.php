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
      <h3>ページが初めて開いたのかPOSTで開いたのかを判別する</h3>
      <p>ポイントは先にも書いたように、このページのフォーム入力で再びこのページを開くところにある。</p>
      <p>次の図がこの処理の大まかな流れである。p307</p>
      div.imgwrap>img[imgs/]
      <p>$_POST['mile']の値が設定されているかどうかで、</p>
      <p>初めて開いたのか、フォームでPOSTされて開いたのかどうかを区別する。</p>
      <p>初めてならばからの入力フォームを表示し、POSTに値があればその入力値(マイル数)をフォームに表示し、</p>
      <p>キロメートルに換算した計算結果を表示する。</p>
      <p>このページを初めて開いた時は、</p>
      <p>テキストフィールドが空でもエラーメッセージが表示されず、計算結果も出力されない。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>POSTで開いた時</h3>
      <p>isSet(1_POST['mile'])がtrueの時はPOSTで値が送られた時である。</p>
      <p>まず、その値が数値かどうかをis_numeric()で判定し、数値ならばその値を$mileに代入する。</p>
      <p>$isNumの値は菅算を実行するかどうかの判断で使うのでtrueを代入する。</p>
      <p>値が入っていても数値ではない場合は$mileを空にし、$errorにはエラーメッセージを入れておく。</p>
      <p>isSet($_POST["mile"])がfalseの時はPOSTではないので、$isNumをfalseにして、</p>
      <p>$mileと$errorはからにしておく。</p>
      <pre class="gaiyo">
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
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>数値以外が入力されたならばエラーメッセージを出す</h3>
      <p>is_numeric()はマイナスも含めて小数点がある値も数値として判断するが、</p>
      <p>空白や数値以外の文字が入っているとfalseになる。</p>
      <p>is_numeric($_POST["mile"])、つまり、$isNumの値がfalseの時は$errorにエラーメッセージを入れる。</p>
      <p>この値は入力フォームを表示する際に表示するが、エラーがなければからにしているので、</p>
      <p>エラーがある時だけメッセージが表示されることになる。</p>
      <p>p309</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>入力フォームを作る</h3>
      <p>POSTで開いた場合もそうでない場合も入力フォームは表示する。</p>
      <p>テキストフィールドのvalueは$mileを設定する。</p>
      <p>POSTで数値が送られてきているならば、$mileにはその値が入っているので、</p>
      <p>フィールドには入力したままの値が表示される。</p>
      <pre class="gaiyo">
        ＜input type="text" name="mile" value="＜?php echo $mile; ?>">
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>現在のページ1_SERVER['PHP_SELF']にPOSTする</h3>
      <p>このフォームの最大のポイントは、現在開いているページに値をPOSTするところ。</p>
      <p>現在開いているファイル名は、スーパーグローバル変数の$_SERVERを使い、$_SERVER['PHP_SELF']で調べることができる。</p>
      <p>この値を利用するなら、</p>
      <p><strong>「action="＜?php echo htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES,'utf-8') ?>"」</strong></p>
      <p>でPOST先を指定できる。</p>
      <p>なお、<strong>$_SERVER['PHP_SELF']もXSSによるパラメータ改ざんの危険があるため、HTMLエスケープが必要になる。</strong></p>
      <p class="pdg"></p><!--  .pdg -->
      <p>現在開いているページはmile2kilomater.phpなので「action="mile2kilomater.php"」と書いたのと同じことになるが、</p>
      <p>$_SERVER['PHP_SELF']を使うことで後からファイル名を変更した時など書き換える必要がないコードになる。</p>
      <p>サンプルでは読み込んでいるutil.phpのes()を使ってhtmlspecialchars()を適用できるので、</p>
      <p>actionを次のように書くことができる。</p>
      <pre class="gaiyo">
        ＜form action="＜?php echo es($SERVER['PHP_SELF']); ?>" method="POST">
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <h3>マイルをキロメートルに換算する</h3>
      <p>マイルをキロメートルに換算して、その結果を表示するかどうかは1mileが数値かどうかで決める。</p>
      <p>この判定結果はすでに$isNumに入れているので、$isNumがtrueならば換算式を実行して表示する。</p>
      <pre class="gaiyo">
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
      <h3>おまけ サーバ情報　$_SERVER</h3>
      <p>スーパーグローバル関数の1_SERVERには、サーバの様々な情報が入っている。</p>
      <p>サンプルで使用した'PHP_SELF'以外にも、</p>
      <p><strong>'REQUEST_METHOD'</strong>:ページを開くためのメソッド、</p>
      <p><strong>'QUERY_STRING'</strong>GETリクエストのURLの?以降の内容、</p>
      <p><strong>'REMOTE_ADR'</strong>リクエストしたマシンのIPアドレズ、そして</p>
      <p>このページをリクエストする前にブラウザが開いていたページを示す<strong>'HTTP_REFERER'</strong>などがある。</p>
      <p>詳しくはPHP公式ガイドも参考のこと。</p>


      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
