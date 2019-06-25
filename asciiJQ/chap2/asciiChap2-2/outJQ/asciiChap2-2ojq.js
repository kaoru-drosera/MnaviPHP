document.getElementById('kyuukyo').style.fontSize = '36px';
// idの取得には「getElementById()」を。ちなみに、#は必要なし。

// タグ名の取得には「getElementsByTagName()」。
// クラスの取得は「getElementsByClassName()」。
// タグ名とクラスは1htmlファイルに一つだけのidと違い
// 複数形にする必要がある。
// ちなみにこれも.は必要ない。

// スタイルの変更は「document.変更する要素.style.(プロパティ名) = "値"」。
// font-sizeのようにハイフンを必要とするものは
// 「fontSize」のようにキャメルケースを使って書く必要がある。


document.getElementsByTagName('ul')[0].style.fontSize = '8px';
// document.getElementsByTagName('li').style.textAlign = 'center';
// ちなみに、↑のコードではエラーになる。
// javascriptはhtmlファイルを上から順番に読んでいるためか、
// liが複数ある場合は、「何番目か」の指定がないとどこだか特定できない。

document.getElementsByClassName('ul2')[0].style.fontSize = '24px';
// クラスを指定するときは重複するとエラーが出る。
// ↑の場合番号を振ることで解決した。
// ちなみに、コード1つでの複数指定はできないようだ。

// ちなみに、こんな方法もある。
var changeColor = function(className, color){
  var elems = document.getElementsByClassName(className);
  // 文字色を変える
  // elems[0].color = color;
  // ↑.styleわすれた
  elems[0].style.color = color;
}
changeColor("5th","blue");
// 筆記量が減って格段に便利に！な予感がした。
// が、やっぱり複数指定ができない。
// もっと言うとクラス限定なため不便を感じるかもな

// 引用
// https://www.sejuku.net/blog/68588#i-3

// const div = document.getElementById('wrap');
// const result = div.getElementsByClassName('test sample');
// console.log(result[0]);

const div = document.getElementById('wrap');
const result = div.getElementsByClassName('test sample')[0].style.color = "peru";
// このように、「1タグに複数クラスを持つもの」はこうすれば指定できるようだ。


// 「こんどこそ！クラス全体に適応」
// 引用
// https://q-az.net/none-jquery-class-tab/
var myClass = document.getElementsByClassName('yabai');
for(var i = 0; i < myClass.length; i++){
  myClass[i].innerHTML = "ヤバイヤバイヤバヤバイヤバイヤバイヤバヤバイヤバイヤバイヤバヤバイヤバイヤバイヤバヤバイ";
  myClass[i].style.color = "purple";
  myClass[i].style.fontWeight = "bold";
}
// 引用ここまで。
// これで、javaScriptの「クラスやidやタグ問わず『1つのタグ』しか取得できない」
// 仕組みで、「クラスを持つタグ全てに変更を適用」が可能になった。
// もしこれを「X番目以降、奇数偶数…」といった条件をつけるなら
// for関数とif関数を併用していく可能性があるのだろうな。

// 以下が公式だろうか。
// var クラス変数 = document.getElements…('クラス名');
// for(var i = 0; i < クラス変数.length; i++){
//   クラス変数[i].…
//   …
//   ↑「クラス変数[i].」は1つの設定ごとに
//   その都度1つ打ち込んでいく必要がある。
// }
// 公式ここまで


// 複数クラスを指定して書く方法も見つかった。
// ヤバすぎだろ、q-az!
// それが「querySelectorAll()」だ。

// var myClass = document.querySelectorAll(".class1, .class2");
// for (var i = 0; i < myClass.length; i++) {
  //     myClass[i].innerHTML = "おはよう";
  //     ↑htmlの中身は、innerHTMLというコードを使って指定できるようだ。
  // }

// 引用ここまで

// var mySelectAll = document.querySelectorAll(".yabatanienn, .yannbaru");
// var mySelectAll = document.querySelectorAll(".i12wrapinner2 .doc2_2, .i12wrapinner");
// ↑以上コードなら成功する。
// 大きなタグ名を一度に囲う、という単純なものに限るのだろうか？



