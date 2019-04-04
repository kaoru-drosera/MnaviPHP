function unite2Message(Msg1, Msg2)
{
  message = document.write(Msg1 + '\n' + Msg2);
  return message;
  // 「return」は、関数の処理を終了し、
  // 呼びたし元の処理を続けるもの。
  // 「return」の次の値(ここでは「message」)は
  // 「戻り値」といい、
  // 関数の呼び出し元に値を戻すことができる。
  // 指定できる値は1つだけ。
  //
  // これで、「関数の値を指定する」ことが可能に。
  //
  // たとえば「unite2Message(,)」なら
  // (これは,ひどい)のように入力することで
  // 2つのメッセージを連結できる。
}
unite2Message('これは', 'ひどい');
document.write("<br>");

// やっと呼び出せた！！
// ここまでで4回ぐらいミスった…

function funcNum(n){
  document.write("関数の値は", "「", n, "」", "<br>");
}
a = 170313;
b = 'アライさん'
funcNum(5);
funcNum('うどん');
funcNum(a);
funcNum(b);

document.write("<br>");

function getMenu(a){
  a = 'coffee';
  // オブジェクト以外の値を引数として渡すときには、
  // 値渡しという方法で受け渡されます。

}
b = 'Tea';

getMenu(b);

function getMenu(a){
  a[0] = "water";
  // 配列のオブジェクトを引数で渡す「参照渡し」。
}
b = new Array('Tea', 'coffee');
getMenu(b);

e = 1;
// 関数の外で定められた変数を
// 「グローバル変数」といい、関数の外でも使うことができる。
function showNum(){
  var e;
  // ちなみに、関数内で「var」を使って定められた変数を
  // 「ローカル変数」といい、この関数内でしか使えない。
  // よって、この関数を関数の外で使うことはできない。
  // また、ローカル変数として扱いたいときは
  // 「var」を使うのを忘れないこと。
  // varがないとグローバル関数になってしまう。
  e = 1;
  document.write(e,"<br>");
}
showNum();
document.write(e);
// 関数内でvarで宣言された「e」とは別の
// 変数としてみなされる。

















;
