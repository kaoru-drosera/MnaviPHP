function init(){
  document.form1.txtUrl.value = "http://ank.co.jp/";
  document.form1.txtWidth.value = "600";
  document.form1.txtHeight.value = "480";
  document.form1.btnClose.disabled = true;
  // (ねんのため)form1はhtml側のformタグのname属性。
  // btnCloseはhtml側の「close」ボタンのname属性。
  // disabledは「フォームを無効化させる」プロパティ。
}

function openWindow(){
  var errMsg = errorCheck();
  // 「errMsg」は、関数「errorCheck()」と同義なようだ。
  // ちなみに、関数内でvarが設定されているのでローカル関数なようだ。
  if (errMsg != ""){
    alert(errMsg + "が入力されていません");
    return;
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

    この例を元にopen()メソッドを公式化するときっとこんな感じ。
    「window.open(url, "", "width=" + width + ",height=" + height);
    =」



    document.form1.btnClose.disabled = false;
  };
};

function closeWindow(){
  myWin.close();
  document.form1.btnClose.disabled = true;
}

function errorCheck(){
  var errMsg = "";

  for(i=0; i<document.form1.length; i++){
    if(document.form1.elements[i].type == "text" && document.form1.elements[i].value ==""){

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
}







;
