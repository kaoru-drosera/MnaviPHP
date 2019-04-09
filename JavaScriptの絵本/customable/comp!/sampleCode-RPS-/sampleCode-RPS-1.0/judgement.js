var strMsg1 = "あいこです";
var strMsg2 = "あなたの勝ちです";
var strMsg3 = "私の勝ちです";


function myResult(RPSUser){
  var RPSComp = Math.floor(Math.random()*3);
  // 「Math.floor()」で、小数点以下を切り捨てる。
  // 「Math.random()」0以上1未満の変数の
  // 乱数を発生させる。
  // 以上のコードでは
  // 「0~2の乱数を発生させる」
  // という意味になっている。

  comp = RPSComp;

  if(RPSComp == RPSUser){
    return strMsg1;
  }else if((RPSComp+1)%3 == RPSUser){
    // この式(勝利条件)は、要するに
    // *1「0~2までの乱数に1を足し、
    // それを3で割った余りが
    // RPSUserの値と同じ」
    //ということだろう。
    //なら、「RPSUser」がわからないのだが…
    //

    //
    // →「RPSUser」は、form1のinputで定めていた
    // onclickの「myChoise」の数字に鍵があった。
    // 要は、「myChoise()の数字と*1が等しい」
    // ということではないだろうか？
    //
    // 選ばれたform1>input内のonclick要素が
    // myChoiseの数字となり、
    // それがmyResultの引数となる。
    // これが、RPSUserの値となるのだろう。
    //

    return strMsg2;
  }else{
    return strMsg3;
  }
}


}






;
