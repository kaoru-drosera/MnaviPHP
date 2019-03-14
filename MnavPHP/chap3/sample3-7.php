<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>クラス・インスタンスを学習する</h2>
<h3>オブジェクトを使って現在の時刻を表示</h3>
<pre>
  <?php
    $day = date('n/j(D)');
    print($day. "\n");
    //実は、複数のパラメータを指定できる。以下の通り
    $today = new Datetime();
    print($today->format('G:i:s')."\n");
    // どうやら、「$変数 = new Datetime();」、関数「format」を使うようだ。
   ?>
   <?php
    // dateファンクションの書式
    // string date(string $format[, int $timestrap = time()]);
    $day = date('n/j(D)' , 86400);
    print($day ."\n");
    // 「86400」とは「1日後」のこと。「1日＝60*60*24=86400」で、要は「1日=86400秒」。
    // ちなみに、このコードでは1/1の日付から次の日が出る。
    ?>
   <?php
    // strtotimeファンクション
    // タイムスタンプ = strtotime(日付を表す文字列[,計算のためのタイムスタンプ = time()]);
    $ieyasu = strtotime('1543/1/31');
    // strtotime = str(string=文字列) to time = 文字列をタイムスタンプに変換するファンクション。
    $day_after_tomorrow = strtotime('+2day');
    $day = date('n/j(D)' , $day_after_tomorrow);
    print($day . "\n");
    // …今日から2日後の日付が出てきた。何故…ですか…
    ?>
    <?php
      for($i=1; $i<=365; $i++){
        $timestamp = strtotime('+' . $i . 'day');
        $day = date('n/j(D)', $timestamp);
        print($day . "\n");
      }
     ?>
     <?php
      // パラメータにファンクションを指定する
      $timestamp = strtotime('+' . $i . 'day');
      $day = date('n/j(D)', $timestamp);
      // $timestrapは一度しか使われないのでもったいない

      // コード短縮ver
      $day = date('n/j(D)', strtotime('+' . $i . 'day'));

      // コード短縮ver.2
      print(date('n/j(D)', strtotime('+' . $i . 'day')));
      ?>
      <h3>練習問題</h3>
     <?php
      // 練習問題
      $i = 1;
      while($i<=365){ //365になるまで繰り返す
        $timestamp = strtotime('+' . $i . 'day');
        $day = date('n/j(D)' , $timestamp);
        print($day . "<br>");
        $i++;
      }
      ?>
</pre>
<h3>XXX</h3>
<?php
  $day = date('n/j(D)');
  print($day. "\n");
  //実は、複数のパラメータを指定できる。以下の通り
  echo "<br>";
  $today = new Datetime();
  print($today->format('G:i:s')."\n");
  // どうやら、「$変数 = new Datetime();」、関数「format」を使うようだ。
 ?>
 <?php
  // dateファンクションの書式
  // string date(string $format[, int $timestrap = time()]);
  $day = date('n/j(D)' , 86400);
  print($day ."\n");
  // 「86400」とは「1日後」のこと。「1日＝60*60*24=86400」で、要は「1日=86400秒」。
  // ちなみに、このコードでは1/1の日付から次の日が出る。
  ?>
 <?php
  // strtotimeファンクション
  // タイムスタンプ = strtotime(日付を表す文字列[,計算のためのタイムスタンプ = time()]);
  $ieyasu = strtotime('1543/1/31');
  // strtotime = str(string=文字列) to time = 文字列をタイムスタンプに変換するファンクション。
  $day_after_tomorrow = strtotime('+2day');
  $day = date('n/j(D)' , $day_after_tomorrow);
  print($day . "\n");
  // …今日から2日後の日付が出てきた。何故…ですか…
  ?>
  <?php
    for($i=1; $i<=365; $i++){
      $timestamp = strtotime('+' . $i . 'day');
      $day = date('n/j(D)', $timestamp);
      print($day . "<br>");

    }
   ?>
   <?php
    // パラメータにファンクションを指定する
    $timestamp = strtotime('+' . $i . 'day');
    $day = date('n/j(D)', $timestamp);
    // $timestrapは一度しか使われないのでもったいない

    // コード短縮ver
    $day = date('n/j(D)', strtotime('+' . $i . 'day'));

    // コード短縮ver.2
    print(date('n/j(D)', strtotime('+' . $i . 'day')));
    ?>
    <h3>練習問題</h3>
   <?php
    // 練習問題
    $i = 1;
    while($i<=365){ //365になるまで繰り返す
      $timestamp = strtotime('+' . $i . 'day');
      $day = date('n/j(D)' , $timestamp);
      print($day . "<br>");
      $i++;
    }
    ?>


   <!-- おまけ：変数名は少し長くなっても
   「きちんと意味のある名前」になるように心がける。
   …かぁ、チッ -->


