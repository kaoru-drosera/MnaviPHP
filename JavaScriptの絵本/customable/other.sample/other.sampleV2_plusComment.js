function init(){
  document.form1.txtUrl.value = "http://ank.co.jp/";
  document.form1.txtWidth.value = "600";
  document.form1.txtHeight.value = "480";
  document.form1.btnClose.disabled = true;
}

function openWindow(){
  var errMsg = errorCheck();
  var txtMsg = textCheck();
  if (errMsg != ""){
    alert(errMsg + "が入力されていません");
    return;
  } else if(txtMsg != ""){
    alert(txtMsg + "には半角数字を入力してください");
    return;
  }

  var url = document.form1.txtUrl.value;
  var width = document.form1.txtWidth.value;
  var height = document.form1.txtHeight.value;
  if(confirm('新しいウィンドウを開いてもよろしいでしょうか？')){
    myWin = window.open(url, "", "width=" + width + ",height=" + height);
    document.form1.btnClose.disabled = false;
  }
}

function closeWindow(){
  myWin.close();
  document.form1.btnClose.disabled = true;
}

function errorCheck(){
  var errMsg = "";

  for(i=0; i<document.form1.length; i++){
    if(document.form1.elements[i].value == ""){

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

function textCheck(){
  var txtMsg = "";

  for(i=0; i<document.form1.length; i++){
    if(isFinite(document.form1.elements[i].value) == false){

      switch (document.form1.elements[i].name) {
        case "txtWidth":
        txtMsg += "[幅]";
        break;
        case "txtHeight":
        txtMsg += "[高さ]";
        break;
        default:

      }
    }
  }
  return txtMsg;
}

// 問題1.「数字を入力してもウィンドウが表示されてしまう」
  // 問題解決完了！
  // ・ただし、分かっててできたわけじゃないので実質虱潰し。






;
