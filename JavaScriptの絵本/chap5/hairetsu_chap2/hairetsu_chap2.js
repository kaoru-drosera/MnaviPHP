a = ["1","2","3","4"];
var abyss = ["q","w","e","r"]

document.write(a,"<br>",abyss,"<br>","<br>");

delete a[0];
document.write("delete演算式、「delete a[0];」発動！","<br>");

document.write(a,"<br>");
document.write("このように、「delete 配列名[何番目]」を使うことで、配列の値を消すことが可能だ。",
"<br>","<br>");

delete a;
document.write("delete演算式、「delete a;」発動！","<br>","＊消えた変数を使おうとするとエラーを吐きます","<br>");
// document.write(a,"<br>");
document.write("<br>","こうして、「var」が定められていない配列は配列ごと消すことが可能だ。","<br>");


delete abyss;
document.write("delete演算式、「delete abyss;」発動！","<br>");
document.write(abyss,"<br>","<br>");
document.write("abyss には","<br>"," こうかが ない みたいだ…","<br>","<br>","このように、「var」が定められている配列は配列ごと消すこと不可能だ。","<br>");

q = abyss.slice(1,3);
document.write("<br>",q,"<br>");
document.write("「配列名.slice(始点,終点-1)」の「slice」演算子を使うことで、「~番目から~番目まで取り出す」芸当ができる。","<br>");

w = abyss.push("t");
document.write("<br>",abyss,"<br>");
document.write("「配列名.push(追加したい値)」の「push」演算子を使うことで、配列の末尾に値を追加できる。","<br>");

e = abyss.unshift("tab");
document.write("<br>",abyss,"<br>");
document.write("「配列名.unshift(追加したい値)」の「unshift」演算子を使うことで、配列の末尾に値を追加できる。","<br>");

r = abyss.pop();
document.write("<br>",abyss,"<br>");
document.write("「配列名.pop()」の「pop」演算子を使うことで、配列の末尾から値を削除できる。","<br>");

r = abyss.shift();
document.write("<br>",abyss,"<br>");
document.write("「配列名.shift()」の「shift」演算子を使うことで、配列の先頭から値を削除できる。","<br>");










;
