<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
// require_once("helloSinX3.5_Staff.php");
 ?>
<?php
require_once("helloX5.6_ShowBiz.php");

class MyShop extends ShopBiz{
  // ShopBiz 抽象クラスで指定されているメソッド
  public function thanks(){
    // ShopBizクラスの抽象メソッドthanks()を実装する
    echo "ありがとうございました","\n";
  }

  // 販売する
  public function hanbai($tanka, $kosu){
    $price = $tanka * $kosu;
    // ShopBiz 抽象クラスから継承しているメソッドを実行。
    $this->sell($price);
    // ShopBizクラスのsell()の中でthanks()が実行されている
  }

  // 売り上げ合計を調べる
  public function getUriage(){
    echo "売り上げ合計は、{$this->uriage}円です";
  }
}
 ?>
