// while、あんまりやりたくないなぁ…
document.write('VBAでもやった「do while」が登場。',"<br>","whileとの違いとは？","<br>", "<br>")

s = i = 0;
do{
  ++i;
  s = s + i;
} while(i < 10);
document.write("1から", i, "までの和は", s, "<br>", "<br>");
document.write("常に成立するような条件を誤って指定してしまうと、","<br>",
"処理を永久に繰り返します。", "<br>",
"これが、かの恐ろしい「無限ループ」です。", "<br>", "<br>");


document.write('do~whileは、「まず実行してから、継続条件の判定を行う」もの。', "<br>", "<br>");

document.write('whileやforは「break;」を使うことで強制終了できる。', "<br>");
document.write('break;を使って強制終了すると、一番近いブロックの終わりへとジャンプする。', "<br>", "<br>");


b = 10;
for(a = 0; a < 12; a++){
  if(b - a == 0)
    break;
  document.write(b, "-", a, "=", b - a, "<br>");
}

document.write( "<br>",
  '10からbの数値だけ引いていく。', "<br>",
  'bは0から始まって1づつ足されていく。', "<br>",
  '差が0になるまでプログラムを続行する。', "<br>","<br>"
 );

c = 1;
for(a = 0; a < 8; a++){
  if((a + c) % 3 === 0)
    continue;
  document.write(a, "+", c, "=", a + c, "<br>");
}
document.write("<br>");
document.write("aとcの値が3の倍数の場合にはループの始まりに戻る。");
document.write("<br>");
document.write("…と。もともと「2」だけだった元のコードを改造してみまちた。");
document.write("<br>");
document.write("ようは、continueには実行させたくない結果になるプログラムをせき止める役割がある、");
document.write("<br>");
document.write("…ということだろうか？");










;
