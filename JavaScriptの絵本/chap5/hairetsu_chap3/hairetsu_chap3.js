str = new String("ぶどう");
document.write("new String()を使えば、「文字列」の配列が使えるのだ。Stringでできた配列でしかできないアクションがあるのだ。","<br>","<br>");

str = new String("ぶどう");

document.write(str,"<br>");
len = str.length
document.write(len,"<br>");
document.write("このように、「変数名.length」を使うことで、文字列の長さを知ることができるのだ。","<br>","<br>");

str2 = new String("2019/04/06");
document.write(str2,"<br>");
arr = str2.split("/");
document.write(arr,"<br>");
document.write("このように、「変数名.split('区切る文字')」を使うことで、文字列を変数にすることができるのだ。","<br>","<br>");


str3 = new String("しゅてんどうじ");
document.write(str3,"<br>");
idm1 = str3.indexOf("じ");
document.write("<br>");
idm2 = str3.indexOf("/");
document.write(idm1,"<br>");
document.write("indexOf演算子「変数名.indexOf('検索したい文字')」を使うことで、検索した文字が何番目にあるかを確認できるのだ。","<br>","<br>");
document.write(idm2,"<br>");
document.write("見つかった時には「何番目にあるか」を、見つからない場合には「-1」を値として返すぞ。","<br>");
document.write("例えば「しゅてんどうじ」からindexOfで「じ」を検索した時、返す文字は「6」だ。","<br>","<br>");
























;
