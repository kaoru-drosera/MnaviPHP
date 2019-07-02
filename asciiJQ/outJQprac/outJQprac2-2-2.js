var myClass1 = document.querySelectorAll('[id]');
for(var i = 0; i < myClass1.length; i++){
  myClass1[i].style.color = "green";
}
// これでもイケる…。…ビックリだな。
// なんとな〜〜くjQと同感覚で使ってたけど、
// まさかここまでまんまとは…。

var myClass2 = document.querySelectorAll('[title="7_3rd"]');
for(var i = 0; i<myClass2.length; i++){
  myClass2[i].style.color = "blue";
}
// 「[html属性='属性の値']」のように書くことで、
// 特定の値を持ったものに設定を効かせることができる。
// ただ、属性指定は必ず「''」「""」を使って囲うこと。
// emmetのようにはいかぬのだ！

var myClass3 = document.querySelectorAll('.ul7:not([title="7_3st"])');
for(var i=0; i<myClass3.length; i++){
  myClass3[i].style.color = "red";
}
// しかし、jsではhtml属性の前に「!」を置くことによる
// 「特定の値以外」の指定はできない。
// その代わりというべきか、
// 'タグ名:not([title='属性の値'])'とすることで
// 「特定の値以外」の指定ができるようになるようだ。
// ただし、タグ名と:notの間に空白を開けないこと。
// :not以降のコードが無効になるぞ。

var myClass4 = document.querySelectorAll('[type=submit]');
for(var i=0; i<myClass4.length; i++){
  var style4 = myClass4[i].style;
  style4.fontSize = "24px";
  style4.color = "white";
  style4.border = "none";
  style4.padding = "10px 40px";
  style4.backgroundColor = "darkgray";
  style4.cursor = "pointer";
}
// jQのやつでやったようなsubmitの設定を
// 今度はjQ抜きでやってみたぞ！
// ふっふーん！
// …って、なんでこれだけは
// 「''」「""」で囲わなくても動くんだ…？

var myClass4 = document.querySelectorAll('.ul8 [title^="f"]');
for(var i=0; i<myClass4.length; i++){
  myClass4[i].style.backgroundColor = "mediumspringgreen";
  myClass4[i].style.color = "white";
}
// あれ…？なんでこれは大丈夫なんだ…？

var myClass5 = document.querySelectorAll('.ul9 [title$="d"]');
for(var i=0; i<myClass5.length; i++){
  myClass5[i].style.backgroundColor = "darkorange";
  myClass5[i].style.color = "white";
}

var myClass6 = document.querySelectorAll('.ul10 [title*="ir"]');
for(var i=0; i<myClass6.length; i++){
  myClass6[i].style.backgroundColor = "darkorchid";
  myClass6[i].style.color = "white";
}

var myClass7 = document.querySelectorAll('.ul11 [title*="ir"][title^=f]');
for(var i=0; i<myClass7.length; i++){
  myClass7[i].style.backgroundColor = "peru";
  myClass7[i].style.color = "white";
}

// var myClass8 = document.querySelectorAll('.ul13 li:first');
// for(var i=0; i<myClass8.length; i++){
//   myClass8[i].style.backgroundColor = "deeppink";
//   myClass8[i].style.color = "white";
// }
// var myClass9 = document.querySelectorAll('.ul13 li:last');
// for(var i=0; i<myClass9.length; i++){
//   myClass9[i].style.backgroundColor = "deeppink";
//   myClass9[i].style.color = "white";
// }
// ↑以上コードでは効かなかった。
// クラスの指定と、last-of-typeなどを使いこなすのが鍵か？

var myClass8 = document.querySelectorAll('.ul13 li:first-of-type');
for(var i=0; i<myClass8.length; i++){
  myClass8[i].style.backgroundColor = "deeppink";
  myClass8[i].style.color = "white";
}
var myClass9 = document.querySelectorAll('.ul13 li:last-of-type');
for(var i=0; i<myClass9.length; i++){
  myClass9[i].style.backgroundColor = "deeppink";
  myClass9[i].style.color = "white";
}
// 以上、代用のメソッドで書いた間に合わせのコード。

