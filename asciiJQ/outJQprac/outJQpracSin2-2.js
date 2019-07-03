// var myClass1 = document.querySelectorAll('.dv1 .first');
//
//   document.getElementById('#button').addEventListener("click",function(){
//     alert('クリックされました');
//     // document.querySelectorAll('.dv1 .first').text('変更後');
//   },false);

// ↑以上のコードではエラーが出た。
// Uncaught TypeError: Cannot read property 'addEventListener' of null
// なんでも、jsは上から順番に読み込む都合上、
// jsのコード開始時点ではbodyが読み込まれないため
// 読み込みたいクラスも読み込めないため
// 「null」が帰るのだそう。

// (function(){
//   'use strict'
//   var isStarted = false;
//
//   // var result = document.querySelectorAll('.dv1 .first');
//   // var btn = document.getElementById('button');
//
//   document.addEventListener("DOMContentLoaded",function(){
//     document.getElementById('dv1first').addEventListener("click",function(){
//       // なぜかIDしか受け取れない…。
//       if(!isStarted){
//         // ↑isStartedが0なら真、それ以外なら偽
//         isStarted = true;
//         this.innerHTML = '変更前';
//       }else{
//         isStarted = false;
//         this.innerHTML = '変更後';
//       }
//     });
//   },false);
// })();
// https://teratail.com/questions/24714

'use strict'

var myFirstInDv1 = document.querySelectorAll(".dv1 .first");
for(var i=0; i<myFirstInDv1.length; i++){
  myFirstInDv1[i].addEventListener("click", function() {
    this.style.color = "red";
  }, false);
}
  // click()をjsで書くには、
  // on('click')の代用としてこれを用いるといい。

  // ↓以下公式

  // .addEventListener('click',function(){
  //   // イベント
  //   ex) this.style.color = "red"
  // },false);

  // ↑以上公式

  // ちなみに、終わりのfalseは「入れておけばOK」
  // といった認識で…と言いたいところだが、
  // 「リンクがjsで無効にならない」
  // といったトラブルを引き起こさないための
  // 処理とつながるのではないかと思う。

// 基本的なことだが、getElementsByClassNameやquerySelectorNameを使う際は
// [i]を使わないとエラーになる。
// 何番目のクラスなのかjsが判別できないからだ。

var myClass3_1 = document.querySelectorAll('.dv3 .dv3btn');
var myClass3_2 = document.querySelectorAll('.dv3 .first');
for(var i=0; i<myClass3_1.length; i++){
  myClass3_1[i].addEventListener('click',function(){
    for(var i=0; i<myClass3_2.length; i++){
      myClass3_2[i].innerHTML = "<h3>かえたよ</h3>";
    }
  },false);
}




// https://q-az.net/none-jquery-html-text-val/
// .html(), .text(), .val()
// https://q-az.net/without-jquery-on-off/
// https://teratail.com/questions/24714
// 都合上、click(on)も並行して学習することに。
