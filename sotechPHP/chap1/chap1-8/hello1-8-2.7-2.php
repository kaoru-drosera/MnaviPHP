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
     <h3>文字エンコードを効率化。その名も 「cken()」</h3>
     <p>mb_check_encode()を使って文字エンコードのチェックを効率よく行うcken()を、</p>
     <p>es()と同じファイルに作ろう。(別ファイルにしようとも考えたが本書通りでないと進行に影響が出そうだから)</p>
     <p>コードを以下で表示した後、解説に移ろう。</p>
     <pre class="gaiyo">

       // 配列の文字エンコードのチェックを行う
       function cken(array $data){
         $result = true;
         foreach($data as $key => $value){
           if(is_array($value)){
             // 含まれている値が配列の時文字列に連結する
             $value = inplode("",$value);
             // 配列に入っている値を連結したストリングスにしてチェックします

           }

           if(!mb_check_encoding($value)){
             // 文字のエンコードが一致しない時
             $result = false;
             // foreachでのスキャニングを中断する
             break;
           }
         }
         return $result;
       }


         // ※foreach文ですべてのキーと値を取り出す
         // foreach ($array as $key => $value){
         //   // $keyと$valueを使った繰り返しの処理
         // }

         // 「$key => $value」で、(連想？)配列「$array」から
         // キー→値の順に取り出している。
     </pre>

     <p>foreach文で配列から値を順に$valueに取り出し、</p>
     <p>もし入っていた値が配列ならimplode()を使って値を1この文字列に連結しておいてから、</p>
     <p>mb_check_encoding()で文字エンコーディングをチェックする(1階層の多次元配列までに対応)。</p>
     <p>文字エンコードが一致しない時は$resultにfalseを代入してforeach文の繰り返しを中断する。</p>
     <p class="pdg"></p>

     <h3>cken()をテストする</h3>
     <p>では、作ったcken()をテストしよう。</p>
     <p>ここでは、利用環境がutf-8のときにShift-JISの文字列が入っている配列をテストする。</p>
     <pre class="gaiyo">
       // util.phpを読み込む
       require_once("hello1-8-2.7-1_util.php");

       // Shift-JISのデータを用意する
       $utf8_string = "こんにちは";
       $sjis_string = mb_convert_encoding($utf8_string, "Shift-JIS");
       //                                                                   ↑テスト用にShift-JISに変換する

       // 内部エンコーディングを調べる
       $encording = mb_internal_encoding();

       // cken()でチェックする
       if(cken([$sjis_string])){
         echo "配列の値は、",$encording,"です。";
       } else {
         echo "配列の値は、",$encording,"ではありません。";
       }
     </pre>
     <pre class="zissyou">
       <?php

       // util.phpを読み込む
       require_once("hello1-8-2.7-1_util.php");

       // Shift-JISのデータを用意する
       $utf8_string = "こんにちは";
       $sjis_string = mb_convert_encoding($utf8_string, "Shift-JIS");
       //                                             ↑テスト用にShift-JISに変換する

       // 内部エンコーディングを調べる
       $encording = mb_internal_encoding();

       // cken()でチェックする
       if(cken([$sjis_string])){
         echo "配列の値は、",$encording,"です。";
       } else {
         echo "配列の値は、",$encording,"ではありません。";
       }

        ?>
     </pre>
     <p>mb_check_encoding()でShift-JISに変換した文字列$sjis_stringを作成し、</p>
     <p>これを配列に入れてcken()でチェックする。</p>
     <p>なお、現在の利用環境の内部エンコードはmb_internal_encording()で調べられる。</p>
     <p class="pdg"></p>
     <h3>さいごに・CSS追記情報</h3>
     <p>最後に、本書で使用しているCSSの追記情報をば。</p>
     <pre class="gaiyo">
       /* @charset "UTF-8"; */
       /* div{
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
       } */
     </pre>
     <style>
      /* @charset "UTF-8"; */
      /* div{
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
      } */

     </style>



    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
