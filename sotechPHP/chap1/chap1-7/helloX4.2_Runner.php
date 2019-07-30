<?php
// Runnerクラス
// require_once("Player.php");
require_once("helloX4_Player.php");
// Runnerクラスを定義する。
// Playerクラスをここで継承。
class Runner extends Player{
  // プロパティ
  public $age;
  // Runnerクラスでは$ageプロパティのみが定義されている。

  // コンストラクタ
  function __construct($name, $age){
    // 親クラスのコンストラクタを呼ぶ
    parent::__construct($name);
    // Playerクラスのコンストラクタに$nameを渡す
    $this->age = $age;
    // 忘れてた。
    // 新たに加える要素は普通に呼び出す。
  }

  // オーバーライドする
  // Playerクラスのwho()メソッドを
  // ここでオーバーライド。
  public function who(){
    echo "{$this->name}、{$this->age}歳です。","\n";
  }

  // インスタンスメソッド
  public function play(){
    echo "{$this->name}が走る！","\n";
  }
}
 ?>
