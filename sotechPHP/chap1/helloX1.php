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
  <title>オブジェクト指向</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
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
    background-color:rgb(242, 255, 166) ;
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
    <h2>オブジェクト指向プログラミング(OOP)を理解する</h2>
    <h3>OOP料理店で、従業員を雇う場合のオブジェクト指向プログラミング</h3>
    <div class="gaiyo">
      <h4>概要:</h4>
      <p>あなたは料理店のオーナーです。</p>
      <p>料理も含めてお店のことは全部一人でできるのですが、数名の従業員を雇いたいところです。</p>
      <p>人を雇うからには、「料理」「接客」「仕入れ」などの仕事をやって貰う必要があります。</p>
      <p>よって、あなたが雇うべきは、</p>
      <ul>
        <li><strong>「料理」が得意な「料理人」</strong></li>
        <li><strong>「接客」が得意な「店員」</strong></li>
        <li><strong>「仕入れ」が得意な「仕入れ人(調理道具)」</strong></li>
      </ul>
      <p>の3人(あるいは2人と道具1つ)、ということになりますね。</p>
    </div>
    <p>これもプログラミングで置き換えることができる。</p>
    <p>なんでも一人でやるように、1つのプログラミングコードに機能を盛り込んでいくことはできる。</p>
    <p>関数に分けてコードを整理したとしても、全体としては機能が詰まった大きなコードである。</p>
    <p><strong>しかしOOPでは「従業員を雇う」という現実に近い発想でコードを組み上げるのだ。</strong></p>
    <p class="pdg"></p>
  </div>
  <div class="main-contents">
    <h3>できる人と物を定義して採用する</h3>
    <p>まずOOPでは、</p>
    <p>「料理人」の「Cook」クラス</p>
    <p>「接客」の「Staff」クラス</p>
    <p>「仕入れ人(調理道具)」の「Kitchen」クラス</p>
    <p>など、<strong>必要になる条件を満たすクラス</strong>を集めよう。</p>
    <p>そして「料理人を2人雇う」なら「Cook」クラスからコックを2人雇って採用し、</p>
    <p>「店員を3人雇う」なら「Staff」クラスから3人雇って採用するのだ。</p>
    <p class="pdg"></p>
    <h3>仕事を任せる←ここ重要！</h3>
    <p>OOPのキモはここ。</p>
    <p>「料理人」と「店員」を雇ったのだから、<strong>料理は「料理人」に、接客(と、レジ打ち)は「店員」に</strong></p>
    <p><strong>任せる</strong>ことになる。</p>
    <p>料理は「料理人」に任せているので、オーナー(…ことあなた)や「店員」、そして「仕入れ人」は</p>
    <p>「料理人」の仕事を見張って指示する必要はない。「料理人」一人が成果を出せばいい。</p>
    <p class="pdg"></p>
    <p>「料理人」のこうした技能は、「Cook」クラスに定めてある仕様である。</p>
    <p>「Cook」クラスがフランス料理が得意なら「フランス料理人」、</p>
    <p>「Cook」クラスが中華料理が得意なら「中華料理人」…のように細分化も可能(?)</p>
    <p class="pdg"></p>
    <p>同じように「店員」の能力は「Staff」クラス、</p>
    <p>「仕入れ人」の能力は「Kitchin」クラスの仕様で決定する。</p>
    <p class="pdg"></p>
    <p class="pdg"></p>
  </div>

  <div class="main-contents">
    <h3>クラスとインスタンス</h3>
    <p>「考え方の理解」を伝えるために「料理店」を例に挙げたが、</p>
    <p><strong>「『家電工場』と『家電品』」、「『車工場』と『車』」「『ロボット工場』と『ロボット』」</strong>…</p>
    <p>のように置き換えて説明することもできる。</p>
    <p>これをOOPの用語に置き換えると<strong>「『クラス』と『オブジェクト』」</strong>の関係になる。</p>
    <p class="pdg"></p>
    <p><strong>「クラス」は機能の仕様(設計)</strong>であり、</p>
    <p><strong>そのクラスの仕様から呼び出された「もの」が「オブジェクト」</strong>です。</p>
    <p><strong>意味的にインスタンスは「~の子供」、オブジェクトは「人間」に相当する</strong>かも。</p>
    <p class="pdg"></p>
    <p>この概念をもう少し広げると、この世のほとんどのものはクラスとインスタンスになる。</p>
    <p><strong>「パンは『パン』クラスのインスタンス」</strong>となるな。</p>
    <p>それぞれにクラス(設計図、レシピ)に基づいて作られたオブジェクト。</p>
    <p class="pdg"></p>
    <h3>メソッドとプロパティ</h3>
    <p><strong>オブジェクトとは、「昨日とデータを持ったもの」</strong>。</p>
    <p><strong>メソッドは「機能」</strong>を示す。</p>
    <p>つまり、<strong>メソッドは「実行できる処理」</strong>。</p>
    <p>そして<strong>プロパティは「属性」</strong>。</p>
    <p>人ならば「名前」「身長」「性別」など。車なら「色」「車種」「燃料」などがプロパティになる。</p>
    <p><strong>プロパティは値を設定できたり、読み取れたりする</strong>。</p>
    <p class="pdg"></p>
    <h3>図解 「クラスとインスタンス」「プロパティとメソッド」</h3>
    <p>…と、いろいろグタグダ説明したが、「クラスとインスタンス」「プロパティとメソッド」は</p>
    <p>この図を見て貰えばわかるかも。</p>
    <p class="pdg"></p>
    <h4>「メソッドとプロパティ」</h4>
    <div class="imgwrap">
      <img src="imgs/プロパティとメソッド.jpg" alt="プロパティとメソッド゙">
    </div>
    <p class="pdg"></p>
    <h4>「クラスとメソッド」</h4>
    <div class="imgwrap"><img src="imgs/クラスとインスタンス.jpg" alt="クラスとインスタンス"></div>
    <p class="pdg"></p>
    <h4>プロパティのアクセスとメソッドの実行</h4>
    <div class="imgwrap"><img src="imgs/プロパティのアクセスとメソッド実行.jpg" alt="プロパティのアクセスとメソッド実行"></div>
    <p>↑「->age = 26」で、「年齢が26歳」というプロパティとなる。</p>
    <p>「$cook1->age = 26」で、「『$cook1(インスタンス)』の『年齢(プロパティ)』が26歳」という意味になる。</p>

  </div>

</body>
</html>
