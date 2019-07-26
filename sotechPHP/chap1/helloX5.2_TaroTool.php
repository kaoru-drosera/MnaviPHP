<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
// require_once("helloSinX3.5_Staff.php");
 ?>
<?php
  // TaroToolトレイトを定義する
  trait TaroTool{
    public function hello(){
      // TaroToolにhelloツールがある
      echo "ハロー";
    }

    // 今日の曜日
    public function weekday(){
      $week = ["日","月","火","水","木","金","土",];
      $now = new DateTime();
      $w = (int)$now->format('w');
      $weekday = $week[$w];
      echo "今日は",$weekday,"曜日です。";
    }
  }
 ?>
