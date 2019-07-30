      <?php
        class Stuff{
          //Stuffクラスを定義する
          //↓ここから「クラスメンバー」の定義
          public static $piggyBank = 0;
          //クラスプロパティ
          public static function deposit(int $yen){
            self::$piggyBank += $yen;
            //クラスメソッド。
            // クラスメソッドの中でクラスプロパティ
            // $piggyBankを使っている。
          }
          //↑ここまで「クラスメンバー」の定義

          // インスタンスプロパティ
          public $name;
          public $age;

          // コンストラクタ
          function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
            // プロパティに初期値を設定する
          }

          // インスタンスメソッド
          public function hello(){
            if(is_null($this->name)){
              echo "こんにちは。","\n";
            } else {
              echo "こんにちは。{$this->name}です","\n";
            }
          }

          // 遅刻して罰金
          public function latePenalty(){
            // スタティックメソッドを実行
            self::deposit(1000);
            // インスタンスメソッドの中で
            // クラスメソッド「deposit()」を利用している
          }
        }

       ?>










    ;

</body>
</html>
