<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
  class Cook {
    // コックのプロパティ ←「名前」や「性別」などの「属性」
    // コックのメソッド ←「料理を作る」などの「機能」
  }

  $Cook1 = new Cook();
  $Cook2 = new Cook();
    // newの隣にあるCookはさっきclassで作った「Cook(クラス)」の事？

  $Cook1->age = 26;
  // ↑『$Cook1(インスタンス)』の「age(プロパティ)」を「26(プロパティの値)」に設定。
  // $Cook2->omlete();
  // ↑ $Cook2のomlete()メソッドを実行する。(?)


 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>オブジェクト指向</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <style>
    .table1 thead th{
      background-color: black;
      color: white;
    }
    .pdg{
      padding-top: 50px;
    }
    .gaiyo{
      background-color: rgb(255, 227, 227);
    }
    .imgwrap{
      max-width: 800px;
      width: 100%;
    }
    .imgwrap img{
      width: 100%;
    }
  </style>
  <div class="main-contents">
    <pre>
    </pre>

    <pre>
      <?php
      //以下、Staffクラス。
        class Staff{
          // インスタンスプロパティ
          public $name;
          public $age;

          // コンストラクタを追記
          function __construct($name, $age){
            // プロパティに初期を導入する
            $this->name = $name;
            $this->age = $age;
          }
          // コンストラクタ追記完了！


          // インスタンスメソッド
          // publicがあるため関数外でも使える
          //
          // helloメソッドを大胆書き換え！
          public function hello(){
            if(is_null($this->name)){
              // $thisは、「使われたインスタンス自身」という意味になる。
              // 例えば$hanaインスタンスで「$hana->hello()」が使われた場合
              // 「$hana->name」が出力されることになる。
              echo "こんにちは！","\n";
            } else {
              echo "こんにちは！","{$this->name}です！","\n";
            };
          }
        }

        // Staffクラスここまで。書き換え完了！

       ?>











    ;

</body>
</html>