<!-- php公式マニュアルより参照だ！参考にしてみよう！ -->
<!-- 以下の文字が format パラメータ文字列として認識されます
format 文字	説明	戻り値の例
日	~~~ ~~~
d	日。二桁の数字（先頭にゼロがつく場合も）	01 から 31
D	曜日。3文字のテキスト形式。	Mon から Sun
j	日。先頭にゼロをつけない。	1 から 31
l (小文字の 'L')	曜日。フルスペル形式。	Sunday から Saturday
N	ISO-8601 形式の、曜日の数値表現 (PHP 5.1.0 で追加)。	1（月曜日）から 7（日曜日）
S	英語形式の序数を表すサフィックス。2 文字。	st, nd, rd または th。 jと一緒に使用する ことができる。
w	曜日。数値。	0 (日曜)から 6 (土曜)
z	年間の通算日。数字。(ゼロから開始)	0 から 365
週	~~~ ~~~
W	ISO-8601 月曜日に始まる年単位の週番号	例: 42 (年の第 42 週目)
月	~~~ ~~~
F	月。フルスペルの文字。	January から December
m	月。数字。先頭にゼロをつける。	01 から 12
M	月。3 文字形式。	Jan から Dec
n	月。数字。先頭にゼロをつけない。	1 から 12
t	指定した月の日数。	28 から 31
年	~~~ ~~~
L	閏年であるかどうか。	1なら閏年。0なら閏年ではない。
o	ISO-8601 形式の週番号による年。これは Y ほぼ同じだが、ISO 週番号 （W）が前年あるいは翌年に属する場合はそちらの年を使うという点が異なる（PHP 5.1.0 で追加）。	例: 1999 あるいは 2003
Y	年。4 桁の数字。	例: 1999または2003
y	年。2 桁の数字。	例: 99 または 03
時	~~~ ~~~
a	午前または午後（小文字）	am または pm
A	午前または午後（大文字）	AM または PM
B	Swatch インターネット時間	000 から 999
g	時。12時間単位。先頭にゼロを付けない。	1 から 12
G	時。24時間単位。先頭にゼロを付けない。	0 から 23
h	時。数字。12 時間単位。	01 から 12
H	時。数字。24 時間単位。	00 から 23
i	分。先頭にゼロをつける。	00 から 59
s	秒。先頭にゼロをつける。	00 から 59
u	マイクロ秒 (PHP 5.2.2 で追加)。 date() の場合、これは常に 000000 となることに注意しましょう。というのも、 この関数が受け取るパラメータは integer 型だからです。 一方 DateTime をマイクロ秒つきで作成した場合は、 DateTime::format() はマイクロ秒にも対応しています。	例: 654321
v	ミリ秒 (PHP 7.0.0 で追加) uと同じ注釈が当てはまります。	例: 654
タイムゾーン	~~~ ~~~
e	タイムゾーン識別子（PHP 5.1.0 で追加）	例: UTC, GMT, Atlantic/Azores
I (大文字の i)	サマータイム中か否か	1ならサマータイム中。 0ならそうではない。
O	グリニッジ標準時 (GMT) との時差	例: +0200
P	グリニッジ標準時 (GMT) との時差。時間と分をコロンで区切った形式 (PHP 5.1.3 で追加)。	例: +02:00
T	タイムゾーンの略称	例: EST, MDT ...
Z	タイムゾーンのオフセット秒数。 UTC の西側のタイムゾーン用のオフセットは常に負です。そして、 UTC の東側のオフセットは常に正です。	-43200 から 50400
全ての日付/時刻	~~~ ~~~
c	ISO 8601 日付 (PHP 5 で追加されました)	2004-02-12T15:19:21+00:00
r	» RFC 2822 フォーマットされた日付	例: Thu, 21 Dec 2000 16:01:07 +0200
U	Unix Epoch (1970 年 1 月 1 日 0 時 0 分 0 秒) からの秒数	time() も参照 -->

<!-- forwin:http://localhost/MnavPHP/MY_list/chap2/sample00.php -->
<!-- formac:http://localhost:8888/mynavPHP/MnaviPHP/chap3/sample01.php -->
</main>
</body>
</html>
