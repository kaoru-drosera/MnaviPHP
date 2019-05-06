// Object()コンストラクタを使ってcodyAを生成
var codyA = new Object();
codyA.living = true;
codyA.age = 33;
codyA.gender = 'male';
codyA.getGender = function(){
  return codyA.gender;
};
console.log(codyA);

var Person = function(living, age, gender){
  this.living = living;
  this.age = age;
  this.gender = gender;
  this.getGender = function(){return this.gender};
};
var codyB = new Person(true, 33, 'male');

console.log(codyB);
