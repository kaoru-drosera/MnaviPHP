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
<h2>file_get_contentsを学習する</h2>
<h3>ファイルの内容を読み込む</h3>
<pre>
  <?php
    // 読込と表示を同時に行う「readfile」
    readfile('C:\xampp\data_by_MnavPHP\news_data\news.text');
    // ファイルパスの省略がどうしてもできない…
   ?>
   <h3>複合技「追記」</h3>
  <?php
    // 「file_put_contents」と「file_get_contents」の
    // で競合技「追記」
    $doc = file_get_contents('C:\xampp\data_by_MnavPHP\news_data\news.text');
    $doc .= "<br/> 2018-02-25　ニュースを追加しました";
    // 「.=」は、文字列連結を省略する書き方。
    // よって、以下のような書き方と同じ。

    // 1.
    // $doc = $doc . "<br/> 2018-02-25　ニュースを追加しました";
    // 2.
    // $doc = file_get_contents('C:\xampp\data_by_MnavPHP\news_data\news.text') . "<br/> 2018-02-25　ニュースを追加しました";

    file_put_contents('C:\xampp\data_by_MnavPHP\news_data\news.text',$doc);

    readfile('C:\xampp\data_by_MnavPHP\news_data\news.text');
   ?>
</pre>
<h3>XXX</h3>
<?php

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
