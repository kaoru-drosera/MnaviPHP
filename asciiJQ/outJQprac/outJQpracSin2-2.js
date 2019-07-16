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




// 要素を書き換え

var myClass3_1 = document.querySelectorAll('.dv3 .dv3btn');
var myClass3_2 = document.querySelectorAll('.dv3 .first');
for(var i=0; i<myClass3_1.length; i++){
  myClass3_1[i].addEventListener('click',function(){
    for(var i=0; i<myClass3_2.length; i++){
      myClass3_2[i].innerHTML = "<h3>かえたよ</h3>";
    }
  },false);
}

var myClass4_1 = document.querySelectorAll('.dv4 .dv4btn');
var myClass4_2 = document.querySelectorAll('.dv4 .first');
for(var i=0; i<myClass4_1.length; i++){
  myClass4_1[i].addEventListener('click',function(){
    for(var i=0; i<myClass4_2.length; i++){
      myClass4_2[i].textContent = "かえますやんか";
    }
  },false);
}

var myClass5_1 = document.querySelectorAll('.dv5 .dv5btn');
var myClass5_2 = document.querySelectorAll('.dv5 .first');
for(var i=0; i<myClass5_1.length; i++){
  myClass5_1[i].addEventListener('click',function(){
    for(var i=0; i<myClass5_2.length; i++){
      myClass5_2[i].value = 'いれましたしぃ…';
    }
  },false);
}


// 要素を取得
var myClass6_1 = document.querySelectorAll('.dv6 .dv6btn');
var myClass6_2 = document.querySelectorAll('.dv6 .first');
var myClass6_3 = document.querySelectorAll('.dv6 .second');
var myClass6_2_2 = document.getElementsByClassName('ail2');
var myClass6_3_2 = document.getElementsByClassName('foil2');
for(var i=0; i<myClass6_1.length; i++){
  myClass6_1[i].addEventListener('click',function(){
    for(var i=0; i<myClass6_2.length; i++){
      myClass6_2[i].textContent = myClass6_3[0].textContent;
      // ↑取得したい要素には必ず番号を入れること。
      // 「1つだけ！」という場合にも[0]を入れること
    }
  },false);
}

var myClass8_1 = document.querySelectorAll('.dv8 .dv8btn');
var myClass8_2 = document.querySelectorAll('.dv8 .first');
var myClass8_3 = document.querySelectorAll('.dv8 .dv8fm');
// var myClass8_4 = document.querySelectorAll('.dv8 .second');
for(var i=0; i<myClass8_1.length; i++){
  myClass8_1[i].addEventListener('click',function(){
    for(var i=0; i<myClass8_2.length; i++){
      myClass8_2[i].textContent = myClass8_3[0].value;
    }
  },false);
}
// ウォホァハァッハァァーー！！
// jsからフォームの値を受け取れるようになったぞ！

// 要は、
// document.querySelectorAll('')[X].value = フォームの値を受け取る
// document.querySelectorAll('')[X].textContent = テキストを受け取る
// document.querySelectorAll('')[X].innerHTML = HTMLを受け取る
// [X]には数字を入れる。これで「X番目」を表す。
// querySelectorAll('')後の[X]は入れ忘れるとエラーを吐くので必ず。
// といった感じになるのかな

// 要は、「[0]」で必ず「1番目」として指定できるよう、
// 変数は「この1つしかない！」となるように
// 設定すればいいのだろうか。



// 「前に挿入・後ろに挿入」編
// insertBefore()
var myClassY1 = document.querySelectorAll('.dvv2 .dvv2p');
// ↑増やしたい項目を設定
var myNav = document.querySelectorAll('.dvv2 .dvv2Strong');
// ↑どこをクリックすれば発動するかをここで設定
var myBefore = document.querySelectorAll('.dvv2p')[0];
// ↑親要素(?)を設定。この場合「.dvv2pの1番目」がそれにあたるか。
for(var i=0; i<myNav.length; i++){
  myNav[i].addEventListener('click',function(){
    for(var i=0; i<myNav.length; i++){
      myNav[i].parentNode.insertBefore(myBefore.cloneNode(true),myNav[i]);
      // insertBeforeのまま使えるが、jsでは「親を指定する」必要があるのだ。
      // そのために、parentNode.querySelectorAll('')…で「親要素」が指定できるぞ。
      // .cloneNode(true)は「複製を有効にする」ためのもの。
      // insertBefore()公式
      // B.parentNode.insertBefore(A,B);
      // ↑B=増やしたいもの？
      // 　A=親要素？
    }
  },false);
}


// .append()
'use strict'
var myClassY2 = document.querySelectorAll('.dvv3 .dvv3p');
var myHeader = document.querySelectorAll('.dvv3 .dvv3p');
var myNav2 = document.querySelectorAll('.dvv3 .dvv3Strong')[0];
for(var j=0; j<myClassY2.length; j++){
  myClassY2[j].addEventListener('click',function(){
    for(var i=0; i<myHeader.length; i++){
      myHeader[i].appendChild(myNav2.cloneNode(true));
    }
  },false);
}
  // ↑コード自体は効いてくれたようだ。
  // ただclick機能に問題があったのかな。
  //
  // ↑問題解決！
  // どうやらおなじクラス名でも
  // 「click機能を発動させるもの」と
  // 「要素を増殖させる目印となる『親』」で
  // 別々にクラスを用意する必要があったようだ。






// https://q-az.net/none-jquery-html-text-val/
// .html(), .text(), .val()
// https://q-az.net/without-jquery-on-off/
// https://teratail.com/questions/24714
// 都合上、click(on)も並行して学習することに。

// そして
// https://q-az.net/none-jquery-insertbefore-append/
// insertBefore(),append()
