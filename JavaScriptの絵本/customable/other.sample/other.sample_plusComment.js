function init(){
  document.form1.txtUrl.value = "http://ank.co.jp/";
  document.form1.txtWidth.value = "600";
  document.form1.txtHeight.value = "480";
  document.form1.btnClose.disabled = true;
  // (ねんのため)form1はhtml側のformタグのname属性。
  // btnCloseはhtml側の「close」ボタンのname属性。
  // disabledは「フォームを無効化させる」プロパティ。
  // よって、4行目は「閉じるボタンを使えなくする」設定だ。
}

function openWindow(){
  var errMsg = errorCheck();
  // 「errMsg」は、関数「errorCheck()」と同義なようだ。
  // ちなみに、関数内でvarが設定されているのでローカル関数なようだ。
  if (errMsg != ""){
    // ↑の意味はおそらく「errMsgが空白じゃない場合」。
    // 要は、「errorCheck()」関数に引っかかって
    // 何らかの値([URL],[幅],[高さ]の中からいずれか1つ)が送られた場合だ。
    alert(errMsg + "が入力されていません");
    return;
    // ↑関数の終了時には、「return」が必要だ。
    // 「関数の処理を終了し、呼び出し元の処理を続けます」
    // ということらしい。
  }

  var url = document.form1.txtUrl.value;
  var width = document.form1.txtWidth.value;
  var height = document.form1.txtHeight.value;
  if(confirm('新しいウィンドウを開いてもよろしいでしょうか？')){
    myWin = window.open(url, "", "width=" + width + ",height=" + height);
    // ↑ウィンドウの高さと幅を設定できないことが、
    // セミコロンを置くことで解決した？

    // 仮説:
    // 例えば、html側で「googleを幅600px,高さ400p」で設定した場合、
    // こんなして変換されるのか！
    // 「https://www.google.co.jp/ , width=600 , height=400」
    // heightの前にコンマがないと設定が適応されないのは
    // この式からコンマが抜けていたからだったんだな！

    // この例を元にopen()メソッドを公式化するときっとこんな感じ。
    // 「window.open(url, "", "width=" + width + ",height=" + height);
    // =」
    // 意訳:「url=XXXのサイトを、広さがwidthの単位、高さがheightの単位で開く」

    document.form1.btnClose.disabled = false;
    // closeWindow関数で設定していた
    // 「基本的には使えなくする」設定を無効化
    // =「ボタンが使えるようにする」設定のようだ。
  };
};

function closeWindow(){
  myWin.close();
  document.form1.btnClose.disabled = true;
  // ↑前言撤回。「使えなくする」
  // 設定はinit関数でもともと定まっていた。
  // だから、これは「ウィンドウを閉じ終わったとき
  // もう一度使えなくする設定」
  // という意味で間違い無いだろう。
}

function errorCheck(){
  var errMsg = "";

  for(i=0; i<document.form1.length; i++){
    if(document.form1.elements[i].type == "text" && document.form1.elements[i].value == ""){

      switch (document.form1.elements[i].name) {
        case "txtUrl":
        errMsg += "[URL]";
        break;
        case "txtWidth":
        errMsg += "[幅]";
        break;
        case "txtHeight":
        errMsg += "[高さ]";
        break;
        default:

      }
    }
  }
  return errMsg;
  // 関数を終了させる「return」に変数を設定すると、
  // その値を関数に返すことができる。
  // 例えばこの関数なら「errMsg (=errorCheck()) = "[高さ]"」といった感じ。
  // ちなみに、これを「戻り値(返り値)」という。
}







;
