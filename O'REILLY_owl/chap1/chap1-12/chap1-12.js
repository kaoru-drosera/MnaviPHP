// 1.9 プリミティブ値はどのように保存・複製されるか

var myString = 'foo';//プリミティブ型文字列を生成
var myStringCopy = myString; //値を新しい変数に複製
var myString = null; //myStringに格納されている値を変更

console.log(myString, myStringCopy);
// 出力:null "foo"
// 本書:'null foo'
