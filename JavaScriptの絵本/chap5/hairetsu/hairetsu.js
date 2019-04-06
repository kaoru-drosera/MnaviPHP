b = new Array(1,2,3,4);
document.write("配列の値は、a[１]のように「配列名[数字]」で書くことで1つの値だけを出すことができる。","<br>");
document.write(b[1],"<br>","ただし、「配列名[1]」のように「1」で指定すると、上の結果のように2番目の値を出すので注意。","<br>");
document.write("そう。「配列」は「0」始まりなのだ！！");

a = new Array();
a[0] = "りんご";
a[1] = "ごまだんご";
a[2] = "ごだいご";
// a[] = "ごるご";
document.write("<br>","<br>",a,"<br>","<br>","このように、「1」で指定すると2番目の値を出すので注意。","<br>");
document.write("[]をつけず、配列名のみ指定した場合には、配列内の値すべてを列挙する。","<br>");
document.write("例えば、フォームで受け取った値がきちんと配列内に入っているかを確認したい場合には便利かも。","<br>");

c = ["lilac","carol","milla"];
document.write("<br>",c,"<br>","<br>","配列は、通常「配列名 = new Array()」で定めるところだが、「配列名 = []」でも定められる。","<br>");
document.write("ラクチネルパッチ！…でもミスしやすくもなりそう。","<br>","<br>");

d = [];
d[0] = 4;
d[1] = "サーンwwww";
d[2] = "弐";
d[3] = "I";
d[4] = "zero";
document.write("<br>",d,"<br>");
document.write("「配列名[配列の○番目] = 配列の値」とすることで、配列の値を指定できるようになるのだ！","<br>");
document.write("<br>","今度は連想配列をやってみるよー！","<br>");

fri = new Array();
fri['serval'] = 'サーバル';
fri['otter'] = 'カワウソ';
fri['alpaca'] = 'アルパカ';

document.write("<br>","今度は連想配列をやってみるよー！","<br>","<br>");
document.write("<br>","連想配列はこんな感じで設定するぞ！","<br>");
document.write("<br>","fri['serval'] = 'サーバル'","<br>");
document.write("<br>","「fri['serval']」を使うことで変数の値をとり出せるぞ。","<br>");
document.write("<br>",fri,"<br>",fri['serval'],"<br>");

fri_2 = new Array();
fri_2.duck = 'カルガモ';
fri_2.panda = 'ジャイアントパンダ';
fri_2.dolphin = 'バンドウイルカ';

document.write("<br>","連想配列はこれでも設定できるぞ！","<br>");
document.write("<br>","fri_2.duck = 'カルガモ';","<br>");
document.write("<br>","もちろん、「fri_2.duck」でも値をとり出せるぞ！","<br>");
document.write("<br>",fri,"<br>",fri_2['duck'],"<br>",fri_2.duck);



document.write("<br>","二次元配列…は厳しいだろうか？","<br>");

document.write("<br>","a['serval']['name'] = 'サーバル'; a['serval']['serif'] = 'すっごーい！';","<br>");
document.write("<br>","配列ごとに属性を付けられる「二次元配列」。「連想配列」の進化系…なのかなぁ。","<br>");

document.write("<br>","…クソ！今日のところは引き上げだ！","<br>");
document.write("<br>","…Uncaught TypeError: Cannot set property 'name' of undefined","<br>");


// var fri_2d = new Array();
// fri_2d['serval']['name'] = 'サーバル';
// fri_2d['serval']['serif'] = 'すっごーい！';
// fri_2d['otter']['name'] = 'カワウソ';
// fri_2d['otter']['serif'] = 'たーのしー！';
// fri_2d['alpaca']['name'] = 'アルパカ';
// fri_2d['alpaca']['serif'] = 'ふわああああぁ！';












;
