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
      <h2>正規表現</h2>
      <p>この説では、文字列の検索や置き換えをパターンを使って行う正規表現の基本を解説するところである。</p>
      <p>正規表現は記号が多く暗合みたく見えるが、ルールがわかれば以外と簡単。</p>
      <p>文字整理を行うことが多いPHPにおいて、正規表現は強力な武器となるのでぜひ取り組みたい。</p>
      <h3>正規表現とは</h3>
      <p><strong>正規表現とは文字列をパターンで検索して、パターンにマッチするかどうかをチェックする</strong>、</p>
      <p><strong>置き換えする、分割するといった文字列処理を行う方法</strong>である。</p>
      <p>パターンの書き方によって、非常に高度な文字列処理を行えるが、</p>
      <p>セキュルティの脆弱性を孕む危険性があるため複雑なパターンを書くにはある程度の習熟がいる。</p>
      <p>ただ、よく利用するパターンは決まっているので積極的に利用していきたい代物ではある。</p>
      <p class="pdg"></p><!--  .pdg -->
      <h3>「パターンにマッチする」とは？</h3>
      <p>それはそうと「パターンにマッチする」とはどういうことだろうか？</p>
      <p>パターンマッチで利用する関数は<strong>preg_match()</strong>である。</p>
      <p>preg_matchの書き方は、以下の通り。</p>
      <pre class="gaiyo">
        // preg_match()の書式
        $result = preg_match($pattern,$subject);
      </pre><!--  .gaiyo -->
      <p><strong>第一引数の1patternにパターンの文字列、</strong></p>
      <p><strong>第二引数の1subjectに検索対象の文字列を指定して</strong></p>
      <p><strong>preg_match()を実行する。</strong></p>
      <p>preg_match()の実行結果は、</p>
      <p><strong>パターンにマッチした時に1、</strong></p>
      <p><strong>マッチしなかった時に0が戻る。</strong></p>
      <p>そしてパターンを解析できなかった場合など、<strong>エラーがあった場合はfalse</strong>となる。</p>
      <p>p145</p>
      <p>例えば、車のナンバーが「46-49」だとわかっている時、</p>
      <p>文字列に「46-49」が含まれているかを正規表現を使ってチェックする。</p>
      <p>まず、調べるナンバーの「46-49」を「/46-49/」のように「/」で囲んでパターンを作るのだ。</p>
      <pre class="gaiyo">
        <?php
          // 探しているナンバーは「46-49」
          $result1 = preg_match("/46-49/u","確か49-46だった");
          $result2 = preg_match("/46-49/u","確か46-49だった");
          // 46-49が含まれている
          // $result3 = preg_match("/46-49u","確か49-46だった");　
          // パターン式が間違っている

          // 結果
          var_dump($result1);
          var_dump($result2);
          // var_dump($result3);
         ?>
         // エラーを吐いて結果が出せなかったresult3はbool(false)という結果になる。
         // ちなみに$result3は「preg_match("/46-49u","確か49-46だった")」になる。
         // ただし、試そうとするとエラーが出たので中断。

      </pre><!--  .gaiyo -->
      <p><strong>パターンにマッチする</strong>とは、<strong>「文字列の中にパターンが見つかった</strong>と言い換えられる。</p>
      <p>示した例で言えば「確か49-46だった」には「46-49」が含まれていないのでint(0)、</p>
      <p>「多分46-49だった」なら「46-49」が含まれているのでint(1)が出力される。</p>
      <p>そして、最後のパターンにはエラーがあるので結果はbool(false)になっている。←ならなかった</p>
      <p>なお、例に示すパターンには「/46-49/u」のように「u」が付いている。</p>
      <p>これはUTF-8を正しくマッチングするための修飾子である。→(p148)</p>




      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->
      <p class="pdg"></p><!--  .pdg -->

    </div><!--  .main-contents -->
</body>
</html>
