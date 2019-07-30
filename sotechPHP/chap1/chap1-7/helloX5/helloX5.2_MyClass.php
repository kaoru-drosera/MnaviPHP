<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
// require_once("helloSinX3.5_Staff.php");
 ?>
<?php
require_once("helloX5.2_HanaTool.php");
require_once("helloX5.2_TaroTool.php");
// MyClasクラスを定義する
class MyClass{
  // 2つのトレイトを使用する
  use TaroTool, HanaTool{
    // TaroToolとHanaToolの2つのトレイトの利用を宣言する
    HanaTool::hello insteadof TaroTool;
    // HanaToolのhello()を使うことを宣言する
  }
}
 ?>
