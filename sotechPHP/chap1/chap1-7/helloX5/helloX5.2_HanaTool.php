<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
// require_once("helloSinX3.5_Staff.php");
 ?>
<?php
// HanaToolトレイトを定義する
trait HanaTool{
  public function hello(){
    // HanaToolトレイトにもhello()があります
    echo "ご　き　げ　ん　よ　う　！";
  }
}
 ?>
