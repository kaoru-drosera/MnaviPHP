<?php
// Playerクラス定義ファイルを読み込む

// requre_once("Player.php");
require_once("helloX4_Player.php");
class Soccer extends Player{
  public function play(){
    echo "{$this->name}がシュート","\n";
  }
}
 ?>
