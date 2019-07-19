<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>NULLだったときは初期値で計算する</title>
</head>
<body>
<pre>
<?php
$price = 250 * ($kosu ?? 2);
var_dump($kosu);
echo $price;
?>
</pre>
</body>
</html>
