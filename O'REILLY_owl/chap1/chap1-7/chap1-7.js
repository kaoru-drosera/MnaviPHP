var Person = function(living, age, gender){
  this.living = living;
  this.age = age;
  this.gender = gender;
  this.getGender = function(){
    return this.gender;
  };
};

var cody = new Person(true, 33, 'male');
console.log(cody);
//出力:Person {living: true, age: 33, gender: "male", getGender: ƒ}

var maki = new Person(true, 34, 'female');
console.log(maki);
//出力:Person {living: true, age: 34, gender: "female", getGender: ƒ}

//…この2つだけうまく出力できたな。まぁ、これだけうまく出力できただけ吉報だろうか…？
