// document.write("「Math.floor」で小数点以下切り捨て。「Math.random()」で、色数分の数の中から乱数を作る。","<br>");
// document.write("そして、その色数をlength演算子「col.length」が自動で指定する。","<br>");
// document.write("「document.bgcolor」が、背景色を変えてくれるのだ。","<br>");
// document.write("","<br>");

now = new Date();
document.write(now,"<br>");
document.write("「Date」演算子を使えば、時刻を受け取れるようになる。","<br>");
document.write("このように、「new Date()」を使うだけでも「現在時刻を受け取る」という芸当ができる。","<br>");
document.write("「GMT」からの下りは「グリニッジ標準時間との時差」を示す。ちなみに、日本は９時間進んでいるぞ。","<br>","<br>");

past = new Date(2018,1,1,0,0,0);
document.write(past,"<br>");
document.write("数字を入れることで、特定の日付を指定することも可能だ。","<br>");


document.write("<br>","ただし、上の結果では後じゃごちゃしてわかりにくい。","<br>");
document.write("そこで、「１つづつ取り出す」という過程が必要なのだ。","<br>","<br>");

FY = now.getFullYear();
document.write(FY,"<br>");
document.write("「getFullYear()」演算子で、西暦年が求められる。","<br>");
document.write("公式:「Dateを定めた変数.getFullYear()」","<br>","<br>");

M = now.getMonth() + 1;
document.write(M,"<br>");
document.write("「getMonth()」演算子で、月を1少ない数字で求められる。1小さい数字で求められるので「+1」を忘れないこと。","<br>");
document.write("公式:「Dateを定めた変数.getMonth() + 1」","<br>","<br>");

Dt = now.getDate() + 1;
document.write(Dt,"<br>");
document.write("「getDate()」演算子で、日を求められる。","<br>");
document.write("公式:「Dateを定めた変数.getDate() + 1」","<br>","<br>");

Dy = now.getDay();
document.write(Dy,"<br>");
document.write("「getDay()」演算子で、曜日が求められる。ただし、「日曜日を0として0から6までの数字」という形になる。","<br>");
document.write("公式:「Dateを定めた変数.getDay() + 1」","<br>","<br>");

H = now.getHours();
document.write(H,"<br>");
document.write("「getHours()」演算子で、時間が求められる。","<br>");
document.write("公式:「Dateを定めた変数.getHours()」","<br>","<br>");

Mi = now.getMinutes();
document.write(Mi,"<br>");
document.write("「getMinutes()」演算子で、分が求められる。","<br>");
document.write("公式:「Dateを定めた変数.getMinutes()」","<br>","<br>");

Sec = now.getSeconds();
document.write(Sec,"<br>");
document.write("「getSeconds()」演算子で、秒が求められる。","<br>");
document.write("公式:「Dateを定めた変数.getSeconds()」","<br>","<br>");

time = now.getTime();
document.write(time,"<br>");
document.write("「getTime()」演算子で、「1970年１月１日午前０時からのミリ秒」を求められる。","<br>");
document.write("公式:「Dateを定めた変数.getTime()」","<br>","<br>");











;
