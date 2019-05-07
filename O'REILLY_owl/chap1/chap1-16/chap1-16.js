// 1.13 オブジェクトはどのように保存・複製されるか

var myObject = {};
var copyOfMyObject = myObject; //値が渡されるのではなく、参照が渡される
myObject.foo = 'bar'; //myObjectの値を操作

// ここでmyObjectとcopyOfMyObjectの内容を出力すると、両方がfooオブジェクトを保持している。
// これらの変数は同じオブジェクトを参照している。

console.log(myObject, copyOfMyObject);
// 出力: {foo: "bar"} {foo: "bar"}
// 本書: Object{foo="bar"} Object{foo="bar"}

//
