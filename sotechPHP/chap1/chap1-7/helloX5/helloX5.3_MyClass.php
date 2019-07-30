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

    TaroTool::hello as taroHello;
    HanaTool::hello as hanaHello;
    // ↑2つのhello()に別名をつけます
    HanaTool::hello insteadof TaroTool;
    // ↑単に「hello」が呼ばれた時は、HanaToolのhello()を実行する。
  }
}
 ?>
