// Personはnew演算子を伴っての利用を想定したコンストラクタ関数。

var Person = function Person(living, age, gender){
  // thisはここで生成される新たなオブジェクト。つまり(this = new Object();)

  this.living = living;
  this.age = age;
  this.gender = gender;
  this.getGender = function(){return this.gender;};
  // 関数がnew演算子とともに呼ばれた場合、return文が宣言されていなくてもthisを返す。
}

var cody = new Person(true, 33, 'male');

// codyはオブジェクトでPerson()のインスタンスである
console.log(typeof cody);//出力:Object
console.log(cody);//codyのプロパティと値を出力
console.log(cody.constructor);//Person関数そのものを出力

// myArrayという配列オブジェクトのインスタンスを生成する。
var myArray = new Array(); //myArrayは配列のインスタンス

//myArrayはオブジェクトであり、Array()コンストラクタのインスタンス。
console.log(typeof myArray);
//出力:object。理由は「配列もオブジェクト型」だから。

console.log(myArray);//出力:[]
console.log(myArray.constructor);//出力:Array()


//