// var myClass10 = document.querySelectorAll('.ul13 li:even');
// for(var i=0; i<myClass10.length; i++){
//   myClass10[i].style.backgroundColor = "red";
//   myClass10[i].style.color = "white";
// }
// var myClass11 = document.querySelectorAll('.ul13 li:odd');
// for(var i=0; i<myClass11.length; i++){
//   myClass11[i].style.backgroundColor = "blue";
//   myClass11[i].style.color = "white";
// }
// ↑以上コードでは効かなかった。
// その代わり、nth-of-typeを駆使することで
// 奇数偶数の指定自体は出来た。
// ifが出るまでもなかったな！
// 参考:
// https://www.akecre.com/css/nth/

var myClass10 = document.querySelectorAll('.ul14 li:nth-of-type(even)');
for(var i=0; i<myClass10.length; i++){
  myClass10[i].style.backgroundColor = "red";
  myClass10[i].style.color = "white";
}
var myClass11 = document.querySelectorAll('.ul14 li:nth-of-type(odd)');
for(var i=0; i<myClass11.length; i++){
  myClass11[i].style.backgroundColor = "blue";
  myClass11[i].style.color = "white";
}
// 奇数は「2n」でも効くようだ。
// ただし、偶数の指定としての「1+2n」は効かないようだ。

// var myClass12 = document.querySelectorAll('.ul16 li:lt(5)');
// for(var i=0; i<myClass12.length; i++){
//   // myClass12[i].style.backgroundColor = "dark"
//   myClass12[i].style.color = "darkgray"
// }
// やはりこれも効かないか。
// となるとアレの出番だな
var myClass12 = document.querySelectorAll('.ul16 li:nth-of-type(-n+5)');
for(var i=0; i<myClass12.length; i++){
  // myClass12[i].style.backgroundColor = "dark"
  myClass12[i].style.color = "darkgray";
}
var myClass13 = document.querySelectorAll('.ul16 li:nth-of-type(6)');
for(var i=0; i<myClass13.length; i++){
  // myClass12[i].style.backgroundColor = "dark"
  myClass13[i].style.color = "white";
  myClass13[i].style.backgroundColor = "darkgray";
}
var myClass14 = document.querySelectorAll('.ul16 li:nth-of-type(n+7)');
for(var i=0; i<myClass14.length; i++){
  // myClass12[i].style.backgroundColor = "dark"
  myClass14[i].style.border = "1px solid darkgray";
}
// 「指定した数字より後のもの」の指定は、
// 「nth-of-type(n+指定した数字)」
// 「指定した数字より前のもの」の指定は、
// 「nth-of-type(-n+指定した数字)」
// として覚えておくといい。
//
// ただし、jQとは違って「+1」指定ではなく
// いきなり数字から始まるので
// 重複には気をつけたい。

// var myClass15 = document.querySelectorAll('.ul16 :header');
// for(var i=0; i<myClass15.length; i++){
//   // myClass12[i].style.backgroundColor = "dark"
//   myClass15[i].style.border = "1px solid darkgray";
// }
// ↑残念ながらこのコードは効かないようだ。
var myClass15 = document.querySelectorAll('.ul16 h1, .ul16 h2, .ul16 h3, .ul16 h4, .ul16 h5, .ul16 h6');
for(var i=0; i<myClass15.length; i++){
  // myClass12[i].style.backgroundColor = "dark"
  myClass15[i].style.border = "1px solid darkorange";
}
// ↑「h1~h6」の「見出し」を全て選択できる,
// というものはjQなしでは存在しないようだ。
// 男らしく、こうだーーーーーーー！！！(遠い目)

