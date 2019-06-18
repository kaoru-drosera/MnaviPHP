function dispItem(mode, id){
    var elm = document.getElementById(id);
    if( mode == "over" ){
        // 背景色の変更
        elm.style.backgroundColor = "#CCC";
        // 文字色の変更
        elm.style.color = "#000";
    }else{
        // 背景色の変更
        elm.style.backgroundColor = "#000";
        // 文字色の変更
        elm.style.color = "#FFF";
    }
    // 脱jQueryはfunctionが肝心、ということだろう。
}
