var myNumber = new Number(23);
var myString = new String('male');
var myBoolean = new Boolean(false);
var myObject = new Object();
var myArray = new Array('foo','bar');
var myFunction = new Function('x','y','return x*y');
var myDate = new Date();
var myRegEx = new RegExp('\bt[a-z]+\b');
var myError = new Error('Error!');
// この↑の「new」以前の文字は決定した式なようだ。
// だからミスなく打つ必要があるな。

// これらのコンストラクタがオブジェクトを生成したかどうかを出力して確認
console.log(myNumber.constructor);
console.log(myString.constructor);
console.log(myBoolean.constructor);
console.log(myObject.constructor);
console.log(myArray.constructor);
console.log(myFunction.constructor);
console.log(myDate.constructor);
console.log(myRegEx.constructor);
console.log(myError.constructor);

// 全部書籍通りに処理が成功！今のところ、ちょっとノッている？
