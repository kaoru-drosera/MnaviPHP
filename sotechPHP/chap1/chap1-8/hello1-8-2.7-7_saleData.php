<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);
 ?>
<?php
  $couponList = ["nf23qw"=>0.75, "ha45as"=>0.8, "hf56zx"=>8.5];
  $priceList = ["ax101"=>2300, "ax102"=>2900];
  // このデータを外側のファイルやデータベースからの読み込みにするとさらに安全

  // くーぽんこーどで割引率を調べて返す
  function getCouponRate($code){
    global $couponList;
    // 該当するクーポンコードがあるかどうかをチェックする
    $isCouponRate = array_key_exists($code, $couponList);
    if($isCouponRate){
      return $couponList[$code];
      // 割引率を返す
    } else {
      // みつからなかったらNULLを返す
      return NULL;
    }
  }

  // 商品IDで価格を調べて返す
  function getPrice($id){
    global $priceList;
    // 該当する商品IDがあるかどうかチェックする
    $isGoodsID = array_key_exists($id, $priceList);
    if($isGoodsID){
      return $priceList[$id];
      // ↑価格を返す
    } else {
      // 見つからなかったらNULLを返す
      return NULL;
    }
  }
 ?>
