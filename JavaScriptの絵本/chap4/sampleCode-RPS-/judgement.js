var strMsg1 = "あいこです";
var strMsg2 = "あなたの勝ちです";
var strMsg3 = "私の勝ちです";


function myResult(RPSUser){
  var RPSComp = Math.floor(Math.random()*3);

  if(RPSComp == RPSUser){
    return strMsg1;
  }else if((RPSComp+1)%3 == RPSUser){
    return strMsg2;
  }else{
    return strMsg3;
  }
}




;
