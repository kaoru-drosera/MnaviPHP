var strMsg1 = "あいこです";
var strMsg2 = "私の勝ちです";
var strMsg3 = "あなたの勝ちです";


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

function cpuResult(comp){

  if(comp == 0){
    return "グー";
  }else if(comp == 1){
    return "チョキ";
  }else{
    return "パー";
  }
  // 表示させるだけはできたが、
  // 論理エラーの発生したコードだ。
  // myChoiseのように、
  // 「0=グー」「1=チョキ」「2=パー」
  // で役割を当てた。
  // 数字は「RPSComp」の値である。
  //
  // あいこだけあってる。
  // ただ、勝利条件が逆転している。
  // 「自分:グー 相手:チョキ」で
  // 相手の勝ちになってしまう。
  //
  // 本当はやりたくなかったが、
  // 「strMsg2」「strMsg3」の値を入れ替えることで
  // この論理エラーだけは直せた。

}






;
