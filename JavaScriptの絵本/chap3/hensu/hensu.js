a = 2;
a = 3   ;
window.document.write(a);
document.write('<br>');

// バックスラッシュ「\」の入力は、optionを押しながら「¥」。
// と言っても、改行はdocument.write('<br>');で。

document.write('そのデータは「文字列」か？「数値」か？');
document.write('<br>');
document.write('typeof演算子を使えば、データ型を調べることができる。');

document.write('<br>');
document.write('<br>');

a = typeof(123);
a = typeof(-456);
document.write(a);
document.write('←数値型');
document.write('<br>');

b = typeof('123');
document.write(b);
document.write('←文字列型');
document.write('<br>');

c = typeof(false);
document.write(c);
document.write('←論理型(boolean-ブーリアン-)');
document.write('<br>');

d = typeof(window);
document.write(d);
document.write('←オブジェクト型');
document.write('<br>');

e = typeof(null);
document.write(e);
document.write('←null型');
document.write('<br>');

f = typeof(underfined);
document.write(f);
document.write('←未定義型');
document.write('<br>');

g = "人類の　明るいミライを　テラシマ・ショウ！";
document.write(g);
g = typeof(g);
document.write('<br>');
document.write(g);
document.write('←');
document.write('<br>');
