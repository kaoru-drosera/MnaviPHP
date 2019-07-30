<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
// require_once("helloSinX3.5_Staff.php");
 ?>
<?php
  abstract class ShopBiz{
    // 抽象メソッド
    abstract function thanks();

    // インスタンスメンバー
    protected $uriage = 0;
    protected function sell($price){
      if(is_numeric($price)){
        echo "{$price}円です。";
        $this->uriage += $price;
      }
      // 子クラスで実装されるメソッドを呼び出す
      $this->thanks();
      // 抽象メソッドのthanks()の機能は、
      // ShowBizクラスの子クラスで実装する。
    }
  }
 ?>
