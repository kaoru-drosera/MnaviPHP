// 1.10 プリミティブ値は、値そのものを比較

var price1 = 10;
var price2 = 10;
var price3 = new Number('10');
var price4 = price3;

console.log(price1 === price2);
// 出力:true
// そうそう。「a === b」でも「条件式」として扱うんだっけ。

console.log(price1 === price3);
// 出力:false
// price1はプリミティブ型数値であり、price3は数値オブジェクトであるため

console.log(price4 === price3);
// 出力:true
// オブジェクトはその値そのものではなく参照によって比較されるので


// price4のプリミティブ値を与える
price4 = 10;

console.log(price4 === price3);
// 出力:false
// price3はオブジェクト、price4はプリミティブ型なので同値ではない

console.log(price4 == price3);
// 出力:true
// ただし、等値(==)と見なされる


//
