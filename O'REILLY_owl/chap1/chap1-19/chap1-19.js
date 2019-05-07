// 1.16 typeof演算子の戻り値

// プリミティブ値
var myNull = null;
var myUndefined = undefined;
var primitiveString1 = "string";
var primitiveString2 = String('string');
var primitiveNumber1 = 10;
var primitiveNumber2 = Number('10');
var primitiveBoolean1 = true;
var primitiveBoolean2 = Boolean('true');

console.log(typeof myNull); //出力:objectだったら気をつけて…！→objectだった…！
console.log(typeof myUndefined); //出力:undefined
console.log(typeof primitiveString1 ,typeof primitiveString2); //出力:string string
console.log(typeof primitiveNumber1, typeof primitiveNumber2); //出力:number number
console.log(typeof primitiveBoolean1, typeof primitiveBoolean2); //出力:boolean boolean

// オブジェクト
var myNumber = new Number(23);
var myString = new String('male');
var myBoolean = new Boolean(false);
var myObject = new Object();
var myArray = new Array('foo','bar');
var myFunction = new Function ('x','y','return x * y');
var myDate = new RegExp('\\bt[a-z]+\\b');
var myError = new Error('Error!');

console.log(typeof myNumber); //出力:
console.log(typeof myString); //出力:
console.log(typeof myBoolean); //出力:
console.log(typeof myObject); //出力:
console.log(typeof myArray); //出力:
console.log(typeof myFunction); //出力:Functionなら気をつけて…！→Functionだった…！
console.log(typeof myDate); //出力:
console.log(typeof myError); //出力:

// typeof演算子を使う対象は、対象の値の種類によって、返される値が異なることについて
// よく知っておくべきです。

//
