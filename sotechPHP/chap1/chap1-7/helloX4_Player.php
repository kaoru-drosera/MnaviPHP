<?php
  // Playerクラスを定義する
  class Player{
    // インスタンスプロパティ
    public $name;

    // コンストラクタ
    function __construct($name = "名無し"){
      // 引数が省略された場合の初期値 ↑
      $this->name = $name;
    }

    // ストリングにキャストされてた時に返す文字列。
    // マジックメソッドの定義。
    public function __toString(){
      return $this->name;
    }

    // インスタンスメソッド
    public function who(){
      echo "{$this->name}です。","\n";
    }
  }
 ?>
