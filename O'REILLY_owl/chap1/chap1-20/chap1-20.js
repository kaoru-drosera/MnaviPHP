// 1.17 動的プロパティはミュータブル(可変)
// オブジェクトを可能にする。

// ビルトインStringコンストラクタ関数にaugmentedPropertiesプロパティを追加
String.augmentedProperties = [];

if(!String.prototype.trimIt){
  // prototpyeにtrimItプロパティがない場合に追加
  String.prototype.trimIt = function(){
    return this.replace(/^\s+|\s+$/g, ''); //文字列前後のスペースを除去
  }
  // 'trimIt'文字列をaugmentedProperties配列に追加
  String.augmentedProperties.push('trimIt');

}

// 文字列インスタンスのtrimIt()メソッドを使用
var myString = 'trim me';
console.log(myString.trimIt()); //出力:'trim me'

// Stringオブジェクトに追加されたaugmentedProperties配列にアクセス
console.log(String.augmentedProperties.join());
// 出力:'trimIt'


//
