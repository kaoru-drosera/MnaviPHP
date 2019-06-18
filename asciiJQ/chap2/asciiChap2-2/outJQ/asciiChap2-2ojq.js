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
// このように、「複数クラスを持つもの」はこうすれば指定できるようだ。

// 引用ここまで


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
