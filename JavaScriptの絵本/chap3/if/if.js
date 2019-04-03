a = 10; b = 20;
document.write('a=10,b=20で変数を設定した場合を想定する。');
document.write('<br>');
document.write(a < b);
document.write('<br>');
document.write('10が20より小さいことは計算とも同じ。よって、trueが表示される。');
document.write('<br>');
document.write(a > b);
document.write('<br>');
document.write('計算式と矛盾が生じてしまう。よって、falseが表示される。');
document.write('<br>');

document.write('<br>');

document.write('<br>');
document.write('以下は「三項演算式」を用いた合格判別。1つ下がコード、2つ下が実行結果。pointの数値を変えれば結果が変わる?');
document.write('<br>');
document.write('aa = (point > 75)? "合格":"不合格";');
document.write('<br>');
point = 90;
aa = (point > 75)? "合格":"不合格";
document.write(aa);

document.write('<br>');
document.write('<br>');
document.write('ここで突然のfizzbuzz');
document.write('<br>');
document.write('ちなみに、for文での変数iは$もvarもいらずそのままiとでも書いておけばOK');
document.write('<br>');

for(i = 1; i <= 100; i++){
  if(i % 3 === 0 && i % 5 === 0){
    document.write('fizzbuzz');
    document.write('<br>');
  }else if(i % 3 === 0 && i % 5 !== 0){
    document.write('fizz');
    document.write('<br>');
  }else if(i % 3 !== 0 && i % 5 === 0){
    document.write('buzz');
    document.write('<br>');
  }else{
    document.write(i);
    document.write('<br>');
  }
}







;
