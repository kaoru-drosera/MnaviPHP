<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
  class Cook {
    // コックのプロパティ ←「名前」や「性別」などの「属性」
    // コックのメソッド ←「料理を作る」などの「機能」
  }

  $Cook1 = new Cook();
  $Cook2 = new Cook();
    // newの隣にあるCookはさっきclassで作った「Cook(クラス)」の事？

  $Cook1->age = 26;
  // ↑『$Cook1(インスタンス)』の「age(プロパティ)」を「26(プロパティの値)」に設定。
  // $Cook2->omlete();
  // ↑ $Cook2のomlete()メソッドを実行する。(?)


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
    <h2>続・オブジェクト指向プログラミング(OOP)を理解する</h2>
    <h3>…まずは理解</h3>
    <h4>クラスの継承</h4>
    <p>OOPではプログラムコードの機能を改変、拡張したい時「継承」を使う。</p>
    <p>継承こそがOOPの醍醐味…だって。</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>軽症ではAクラスに継承したい機能がある時、</p>
    <p><strong>Aクラスのコードを書き変えずに、Aクラスを継承したBクラスを作り</strong>、</p>
    <p><strong>Aクラスに追加したい機能をBクラスに実装する</strong>のだ。</p>
    <p>ちょうど、親が子に・師匠が弟子に技術を継承し、</p>
    <p>子が弟子が会得した新技や自身の技のアレンジを師匠が学び…(?)といった関係か？</p>
    <p class="pdg"></p><!--  .pdg -->
    <p>言語によって「スーパークラスとサブクラス」「親クラスと子クラス」「基底クラスと派生クラス」</p>
    <p>と呼称は異なるが、</p>
    <p>PHPでは「parent」キーワードで継承される側のクラスを指し示すので</p>
    <p>「親クラスと子クラス」という表現が正しい。</p>
    <p class="pdg"></p>
    <h3>ちょこっと実演</h3>
    <p>PHPでは、継承を「extends」キーワードを使って記述する。</p>
    <p>公式としてはこんな。</p>
    <pre class="gaiyo">
      class 子クラス extends 親クラス{

      }
    </pre>
    <p>↑の公式が示す通り、<strong>子クラスが親クラスを指定する</strong>。</p>
    <p><strong>親クラスが自分の子クラスを指定することはできない</strong>。</p>
    <p>従って図でも<strong>「子クラス→親クラス」のように矢印を親クラスに向けて書きます</strong>。</p>
    <pre class="gaiyo">
      class FrenchCook extends Cook{
        // ↑まずは子クラスを、その次にextendsで繋いで継承したい親クラスを書く。
        // そうしてやっとFrenchCookで拡張する内容をこの中に書く。
      }

    </pre>
    <pre>
      <?php
        class FrenchCook extends Cook{
          // ↑まずは子クラスを、その次にextendsで繋いで継承したい親クラスを書く。
          // そうしてやっとFrenchCookで拡張する内容をこの中に書く。
        }
       ?>
    </pre>
  </div>

  <div class="main-contents">
    <h3>トレイト</h3>
    <p>PHPには、<strong>「トレイト」</strong>という「インクルード（読み込み？）」に似た仕組みがある。</p>
    <p>トレイトでプロパティやメソッドを定義しておくと、</p>
    <p>クラス定義の最初でuseキーワードでトレイトを指定するだけで、</p>
    <p><strong>そのトレイトのコードを自分のクラスで定義してあるかのように利用できる</strong>ぞ。</p>
    <p><strong>複数のトレイトを採用したり、トレイトを組み合わせて新しいトレイトを作る</strong>ことも可能だ。</p>
    <p>ただし、利用する際には名前の衝突などに気をくばる必要があるぞ。</p>
    <p>…よくわからん。とりあえず公式を見てみよっか</p>
    <pre class="gaiyo">
      //トレイトの定義
      trait トレイト名{
        // トレイトのプロパティ;
        // トレイトのメソッド;
      }
    </pre>
    <pre class="gaiyo">
      // トレイトを利用するクラス
      class クラス名{
        use トレイト名;
        // クラスのコード;
        // ↑ トレイトで定義してあるプロパティやメソッドを自分のクラスの
        // コードのように利用できるようになる…そうだが
      }
    </pre>
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->

   <div class="main-contents">
    <h3>インターフェース</h3>
    <p><strong>インターフェースは「規格」のようなもの</strong>。</p>
    <p>クラスが採用しているインターフェースを見れば、</p>
    <p>そのクラスで確実に実行できるメソッドと呼び出し方がわかる。</p>
    <p><strong>インターフェースは「interface」キーワードをつけて宣言して定義</strong>し、</p>
    <p><strong>インターフェースを採用するクラスでは「implement」キーワードで指定</strong>する。</p>
    <p>公式に当てはめるならこんな。</p>
    <pre class="gaiyo">
      // インターフェースの定義
      interface インターフェース名{
        function 関数名();
      }
    </pre>
    <pre class="gaiyo">
      // インターフェースを採用するクラス
      class クラス名 implements インターフェース名{
        ↑「インターフェース名」の部分のインターフェースを採用する。
        // クラスのコード
      }
    </pre>
    <p>ここ画像が欲しい。p214の上部分</p>
    <p class="pdg"></p><!--  .pdg -->
   </div><!--  .main-contents -->

  <h3>抽象クラスと抽象メソッド</h3>
  <p><strong>メソッド宣言のみを行って処理を実装しない特殊なメソッド定義</strong>がある。</p>
  <p><strong>「abstract」キーワードを付けてメソッド宣言を行うことから「抽象メソッド」</strong>と呼ぶ。</p>
  <p>そして、抽象メソッドが1つでもあるクラスには「abstract」キーワードをつける必要があり、</p>
  <p><strong>「抽象クラス」</strong>と呼ぶ。</p>
  <p class="pdg"></p><!--  .pdg -->
  <p>抽象クラスのインスタンスを作ることはできず、必ず継承して利用する。</p>
  <p>そして、抽象メソッドの機能を子クラスで上書き(オーバーライド、という)して実装する。</p>
  <p>他の言語と違い、PHPの抽象メソッドには初期機能を実装できない。</p>
  <p class="pdg"></p><!--  .pdg -->
  <p>抽象クラスはインターフェースと似た側面もあるが、抽象メソッドだけでなく通常のメソッドを実装できることから</p>
  <p>クラスとしての機能を持つことができる。</p>
  <p>クラス内のメソッドから抽象メソッドを実行することで、</p>
  <p>実際の処理は子クラスに任せる設計(デリゲート delegate. not デリケート)が可能になる。</p>
  <p>公式も見てみよう。</p>
  <pre class="gaiyo">
  // 抽象クラス
  abstract class 抽象クラス名 {
    abstract function 抽象メソッド名();
    // ↑メソッド名を宣言するだけで、機能は定義しない。
  }
  </pre>
  <pre class="gaiyo">
    // 抽象メソッドを実装する
    class クラス名 extends 抽象クラス名{
      function 抽象メソッド名(){
        // メソッドを上書き(オーバーライド)して機能を定義する
      }
    }
  </pre>
  <p>おまたせ！画像とってきたよー！p215の上部分</p>
  <div class="imgwrap"><img src="imgs/抽象クラスと抽象メソッド.jpg" alt="抽象クラスと抽象メソッド"></div>



</body>
</html>
