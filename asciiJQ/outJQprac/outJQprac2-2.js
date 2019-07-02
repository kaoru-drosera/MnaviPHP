// var myClass1 = document.getElementById('i1st');
//   myClass1.innerHTML = '8px';
//
// var myClass = document.
// getElementsByClassName('class');
// for(var i = 0; i < myClass.length; i++){
//   myClass[i].innerHTML = '8px';
// }

document.getElementById('1st').style.color = 'blue';

var myClass2 = document.querySelectorAll('#i3rd, .li5th, .li7th');
for(var i=0; i<myClass2.length; i++){
  var style2 = myClass2[i].style;
  style2.color = "green";
  style2.fontWeight = "bold";
}

var myClass3 = document.querySelectorAll('.ul5-2 li > strong');
for(var i=0; i<myClass3.length; i++){
  var style3 = myClass3[i].style;
  style3.backgroundColor = "yellow";
  style3.color = "black";
  style3.fontFamily = "serif";
}

var myClass4 = document.querySelectorAll('.yabai:first-child');
for(var i=0; i<myClass4.length; i++){
  var style4 = myClass4[i].style;
  style4.backgroundColor = "pink";
  style4.color = "red";
  style4.fontSize = "8px";
}

var myClass5 = document.querySelectorAll('.yabai:last-child');
for(var i=0; i<myClass5.length; i++){
  var style5 = myClass5[i].style;
  style5.backgroundColor = "aqua";
  style5.color = "red";
  style5.fontSize = "8px";
}

var myClass6 = document.querySelectorAll('.yabatanienn:not(:first-child)');
for(var i=0; i<myClass6.length; i++){
  myClass6[i].style.borderLeft = "5px solid green";
  myClass6[i].style.color = "aqua";
}

var myClass7 = document.querySelectorAll('.yannbaru:empty');
for(var i=0; i<myClass7.length; i++){
  myClass7[i].style.color = "darkgray";
}

var myClass8 = document.querySelectorAll('li span:only-child');
for(var i=0; i<myClass8.length; i++){
  myClass8[i].style.color = "white";
  myClass8[i].style.backgroundColor = "blue";
}

var myClass9 = document.querySelectorAll('.yahh:nth-of-type(3)');
for(var i=0; i<myClass9.length; i++){
  myClass9[i].style.color = "green";
  myClass9[i].style.backgroundColor = "yellow";
}

var myClass10 = document.querySelectorAll('.yahh:nth-last-child(3)');
for(var i=0; i<myClass10.length; i++){
  myClass10[i].style.color = "purple";
  myClass10[i].style.backgroundColor = "yellow";
}

var myClass10 = document.querySelectorAll('.yahh:nth-last-child(1)');
for(var i=0; i<myClass10.length; i++){
  myClass10[i].style.color = "purple";
  myClass10[i].style.backgroundColor = "yellow";
}

var myClass11 = document.querySelectorAll('.yahh:nth-last-of-type(4)');
for(var i=0; i<myClass11.length; i++){
  myClass11[i].style.color = "red";
  myClass11[i].style.backgroundColor = "yellow";
}


var myClass12 = document.querySelectorAll('.yahh:first-of-type');
for(var i=0; i<myClass12.length; i++){
  myClass12[i].style.fontSize = "8px";
  myClass12[i].style.fontFamily = "serif";
}

var myClass13 = document.querySelectorAll('.yahh:last-of-type');
for(var i=0; i<myClass13.length; i++){
  myClass13[i].style.fontSize = "8px";
  myClass13[i].style.fontFamily = "serif";
}

var myClass14 = document.querySelectorAll('.ul5 p:only-of-type');
for(var i=0; i<myClass14.length; i++){
  myClass14[i].style.color = "pink";
}
var myClass15 = document.querySelectorAll('.ul5 li:only-of-type');
for(var i=0; i<myClass15.length; i++){
  myClass15[i].style.color = "pink";
}

var myClass16 = document.querySelectorAll('.langlist li:lang(ja)');
for(var i=0; i<myClass16.length; i++){
  myClass16[i].style.color = "red";
}
var myClass17 = document.querySelectorAll(':lang(en)');
for(var i=0; i<myClass17.length; i++){
  myClass17[i].style.color = "blue";
}
var myClass18 = document.querySelectorAll(':lang(en-es)');
for(var i=0; i<myClass18.length; i++){
  myClass18[i].style.color = "green";
}
var myClass19 = document.querySelectorAll(':lang(en-us)');
for(var i=0; i<myClass19.length; i++){
  myClass19[i].style.color = "orange";
}

var myClass20 = document.querySelectorAll('.ul6 .l6-2');
for(var i=0; i<myClass20.length; i++){
  myClass20[i].style.fontSize = "8px";
}



;
