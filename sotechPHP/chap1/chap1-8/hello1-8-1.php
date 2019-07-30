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
    <h3>HTTPリクエストとHTTPレスポンス</h3>
    <p>webブラウザでwebページを開いたりフォーム入力を行うと、</p>
    <p>webサーバとwebブラウザの間でデータのやりとりが行われる。</p>
    <p>webブラウザは、ブラウザの情報やフォームの入力データなどのデータのヘッダを添えて、</p>
    <p>開きたいwebページのアドレスをwebサーバーに要求する。</p>
    <p>この要求を<strong>「リクエスト」</strong>という。</p>
    <p>p252の画像が欲しい</p>
    <p>このやりとりの内容はwebブラウザの開発ツール機能なので確認することができる。</p>
    <p>chromeでいう検証。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h3>リクエストの内容</h3>
    <p>リクエストの最初は次のようなHTTPメソッドである。</p>
    <p>この行ではメソッドとドキュメントのURL、そしてプロトコルのバージョンを送っている。</p>
    <p><strong>GET/index.htmlHTTP/1.1</strong></p>
    <p>…。254を本文ごと欲しい。画像データで。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h3>スーパーグローバル変数</h3>
    <p>PHPではwebサーバーへのリクエストの情報、</p>
    <p>つまり、フォーム入力やクッキーの値、アップロードファイルの情報、サーバ側の環境変数、セッションの情報など</p>
    <p>を参照したり操作したりするための<strong>スーパーグローバル変数</strong>を持っている。</p>
    <p>スーパーグローバル変数はどこからでも参照できる配列である。</p>
    <p>簡単にまとめると次のようなものがある。</p>
    <table class="table1" cellpadding="10" border="1">
      <thead>
        <tr>
          <th>変数名</th>
          <th>内容</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>$_GET</th>
          <td><strong>GETリクエスト(クエリ情報)のパラメータ。</strong>パラメータ名が配列のキーになる。</td>
        </tr>
        <tr>
          <th>$_POST</th>
          <td><strong>POSTリクエストのパラメータ。</strong>パラメータ名が配列のキーになる。</td>
        </tr>
        <tr>
          <th>$_COOKIE</th>
          <td><strong>クッキーの値。</strong>クッキーの名前が配列のキーになる。</td>
        </tr>
        <tr>
          <th>$_SESSION</th>
          <td><strong>セッション変数</strong></td>
        </tr>
        <tr>
          <th>$_FILES</th>
          <td><strong>アップロードされたファイルの情報。</strong></td>
        </tr>
        <tr>
          <th>$_SERVER</th>
          <td><strong>Webサーバに関する情報</strong></td>
        </tr>
        <tr>
          <th>$_ENV</th>
          <td><strong>サーバ側の環境変数。</strong>環境変数名が配列のキーになる。</td>
        </tr>
      </tbody>
    </table>
    <p>上記以外には、<strong>「$_REQUEST」</strong>がある。</p>
    <p><strong>これは「$_GET」「$_POST」「$_COOKIE」をまとめた配列</strong>であるが、</p>
    <p>同名のキーが上書きされる…といった理由から利用しない方が良いとされている。</p>
    <p class="pdg"></p><!--  .pdg -->
    <h3>GETとPOSTの違い</h3>
    <p>webブラウザからwebサーバへデータを送るHTTPメソッドでよく利用される</p>
    <p>GETとPOSTであるが、違いは大きく3つ。</p>
    <p class="pdg"></p><!--  .pdg -->
    <dl>
      <dt><strong>1.GETはリクエストをURLにつけるのでブックマークできる</strong></dt>
      <dd>
        <p>GETはパラメータをURL形式にエンコードしたクエリ情報(クエリ文字列)を作って送信する。</p>
        <p>URLのアドレスに<strong>?</strong>をつけて、キーと値のペアを続けた部分がクエリ文字列である。</p>
        <p>複数のパラメータがある場合は<strong>「&」</strong>でつなぐ。</p>
        <pre class="gaiyo">
          // クエリ文字列
          URL? キー1=値 & キー2=値 & キー3=値

          // クエリ文字列サンプル
          http://localhost:8888/…/warikan.php?goukei=2500&ninzu=3
          //                                                                 ↑パラメータ1        ↑パラメータ2
          //                                                                 --------クエリ文字列------
        </pre><!--  .gaiyo -->
        <p>例えば、次の図で示すURLにはクエリ文字列の<strong>「?goukei=2500&ninzu=3」</strong></p>
        <p>このクエリ文字には、goukeiキーとninzuキーの2つのパラメータが含まれている。</p>
        <a href="http://localhost:8888/PHP_Learning_Pool/sotechPHP/chap1/chap1-8/hello1-8-1_warikan.php?goukei=2500&ninzu=3">割り勘を計算する</a>
        <p>↑このリクエストの内容はwebブラウザのアドレスバーに表示されてしまうことから、</p>
        <p>これをブックマークすることができてしまう。ブックマークを呼び出すとGETリクエストを実行した場合と同じ結果になってしまう。</p>
        <p>場合によってはこの方が便利なこともあるが本来は好ましくない。</p>
        <p class="pdg"></p><!--  .pdg -->
        <p>また、<strong>「アドレスバーに表示されたリクエストを基にして、パラメータの値を変更したリクエストを再発行する」</strong></p>
        <p>といったことも簡単に行える。</p>
        <pre class="gaiyo">
          href=http://localhost:8888/PHP_Learning_Pool/sotechPHP/chap1/chap1-8/hello1-8-1_warikan.php?goukei=2500&ninzu=3
        </pre>
        <p>このhrefで示すように、GETリクエストはaタグを使って簡単に送信できる。フォームでGETリクエストを送信する方法もある。</p>
        <p>ちなみにリンク先は「割り勘を計算する」のhrefである。</p>
        <p class="pdg"></p><!--  .pdg -->
        <p>一方のPOSTは<strong>フォームのパラメータをURLに含めるのではなく、</strong></p>
        <p><strong>リクエストの本文に含めて送る。</strong></p>
        <p>したがって、GETのようにリクエスト内容を簡単に見られることがなく、ブックマークもされない。</p>
        <p>ただし、<strong>「POSTリクエストの内容が安全に保障されている」ということではない</strong>ので、</p>
        <p><strong>機密性の高い通信を行うにはSSLなどの暗号化通信</strong>を使うこと。</p>
        <p class="pdg"></p><!--  .pdg -->
      </dd>
      <dt><strong>2.GETで送信できるデータサイズに制限がある</strong></dt>
      <dd>
        <p><strong>POSTのデータサイズは無制限であるのに対し、GETのクエリ情報には制限がある</strong>。</p>
        <p>利用するwebブラウザ、サーバによってデータサイズの制限は異なるが、URLのアドレスとの合計サイズでの上限がある。</p>
        <p>データサイズの制限がない実行環境であっても、極端に長いURLは動作が遅くなることも多い。</p>
      </dd>
      <dt><strong>3.GETのレスポンンスはキャッシュされるが、POSTはキャッシュされない</strong></dt>
      <dd>
        <p><strong>GETリクエストに対するレスポンスはキャッシュ</strong>される。</p>
        <p>したがって、<strong>同じ内容のGETリクエストは毎回同じ結果になる</strong>。</p>
        <p>つまり、<strong>いつも内容に変化がないレスポンスを得たい場合のリクエストに向いている。</strong></p>
        <p>GETで毎回最新のレスポンスを得たい場合には、</p>
        <p>パラメータに時刻をつけることで毎回のリクエストを変更する…といったテクニックが利用されることがある。</p>
        <p class="pdg"></p><!--  .pdg -->
        <p>これに対して<strong>POSTリクエストに対するレスポンスはキャッシュされない</strong>。</p>
        <p>したがって、<strong>掲示板やショッピングカートの内容を表示したい</strong>…と言った場合には<strong>POSTを使う。</strong></p>
        <p><strong>データベースの更新には、POSTは使わない</strong>こと。</p>
      </dd>
    </dl>
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
    <p class="pdg"></p><!--  .pdg -->
  </div><!--  .main-contents -->
</body>
</html>
