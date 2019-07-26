<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
// require_once("helloSinX3.5_Staff.php");
 ?>

<?php
// require_once("GameBook.php");
require_once("helloX5.5_GameBook.php");

class MyGame implements GameBook{
  // GameBookインターフェースを採用

  public $hitPoint;

  function __construct($point = 50){
    $this->newGame($point);
    // インスタンスの作成と同時にゲーム開始
  }

// GameBookインターフェースで指定されているメソッド
// 1.ニューゲーム
public function newGame($point = 50){
  // インターフェースの指定に基づいて引数が1つ

  $this->hitPoint = $point;
}

// 2.ゲーム開始
public function play(){
  $num = random_int(0,50);
  if($num%2 == 0){
    echo "{$num}ポイント増えました!","\n";
    $this->hitPoint += $num;
  } else {
    echo "{$num}ポイント減りました…","\n";
    $this->hitPoint -= $num;
  }
  echo "現在{$this->hitPoint}ポイント","\n";
}

// 3.勝敗のチェック
public function isAlive():bool{
  // インターフェースの指定に基づいて
  // 戻り値のデータ型を真偽値に
  return ($this->hitPoint > 0);
  // 現在のポイント$hitPointが0より大きければtrue
}


}
 ?>
