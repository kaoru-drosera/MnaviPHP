<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
// require_once("helloSinX3.5_Staff.php");
 ?>

<?php
// 2つの関数があるDateToolトレイト
trait DateTool{
  // DateTimeを年月日の書式で返す
  public function ymdString($date){
    $dateString = $date->format('Y年m月d日');
    return $dateString;
  }

  // 指定に数後の年月日で返す
  public function addYmdString($date, $days){
    $date->add(new DateInterval("P{$days}D"));
    return $this->ymdString($date);
  }
}
?>
