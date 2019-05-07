// 1.11 プリミティブの文字列、数値、審議値は
// オブジェクトのように扱うとオブジェクトのように振る舞う

var myNull = null;
var myUnderfined = undefined;
var primitiveString1 = "foo";
var primitiveString2 = String('foo'); //new演算子を使っていないのでプリミティブ値となる
var primitiveNumber1 = 10;
var primitiveNumber2 = Number(10); //new演算子を使っていないのでプリミティブ値となる
var primitiveBoolean1 = true;
var primitiveBoolean2 = Boolean('true'); //new演算子を使っていないのでプリミティブ値となる


console.log(primitiveString1.toString(), primitiveString2.toString());
// 出力: "foo" "foo"
// 本書: foo foo

console.log(primitiveNumber1.toString(), primitiveNumber2.toString());
// 出力: "10" "10"
// 本書: 10 10

console.log(primitiveBoolean1.toString(), primitiveBoolean2.toString());
// 出力: "true" "true"
// 本書: true true

console.log(myNull.toString());
console.log(myUnderfined.toString());
// nullとundefinedは対応する(?)コンストラクタを持っていないため、
// オブジェクトに変換されない。
// よって、以上コードはエラーとなる。



//
