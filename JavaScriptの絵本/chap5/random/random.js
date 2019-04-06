col = new Array();

col[0] = "red";
col[1] = "blue";
col[2] = "yellow";
col[3] = "green";
col[4] = "pink";
col[5] = "purple";
col[6] = "orange";
col[7] = "brown";
col[8] = "gray";
col[9] = "black";
var n = Math.floor(Math.random() * col.length);
document.write("「Math.floor」で小数点以下切り捨て。「Math.random()」で、色数分の数の中から乱数を作る。","<br>");
document.write("そして、その色数をlength演算子「col.length」が自動で指定する。","<br>");
document.bgColor = col[n];
document.write("「document.bgcolor」が、背景色を変えてくれるのだ。","<br>");












;
