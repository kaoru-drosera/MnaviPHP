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
    <p>※$_POSTを使う解説は長く複雑になるので、</p>
    <p>「hello1-8-2.7-1.php」からはまとめて記述はせずファイルで分けます。</p>
     <h3>ユーザ関数でhtmlspecialcharsを簡略化！名付けて 「es()」!</h3>
      <p>ユーザからのデータをブラウザに表示する前に</p>
      <p>「htmlspecialchars()」を通してHTMLエスケープを行うことが必須になるが、</p>
      <p>この処理を行う前に<strong>array_map()</strong>をうまく利用したユーザ関数を作っておくと便利。</p>
      <p class="pdg"></p>
     <h3>array_map()って？</h3>
     <p>「array_map()」には2つの使い方がある。</p>
     <p>1つは指定した配列の要素にコールバック関数を適用したい時である。</p>
     <p>コールバック関数とは以下のもの。</p>
     <pre class="gaiyo">
        function 関数名($value){
          // 処理文
          return 値;
        }
     </pre>
     <p class="pdg"></p>
     <p>では早速公式も見てみよう。</p>
     <p><strong>array_map</strong>とはいわゆる<strong>「配列の個々の値でコールバック関数を実行する」</strong>式だ。</p>
     <pre class="gaiyo">
       $result = array_map($callBack, $array);
       // ↑実行後の配列が戻る                ↑元の配列が変化しない
       // 　　　　　　　　　　　　　　　　　　　　　　　　　　　　　↑コールバック関数名
     </pre>
     <p class="pdg"></p>
     <p>ユーザ定義するコールバック関数では、配列の値を受け取る引数を用意し、処理後の値を返すのだ。</p>
     <p><strong>引数で与えた配列を直接書き換えるのではなく</strong>、</p>
     <p><strong>コールバック関数で処理した配列が$resultに入る</strong>ので注意だ。</p>

     <h3>実際にes()を作ってみよう</h3>
     <p>実際に作ってみよう。こんな感じに。</p>
     <pre class="gaiyo">
       // 引数に対してhtmlspecialchars()を実行するes()

       //XSS対策のためのHTMLエスケープ
       function es($data, $charset='utf-8'){
         // 初期値あったろうが〜〜！！
         // ちなみに復習すると、引数に「="値"」すると
         // 入力しなかった場合に入る「初期値」を設定することができる。

         if(is_array($data)){
           // 再帰呼び出し

           return array_map(__METHOD__, $data);
           // 配列の場合は、値を1づつ引数にして、
           // 再帰呼び出しをする

           // 「__METHOD__」は、「現在実行中のメソッド自身を示す特殊な定数(マジック定数)」である。
           // ここでは「es()」を指すので、esのなかでesを使っていることになる。
           // この手法が、「再帰呼び出し」である。

         } else {
           
           // HTMLエスケープを使う
           return htmlspecialchars($data, ENT_QUOTES, $charset);
         }
       }
     </pre>



    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
