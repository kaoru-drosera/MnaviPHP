<?php

  // 引数に対してhtmlspecialchars()を実行するes()

  //XSS対策のためのHTMLエスケープ
  function es($data, $charset='utf-8'){
    // 初期値あったろうが〜〜！！
    // ちなみに復習すると、引数に「="値"」すると
    // 入力しなかった場合に入る「初期値」を設定することができる。
    if(is_array($data)){
      // 再帰呼び出し
      return array_map(__METHOD__, $data);
      // 配列の場合は、値を1づつ引数にして、
      // 再帰呼び出しをする

      // 「__METHOD__」は、「現在実行中のメソッド自身を示す特殊な定数(マジック定数)」である。
      // ここでは「es()」を指すので、esのなかでesを使っていることになる。
      // この手法が、「再帰呼び出し」である。
    } else {
      // HTMLエスケープを使う
      return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
  }



  // 配列の文字エンコードのチェックを行う
  function cken(array $data){
    $result = true;
    foreach($data as $key => $value){
      if(is_array($value)){
        // 含まれている値が配列の時文字列に連結する
        $value = inplode("",$value);
        // 配列に入っている値を連結したストリングスにしてチェックします

      }

      if(!mb_check_encoding($value)){
        // 文字のエンコードが一致しない時
        $result = false;
        // foreachでのスキャニングを中断する
        break;
      }
    }
    return $result;
  }


  // ※foreach文ですべてのキーと値を取り出す
  // foreach ($array as $key => $value){
  //   // $keyと$valueを使った繰り返しの処理
  // }

  // 「$key => $value」で、(連想？)配列「$array」から
  // キー→値の順に取り出している。




 ?>
