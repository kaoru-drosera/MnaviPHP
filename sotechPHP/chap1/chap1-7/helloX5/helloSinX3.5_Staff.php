<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
 <?php
 //以下、Staffクラス。
   class Staff{
     // インスタンスプロパティ
     public $name;
     public $age;

     // インスタンスメソッド
     // publicがあるため関数外でも使える
     public function hello(){
       echo "こんにちは!","\n";
     }
   }
   //Staffクラスここまで

  ?>
  <?php
   $hana = new Staff();
   $taro = new Staff();
   // Staffクラスのインスタンスを作る

   $hana->name = "華";
   $hana->age = 2100;
   $taro->name = "多呂";
   $taro->age = 35;
   //プロパティの値を設定する

   print_r($hana);
   print_r($taro);
   // インスタンスを確認する。
   // なお、print_r()を使ってインスタンスを出力すると
   // 連想配列としてプロパティとその値とも両方出力するようだ。

   $hana->hello();
   $taro->hello();
   // メソッドを実行する。
  ?>
