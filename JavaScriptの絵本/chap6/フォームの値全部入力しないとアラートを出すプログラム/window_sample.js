function check(){
  for(i=0; i<document.form1.length; i++){
    //「document.form1.length」 = 「form1のフォームの数だけ」
    //「for(i=0; i<document.form1.length; i++){}」
    // = 「form1のフォームの数だけ,0(１番目)から最後まで」
    if(document.form1.elements[i].value == ""){
      //↑空欄のフォームがある場合
      alert("購入する場合は、全項目の入力をお願いします。");
      return false;//送信を中止する
    }
  }
  return true;
  // for文に当てはまらなければ処理を続行
}
