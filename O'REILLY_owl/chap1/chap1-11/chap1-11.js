// 1.8 null,undefined,'string',10,true,falseはオブジェクトではなくプリミティブ型

// コンストラクタ関数にnew演算子を付与しないことに留意してください。
// プリミティブ血を生成する際には、オブジェクトは生成されません。

var primitiveString1 = "foo";
var primitiveString2 = String('foo');
var primitiveNumber1 = 10;
var primitiveNumber2 = Number('10');
var primitiveBoolean1 = true;
var primitiveBoolean2 = Boolean('true');

console.log(typeof primitiveString1,typeof primitiveString2); //出力:string string
console.log(typeof primitiveNumber1,typeof primitiveNumber2); //出力:number number
console.log(typeof primitiveBoolean1,typeof primitiveBoolean2); //出力:boolean boolean


// new演算子とともにコンストラクタを実行するとオブジェクトが生成されます。
var myNumber = new Number(23);
var myString = new String('male');
var myBoolean = new Boolean(false);
var myObject = new Object();
var myArray = new Array('foo','bar');
var myFunction = new Function('x','y','return x * y');
var myDate = new RegExp('\\bt[a-z]*\\b');
var myError = new Error('Error!');

console.log(
  typeof myNumber,
  typeof myString,
  typeof myBoolean,
  typeof myObject,
  typeof myArray,
  typeof myNumber,
  typeof myFunction, //すべてのオブジェクトに対して、typeof演算子はfunctionを返します。
  typeof myDate,
  typeof myError,

);
// 出力:object object object object object object function object object








//
