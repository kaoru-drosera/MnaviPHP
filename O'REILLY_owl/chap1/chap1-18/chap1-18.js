// 1.15 オブジェクトは動的なプロパティを持つ

var objA = {property: 'value'};
var pointer1 = objA;
var pointer2 = pointer1;

// objA.propertyを変更すると、すべての参照がアップデートされる
objA.property = null;

console.log(objA.property, pointer1.property, pointer2.property);
// 出力: null null null
// objA, pointer1, pointer2はすべて同じオブジェクトを参照している。

//