// var myClass16 = document.querySelectorAll('.ul17 li:contains("サンプル")');
// for(var i=0; i<myClass16.length; i++){
//   // myClass12[i].style.backgroundColor = "dark"
//   myClass16[i].style.border = "1px solid darkorange";
// }
// var myClass17 = document.querySelectorAll('.ul17 li:has(strong)');
// for(var i=0; i<myClass17.length; i++){
//   // myClass12[i].style.backgroundColor = "dark"
//   myClass17[i].style.border = "1px solid darkorange";
// }
// ↑2つのコードもダメだった。

// var myClass18 = document.querySelectorAll('.ul18 li:parent');
// for(var i=0; i<myClass18.length; i++){
//   // myClass12[i].style.backgroundColor = "dark"
//   myClass18[i].style.border = "1px solid darkorange";
// }
// まさか…「:parent」もダメだって…！？
var myClass18 = document.querySelectorAll('.ul18 li:not(:empty)');
for(var i=0; i<myClass18.length; i++){
  // myClass12[i].style.backgroundColor = "dark"
  myClass18[i].style.border = "1px solid darkorange";
}
// これはなんとか「:not()」を使って
// 反転させることで解決はした。

var myClassX = document.querySelectorAll('[title="x7_1st"]');
for(var i=0; i<myClassX.length; i++){
  myClassX[i].style.backgroundColor = "black";
  myClassX[i].style.color = "white";
  myClassX[i].style.fontWeight = "bold";
  myClassX[i].innerHTML = "変えたよ";
}

var myClassX2 = document.querySelectorAll('.ulx16 li:nth-of-type(6)');
for(var i=0; i<myClassX2.length; i++){
  myClassX2[i].style.backgroundColor = "darkorange";
  myClassX2[i].style.color = "rgb(175, 208, 178)";
  myClassX2[i].innerHTML = "変えたよん";

}
var myClassX3 = document.querySelectorAll('.ulx16 li:nth-of-type(n+7)');
for(var i=0; i<myClassX3.length; i++){
  myClassX3[i].style.backgroundColor = "#61ff00";
  myClassX3[i].style.color = "#b85005";
  myClassX3[i].innerHTML = "変えたよん";
}
var myClassX4 = document.querySelectorAll('.ulx16 li:nth-of-type(-n+5)');
for(var i=0; i<myClassX4.length; i++){
  myClassX4[i].style.backgroundColor = "#8b1646";
  myClassX4[i].style.color = "#99b57e";
  myClassX4[i].innerHTML = "変えたよん";
}

var myClassX5 = document.querySelectorAll('.ulx5 .lix5th, .ulx5 .lix8th');
for(var i=0; i<myClassX5.length; i++){
  myClassX5[i].style.backgroundColor = "#8b1646";
  myClassX5[i].style.color = "#99b57e";
  myClassX5[i].innerHTML = "変えたよん";
}

var myClassX6 = document.querySelectorAll('.ulx12 [title^="t"]');
for(var i=0; i<myClassX6.length; i++){
  myClassX6[i].style.backgroundColor = "#8b1646";
  myClassX6[i].style.color = "#99b57e";
  myClassX6[i].innerHTML = "変えたよん";
}
var myClassX6 = document.querySelectorAll('.ulx12 [title$="t"]');
for(var i=0; i<myClassX6.length; i++){
  myClassX6[i].style.backgroundColor = "#6ee703";
  myClassX6[i].style.color = "#4e61ac";
  myClassX6[i].innerHTML = "変えたよん";
}
var myClassX6 = document.querySelectorAll('.ulx12 [title*="if"]');
for(var i=0; i<myClassX6.length; i++){
  myClassX6[i].style.backgroundColor = "#3364d1";
  myClassX6[i].style.color = "#fff";
  myClassX6[i].innerHTML = "変えたよん";
}

var myClassX7 = document.querySelectorAll('.ulx13 [title=first], .ulx13 [title=sixth]');
for(var i=0; i<myClassX7.length; i++){
  myClassX7[i].style.backgroundColor = "black";
  myClassX7[i].style.color = "white";
}






;
