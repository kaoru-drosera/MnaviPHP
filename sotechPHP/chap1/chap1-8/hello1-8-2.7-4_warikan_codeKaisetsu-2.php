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
      <h3>人数が整数であるか、0人ではないかをチェックする</h3>
      <p>と言ってもまずは合計金額のコードを復習。</p>
      <pre class="gaiyo">
        //
        //
        // 合計金額のチェック。
        // ここでPOSTされた合計金額をチェックする  「$_POST['goukei']」?
        if(isset($_POST['goukei'])){
          $goukei = $_POST['goukei'];
          // if(!ctype_digit($goukei)){
          // ↑ctype_digit意味なーい！反応しない！試しに合計金額で試したら
          // そのまま０円でイケちゃったよー！
          if($goukei <= 0){
            // 0以上の整数でないときは未設定エラー
            $errors[] = "合計金額を0以上の整数で入力してください";
          }
        } else {
          $errors[] = "合計金額が未設定";
        }
        // ここでPOSTされた合計金額をチェックする
        //
        //
      </pre><!--  .gaiyo -->
      <p class="pdg"></p><!--  .pdg -->
      <p>合計金額と同じように人数も。</p>
      <p>人数は1以上の整数でなければならないので、先に整数かどうかをチェックし、</p>
      <p>整数の場合はさらに0でないかをチェックする。</p>
      <pre class="gaiyo">
        //
        //
        // 人数のチェック
        // ここで、POSTされた人数をチェックする。  「$_POST['ninzu']」?
        if(isset($_POST['ninzu'])){
          $ninzu = $_POST['ninzu'];
          // if(!ctype_digit($ninzu)){
          // ↑ctype_digit意味なーい！反応しない！試しに合計金額で試したら
          // そのまま０円でイケちゃったよー！
          if($ninzu <= 0){
            // 0以上の整数でないとエラー
            $errors[] = "人数を0以上の整数で入力してください";
          } else if ($ninzu == 0) {
            // ↑の==は===としないこと。人数に0を入力したらエラーを吐いた。
            //
            //
            $errors[] = "人数は0以上を入力してください(0では割れません)";
          }
        } else {
          $errors[] = "人数が未設定";
        }
        // ここで、POSTされた人数をチェックする。
        //
        //
      </pre><!--  .gaiyo -->
      <a href="hello1-8-2.7-4_warikan_codeKaisetsu.php">説明に戻る</a>
      <div>
        <a href="hello1-8-2.7-4_warikan_codeKaisetsu-1.php">フォームの値が数値かどうか確認する</a>
        |
        <a href="hello1-8-2.7-4_warikan_codeKaisetsu-3.php">エラーがあったかどうかを判断して分岐する</a>
      </div>



      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
