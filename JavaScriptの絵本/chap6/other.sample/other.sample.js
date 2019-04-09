function init(){
  document.form1.txtUrl.value = "http://ank.co.jp/";
  document.form1.txtWidth.value = "600";
  document.form1.txtHeight.value = "480";
  document.form1.btnClose.disabled = true;
}

function openWindow(){
  var errMsg = errorCheck();
  if (errMsg != ""){
    alert(errMsg + "が入力されていません");
    return;
  }

  var url = document.form1.txtUrl.value;
  var width = document.form1.txtWidth.value;
  var height = document.form1.txtHeight.value;
  if(confirm('新しいウィンドウを開いてもよろしいでしょうか？')){
    myWin = window.open(url, "", "width=" + width + ",height=" + height);
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
