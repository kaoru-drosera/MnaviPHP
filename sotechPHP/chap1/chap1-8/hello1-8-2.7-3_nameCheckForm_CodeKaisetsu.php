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
     <h3>「hello1-8-2.7-3_nameCheckForm.html」コード解説</h3>
     <pre class="gaiyo">
       require_once("hello1-8-2.7-1_util.php");
       // ckenコードを読み込む。

       // 文字エンコードの検証。
       if(!cken($_POST)){
         $encoding = mb_internal_encoding();
         $err = "Encoding Error. The expected encoding is".$encoding;
         // エラーメッセージを出して、以下のコードを全てキャンセルさせる。
         exit($err);
       }
       // HTMLエスケープ(XSS対策);
       $_POST = es($_POST);
       // $_POSTで送られてきた値をesが通す、
       // いわば関所的な役割か。

       // エラーフラグ
       $isError = false;
       // 名前を取り出す
       if(isset($_POST['name'])){
         $name = trim($_POST['name']);
         if($name === ""){
           // 空白の時エラー
           $isError = true;
         }

       } else {
         // 未設定の時エラー
         $isError = true;
       }



       // ↓ 以下HTMLコード
      <div class="imgwrap"><img src="imgs/namecheckForm_gaiyo2_encodeCheck.png" alt="namecheckForm_gaiyo2_encodeCheck"></div><!--  .imgwrap -->

     </pre><!--  .gaiyo -->
     <p class="pdg"></p><!--  .pdg -->
     <h3>文字エンコードが正しくなければ続く処理をキャンセルする</h3>
     <p>まず最初に文字エンコードのチェックを行う。</p>
     <pre class="gaiyo">
       // 文字エンコードの検証。
       if(!cken($_POST)){
         $encoding = mb_internal_encoding();
         $err = "Encoding Error. The expected encoding is".$encoding;
         // エラーメッセージを出して、以下のコードを全てキャンセルさせる。
         exit($err);
       }
     </pre><!--  .gaiyo -->
     <p>使用している「cken()」は前節で説明したutilで読み込んだもの。</p>
     <p>「cken()」を利用するために、前もって「hello1-8-2.7-1_util.php」を読み込んでおこう。</p>
     <pre class="gaiyo">
       require_once("hello1-8-2.7-1_util.php");
       // ckenコードを読み込む。
     </pre><!--  .gaiyo -->
     <p>cken($_POST)がfalseの時は、exit($err)を実行している。</p>
     <p>exit($err)を実行すると、$errで入れているエラーメッセージを表示し、</p>
     <p>それ以降に続くコードをの実行を全てキャンセルする。</p>
     <p>メッセージの最後の$encodingには、</p>
     <p>mb_internal_encoding()で調べた内部エンコーディングの文字エンコード名が入っている。</p>
     <p>英文なのは文字化け防止。</p>
     <p class="pdg"></p><!--  .pdg -->
     <h3>note exit()とdie()</h3>
     <p>exit()とdie()は同じ機能である。</p>
     <p>どちらも引数で与えたメッセージを出力した後に、続くコードの実行を全てキャンセルする。</p>
     <p>コードの続行を突然終えるexit()は乱用しないよう。</p>
     <p class="pdg"></p><!--  .pdg -->
     <h3>HTMLエスケープ</h3>
     <p>utilで作成したesを使ってhtmlspecialcharsに通し、XSSに備える値受け取りのエチケット。以上。</p>
     <pre class="gaiyo">
       // HTMLエスケープ(XSS対策);
       $_POST = es($_POST);
       // $_POSTで送られてきた値をesが通す、
       // いわば関所的な役割か。
     </pre><!--  .gaiyo -->
     <p class="pdg"></p><!--  .pdg -->
     <h3>名前が確認されているかどうか確認する</h3>
     <pre class="gaiyo">
       // エラーフラグ
       $isError = false;
       // 名前を取り出す
       if(isset($_POST['name'])){
         $name = trim($_POST['name']);
         if($name === ""){
           // 空白の時エラー
           $isError = true;
         }

       } else {
         // 未設定の時エラー
         $isError = true;
       }
     </pre><!--  .gaiyo -->
     <p>まず最初にisset()で1_POST['name']に値が設定されているかどうかのチェックをする。</p>
     <p>この値がfalseになるのは、このページがnameCheckForm.phpの入力フォームから正しく開かれなかった時である。</p>
     <p>次に$_POST['name']が空白かどうかをチェックする。空白なら入っている場合があるので、</p>
     <p>trim()を使って次の値の前後の空白を取り除いた後でチェックする。</p>
     <p>空白なら$isErrorのtrueを代入する。</p>
     <p class="pdg"></p><!--  .pdg -->
     <h3>実行するHTMLコードをif文で条件分岐する</h3>
     <p>エラーがあるかないかで表紙内容を変更する場合if文を使って条件分岐すればいいことは予想できるが、</p>
     <p>ここでのif文の使われ方はPHPらしい独特なもの。</p>
     <p>if文の制御文を＜?php if($isError): ?＞ ＜?php else: ?＞ ＜?php endif; ?＞  のように、</p>
     <p>PHPの開始タグ、終了タグで細かく区分して、実行するHTMLコードのブロックを指定する。</p>
     <p>いわゆるendifシリーズ。whileやfor、foreachなども「endWhile」「endfor」「endforeach」のように使うぞ。</p>
     <div class="imgwrap"><img src="imgs/namecheckForm_gaiyo2_encodeCheck.png" alt="namecheckForm_gaiyo2_encodeCheck"></div><!--  .imgwrap -->
     <p>このようにすることで、PHPでHTMLコードを出力する必要がなく、コードをすっきりと記述できる。</p>
     <p>…うーん。だけど煩雑に変わりはない。</p>

    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
