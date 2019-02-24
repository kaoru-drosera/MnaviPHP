<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="../css/style.css"> -->

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>ラジオボタンの値を取得する</h2>
<pre>
  <p>ご予約日:</p>
  <?php
    // $reserves = $_POST['reserve'];
    // var_dump($reserves);
    // code by http://blog.ruedap.com/2011/03/17/php-html-form-checkbox-value-array
    // 受け取りは出来たものの、コードになって出てきてしまった。
  ?>
  <?php
    $reserves = filter_input_array(INPUT_POST, 'reserve', FILTER_SANITIZE_ENCODED);
    foreach((array)$reserves as $reserve){
      echo $reserve;
    }
    // エラーは出なかったが、データが表示されない。
  ?>
  <p>…といってもこのコードじゃ実務じゃ不安</p>
  <p>にしてもまさかお手本コードでダメな時があるなんて</p>
</pre>
<p>ご予約日:</p>

</main>
</body>
</html>
