<?php
  必要な機能:
  サイコロを振る
    →出た目の数値を記録

  人数選択
  プレイヤー交代
  勝利プレイヤー発表（？）
 ?>
<?php
  // ゲーム説明(ver_0.1);
  // 2~6のが出れば、出た目の点数分得点。
  // 前回までの特点があればどんどん合計していく。
  // 自らターンを終えるまでいくらでもダイスを振ることができる。
  // ターンを終了させれば、自分の特点として得ることができる。
  // →ターンを終了して初めて、
  // 出た目の合計を自分の特点として獲得できる。

  例：
  １回目:6
  ２回目:2(特点は8)
  ３回目:4(特点は12)
  ターン１終了:合計特点12点を自分のポイントして獲得!

  ターン２終了:合計特点を20ポイントとして獲得。
  →前回特点12点とプラスで32ポイントとして続行。

  １回目:3
  ２回目:4(特点:7)
  ３回目:2(特点:9)
  ４回目:1(特点が強制的に0、強制ターンエンド)
  ターン３終了:合計特点を0ポイントして獲得。
  →前回、前々回までの合計ポイント32ポイントのまま続行。

  1の面が出れば、合計得点が0+ターン強制終了。
  ただし、前回までの合計得点は残ったまま。
 ?>
<?php
  // 機能:値を合計する
  $dice = rand(1,6);//ダイスを振って出た目。
  →
  $tableSum = 0;//ダイスを振った合計特点。
  $playerSum = 0;//プレイヤーが獲得した特点。以下「持ち点」


  // ダイスを振る
  // if($tableSum == 1){
  //  $tableSum == 0;
  //  ターン終了(?)
  // } else{
  //  $tableSum += $dice;
  // };
  //
  // ターン終了、特点
  // $playerSum += $tableSum ?
  // →ターン終了時、
  // ターン中に振ったダイスで出た目の合計を
  // 「持ち点」にプラス。





 ?>
