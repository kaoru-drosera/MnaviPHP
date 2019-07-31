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
  .table1 thead th{
    background-color: black;
    color: white;
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
  </style>
  <div class="main-contents">
    <h2>HTTPの基礎知識</h2>
    <h3>送信フォームを作る</h3>

    <p>HTMLで送信フォームを作り、フォームのアクションでPHPプログラムを実行する。</p>
    <p>formタグのmethod属性でPOSTまたはGETを指定し、action属性で実行するPHPファイルを指定するのだ。</p>
    <p class="pdg"></p>
    <h3>テキストフィールドの値をGETメソッドで送信する</h3>
    <p>パラメータをURLに付加する形式のGETメソッドは、</p>
    <p>前節で説明したように<strong>aタグを使って簡単に送信することができる</strong>が、</p>
    <p>formタグのmethod属性を"GET"にすれば、POSTリクエストと同じようにフォームを使って送ることもできる。</p>
    <p class="pdg"></p>
    <p>次の例で示すフォームには、番号を入力するテキストフィードがあり、</p>
    <p>「調べる」ボタンをクリックすると入力された番号をGETメソッドで「hello1-8-2.5_checkNo.php」に送る。</p>
    <p>「hello1-8-2.5_checkNo.php」では、GETリクエストのクエリ文字から番号を取り出して、</p>
    <p>登録番号の配列に入っているかどうかをチェックして、その結果を新しいページで表示する。</p>
    <p class="pdg"></p>
    <form action="hello1-8-2.5_checkNo.php" method="GET">
      <!-- method属性がPOSTから「GET」に　↑ -->
      <!-- <ul>
        <li><label for="tanka">単価:  <input type="number" name="tanka" id="tanka"></label></li>
        <li><label for="kosu">個数:  <input type="number" name="kosu" id="kosu"></label></li>
        <li><label for="submit1"><input type="submit" value="計算開始！" id="submit1"></label></li>
      </ul> -->
      <ul>
        <li><label>番号 :  <input type="number" name="no" ></label></li>
        <p>↑name属性が「no」</p>
        <li><label><input type="submit" value="調べる" ></label></li>
      </ul>
    </form>
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <h3>GETされた値を調べる</h3>
    <p>GETされた値は$_GETグローバル変数に入る。</p>
    <p>$_POSTと同様に<strong>$_GETもフォームのinput項目の値の配列になる</strong>。</p>
    <p>入力された各値は、<strong>name属性に付けた名前をキーにして配列$_GETに保存される</strong>。</p>
    <p>このファイルにおいて、番号を入力するinputタグのnameには"no"という名前をつけている。</p>
    <p>そのため、$_GET["no"]でアクセスできる。<strong>配列の中に番号があるかどうかは「in_array()」</strong></p>
    <p>で判断している。</p>
    <p class="pdg"></p>

    <h3>マルチバイト文字をURLエンコードする</h3>
    <p><strong>GETリクエストのクエリ文字にマルチバイトが含まれている場合、パラメータをURLエンコードして添付する。</strong></p>
    <p>URLエンコードは<strong>「rawurlencode()」</strong>で行い、逆のデコードは<strong>「rawurldecode()」</strong>で行う。</p>
    <p>URLエンコードのいらないブラウザもあるが、すべてのブラウザが対応していないのでこの処理を行う。</p>
    <p>なお、POSTメソッドを使う場合はPHPがエンコードとでコードを自動で行うので必要はない。</p>
    <p>p263-p264から画像持ってきてくれると。</p>
    <div class="imgwrap"><img src="imgs/URLエンコード.jpg" alt="URLエンコード"></div>
    <p class="pdg"></p>
    <pre class="gaiyo">

            // // URLをエンコードする
            // $data = "東京";
            // $data = rawurlencode($data);
            //
            // // クエリ文字列のリンクを作る
            // $url = "hello1-8-2.5_checkDate.php";
            // echo "<a href={$url}?data={$data}>","送信する","</a>";
            // // クエリ文字列を作ります↑

    </pre>
    <?php

      // URLをエンコードする
      $data = "東京";
      $data = rawurlencode($data);

      // クエリ文字列のリンクを作る
      $url = "hello1-8-2.5_checkDate.php";
      echo "<a href={$url}?data={$data}>","送信する","</a>";


     ?>

    <p class="pdg"></p>



    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
