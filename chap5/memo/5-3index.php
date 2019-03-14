<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/MnavPHP/MnaviPHP/css/bootstrap.min.css">
  <link rel="stylesheet" href="/MnavPHP/MnaviPHP/css/style.css">
  <title>よくわかるPHP 第5章</title>
</head>
<body>
  <h2>queryを学習する</h2>
  <h3>SELECT SQLを実行するには？</h3>
  <h2>Practice</h2>
  <pre>
  <?php
      // *forWIN
    try{
      $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', '');
    } catch (PDOException $e) {
      echo 'DB接続エラー:' . $e->getMessage();
    }

    //   *forMAC
    // try{
    //   $db = new PDO('mysql:dbname=mydb_bymnaviphp; host=localhost; charset=utf8', 'root', 'root');
    // } catch (PDOException $e) {
    //   echo 'DB接続エラー:' . $e->getMessage();
    // }

    $records = $db->query('SELECT * FROM my_item');
    while($record = $records->fetch()){
      print($record['item_name'] . "\n");
    }
    print("\n");


    // 「fetch()」たる見覚えのないコードがあるが、
    // これは一言でいうと「全てのデータを取り出す」機能。
    // 例えば「$records->fetch()」なら、
    // 「$records（= my_item内のデータ全て = $db->query('SELECT * FROM my_item');）を取り出して！」
    // という意味になる。
    //
    // 上のコードは、「for文＋配列」で指定のデータを一つずつ取り出したように
    // 「my_itemから商品名（my_item内の商品名item_nameの値）を1つずつ取り出す」ものが出来る。
    // 「for文」ではなく「while文」なのは、
    // 「fetch()」に「レコードがなくなるまで次の行のデータを取り出す」という
    // 性質があり、値の変動値を設定する必要がないからである。

    // もちろん、値を変更すれば「商品名」以外も取り出せるので、
    // 応用すれば「データベース内のデータをすべて取り出し、ちょっとした表にする」
    // といった仕掛けも可能に。
    //
    $records = $db->query('SELECT * FROM my_item');
    while($record = $records->fetch()){
      print( 'ID:' . $record['id']. "\n");
      print( 'メーカーID:' . $record['maker_id']. "\n");
      print( '商品名:' . $record['item_name']. "\n");
      print( '価格:' . $record['price']. "\n");
      print( '販売数:' . $record['sales']. "\n");
      print("\n");
    }


    // 「「COUNT」で計算した値をキーにするには」…？
    //
    // queryで取り出したレコードは「$record['id']」のように変数（具体的には連想配列のキー）
    // として利用することも可能だ。
    // それは、「計算結果」にも同じことが言えるのだ。

    $records2 = $db->query('SELECT COUNT(*) FROM my_item');
    $record2 = $records2->fetch();
    print('件数は' . $record2['COUNT(*)'] . '件です'. "\n");
    print("\n");

    // この上のコードにおける「'COUNT(*)'」を抜きだしてくることで変数として扱える。
    // ただし、これでは少し不便なので「AS」を使って名前をつければより便利でスマート。
    // ちなみに、「AS」は「SELECT」で定めた値の前だ

    $records3 = $db->query('SELECT COUNT(*) AS record_count FROM my_item');
    $record3 = $records3->fetch();
    print('件数は' . $record3['record_count'] . '円です'. "\n");
    print("\n");

    // 「MAX」「MIN」「AVG」でも同じように使えるので試してみましょう！
    // …と聞いて早速やってみたのだが、ちょっとダメだった…。

   ?>
 </pre>
</body>
</html>