var mySelectAll = document.querySelectorAll(".ul5-2 .i26th, .ul5-3 .i28th, #test3");
for(var i = 0; i < mySelectAll.length; i++){
  mySelectAll[i].style.color = "orange";
}
// あれ…？「タグ内の要素」にも適応できた。
// なんでだー…？
// ひとつ言えるのは、「クラス名の先頭を数字にすると失敗する」ことぐらい。

// →成功だ！(たぶん)
// 理由がわかった。今までうまくいかなかったのは、
// 「クラス名の先頭が数字」だったから(29th,31th、など)だった。
// 「クラス名の先頭を数字にしない」さえ守れば、問題なく使えるようだ！
// …そうそう。末尾に「,」などを置きっぱなしにしないこと。
// ↓以下のコードだと失敗するぞ。
// var ul525th = document.querySelectorAll('.ul5-4 .i27th, .ul5-4 .i25th,');
// ↑以上のコードだと失敗するぞ。

// ただし、「特定のクラス一つ」などで指定する場合には個別に
// 「getElementsByClassName」のようなタグを使い分ける必要があるぞ。
var i26th = document.getElementsByClassName('i26th');
for(var i = 0; i < i26th.length; i++){
  i26th[i].style.backgroundColor = "green";
  i26th[i].style.color = "white";
  i26th[i].innerHTML = "DTDTDTDTDTDTDTDTDTDTDTDTDTDTDTDTDTDTDTDTDT";
}
// ↑にしてもコレすごいね！
// ほとんどjQの$('')のクラス指定と同感覚で使えるし、
// コードの構成も単純で、理解も(…たぶん)しやすい！

// …残念。「タグ内のクラスを『1つだけ』」指定する方法はない。
// querySelectorAllを使おうにも、必ず2つ以上指定する必要があるようだ。
// ↓証拠に、以下コードでは発動しない。
var ul525th = document.querySelectorAll('.ul5-4 .i26th');
for(var i = 0; i < ul525th.length; i++){
  ul525th[i].style.backgroundColor = "purple";
  ul525th[i].style.color = "white";
}
// ↑以上コードでは発動しない…
// …あれっ？できた…
// …ということで、「タグ内のクラス」を使う時には
// まずquerySelectorAllを使うようにしましょう！





// // 複数IDを指名し、指定した要素の集合を返す。
// // 引用:https://infoteck-life.com/a0186-js-dom-id-multiple/
// // 複数のid名で一括取得
// function getElements(){
//
// 	var elem = {};
// 	var elements = {};
// 	var id = '';
//
// 	// 引数の数だけループ
// 	for (var i = 0; i < arguments.length; i++){
// 		id = arguments[i];
// 		elem = document.getElementById(id);
//
// 		// id名が定義されている場合のみ、elementsに追加
// 		if (elem != null){
// 			elements[id] = elem;
// 		}
// 	}
//
// 	return elements;
// }
//
// // 一括取得
// var objs = getElements('test1', 'test2', 'test3');
//
// // id="test1"
// // console.log(objs.test1.textContent);  // コンテンツ1
//
// // id="test2"
// // console.log(objs['test2'].textContent); // コンテンツ2
//
// // 全部
// alert(JSON.stringify(objs));  // {test1: p#test1, test2: p#test2, test3: p#test3}
// // 引用ここまで
//
// // 複数classで一括取得
// function getElements(){
//   var elems = {};
//   var elements = {};
//   var id = '';
//   // ↑配列にするのだろうか？
//
//   // 引数の数だけループ
//   for(var i = 0; i < arguments.length; i++){
//     id = arguments[i];
//     elem = document.getElementById(id);
//     // argumentsは、引数が多い場合に便利な、
//     // 配列のようなもの。(?)
//     // ここでは、入ってきたクラスの数を配列にまとめておくもののようだ(?)
//
//     // class名が定義されている場合にのみ、elementsに追加
//     if(elems != null){
//       elements[id] = elem;
//     }
//   }
//   return elements;
// }
//
// // 使い方
// // 一括取得
// var objs = getElements('1th','3th','4th');
// alert(JSON.stringify(objs));
//
// // 引用ここまで


// ………。
// 無理だこれ全然わからない
// end「複数クラス指定できない」










;
