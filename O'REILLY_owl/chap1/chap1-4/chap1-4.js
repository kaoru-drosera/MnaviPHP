// 後でPerson()オブジェクトを生成するために、Personコンストラクタ関数を定義
var Person = function(living, age, gender){
  this.living = living;
  this.age = age;
  this.gender = gender;
  this.getGender = function(){return this.gender};
};

// Personオブジェクトをインスタンス化し、cody変数に格納する
var cody = new Person(true, 33, 'male');
console.log(cody);


// 文字列オブジェクトをインスタンス化し、myString変数に格納
var myString = new String('foo');
console.log(myString);
