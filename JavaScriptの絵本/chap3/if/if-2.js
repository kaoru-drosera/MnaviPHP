// ネストを使って「else if」なしでfizzbuzzを作る

for(i = 1; i <= 100; i++){
  if(i % 3 === 0 && i % 5 === 0){
    document.write('fizzbuzz');
    document.write('<br>');
  }else{
    // ifやelse式の中にif文を作る…
    // などの動作を「ネスト」という
    //
    // このコードなら
    // 「if(i % 3 === 0 && i % 5 === 0)の外」
    // =「３の倍数と５の倍数のいずれかでも満たせないもの」
    // という意味になる
    if(i % 3 !== 0 && i % 5 === 0){
      document.write('buzz');
      document.write('<br>');
    };
    if(i % 3 === 0 && i % 5 !== 0){
      document.write('fizz');
      document.write('<br>');
    };
    document.write(i);
    document.write('<br>');
  };
};

document.write('<br>');
document.write("特に目的のない三項演算子気がif-2を襲う");
document.write('<br>');

z = 21;
y = (z >= 21) ? "超過" : "超過なし" ;
document.write('<br>');
document.write(y);
document.write('<br>');
document.write('<br>');


point = 100;
if(point >= 80){
  document.write('<br>');
  document.write("合格です！");
  document.write('<br>');
  if(point == 100){
    document.write("満点です！");
    document.write('<br>');
  }else{
    document.write("この調子でさらに磨きを高めましょう！");
    document.write('<br>');
  };
  document.write("えみり");
}else{
  document.write("基準点未達です。もう一度復習して挑戦してみましょう！");
  document.write('<br>');
};

document.write('<br>');
document.write('ifで数字の桁数を測ってみよう');
document.write('<br>');
document.write('<br>');


num = 1000;
document.write(num + 'は');
if(num >= 1000 && num < 10000){
  document.write('4桁の整数です');
  document.write('<br>');
}else if(num >= 100 && num < 1000){
  document.write('3桁の整数です');
  document.write('<br>');
}else if(num >= 10 && num < 100){
  document.write('2桁の整数です');
  document.write('<br>');
}else{
  document.write('1桁の整数です');
  document.write('<br>');
}

document.write('４桁。ようは、1000以上で、10000未満(9999以下)。');
document.write('<br>');
document.write('…これを頭だけでひり出せればなー…。');
document.write('<br>');

















;
