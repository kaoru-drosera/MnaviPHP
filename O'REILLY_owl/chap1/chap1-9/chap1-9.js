var myNumber = new Number(23); //実際のコーディングでは非推奨
var myNumberLiteral = 23;

var myString = new String('male'); //実際のコーディングでは非推奨
var myStringLiteral = 'male';

var myBoolean = new Boolean(false); //実際のコーディングでは非推奨
var myBooleanLiteral = false;

var myObject = new Object();
var myObjectLiteral = {};

var myArray = new Array('foo','bar');
var myArrayLiteral = ['foo','bar'];

var myFunction = new Function('x','y','return x*y');
var myFunctionLiteral = function(x,y){return x*y};

var myRegEx = new RegExp('\bt[a-z]+\b');
var myRegExLiteral = /\bt[a-z]+\b/;


// この↑の「new」以前の文字は決定した式なようだ。
// だからミスなく打つ必要があるな。

// これらのコンストラクタがオブジェクトを生成したかどうかを出力して確認
console.log(myNumber.constructor,myNumberLiteral.constructor);
console.log(myString.constructor,myStringLiteral.constructor);
console.log(myBoolean.constructor,myBooleanLiteral.constructor);
console.log(myObject.constructor,myObjectLiteral.constructor);
console.log(myArray.constructor,myArrayLiteral.constructor);
console.log(myFunction.constructor,myFunctionLiteral.constructor);
console.log(myRegEx.constructor,myRegExLiteral.constructor);

// 全部書籍通りに処理が成功！今のところ、ちょっとノッている？
