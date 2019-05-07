// 1.14 オブジェクトは同値判定に参照を使用

var objectFoo = {same: 'same'};
var objectBar = {same: 'same'};

// JavaScriptでオブジェクトの同値比較を行う場合、比較対象のオブジェクトが
// 同じ方で同じ値を持っているかどうかは同値の基準とはならない。

console.log(objectFoo === objectBar);
// 出力:false


// オブジェクトが同値と見なされる場合
var objectA = {foo: 'bar'};
var objectB = objectA;

console.log(objectA === objectB);
// 出力:true
// これらのオブジェクトは同じオブジェクトを参照しているため同値

//
