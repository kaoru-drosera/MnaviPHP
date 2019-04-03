// 二重ループを使って九九表を作ってみるよー

for(i = 1; i <= 9; i++){
  document.write(i,'の段');
  for(j = 1; j <= 9; i++){
    document.write(i, "×", j, "=", j * i, "<br>");
    document.write("なお、おなじwrite内に数値や文字列を連結して書く場合には「,」を使うこと。");
  };
};
