<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
 ?>

<?php
// クラスの読み込み。
// require_once("DateTool.php");
require_once("helloX5_DateTool.php");

class Milk{
  // DateTool トレイトを使用する
  use DateTool;
  // プロパティ宣言
  public $theDate;
  public $limitDate;

  function __construct(){
    // 今日の日付
    $now = new DateTime();
    // 年月日に直して設定する
    $this->theDate = $this->ymdString($now);
    // 10日後の日付
    $this->limitDate = $this->addYmdString($now, 10);
    // 10日後の日付を作る 　　　　　　　　　　　　　　　　↑
  }
}
?>
