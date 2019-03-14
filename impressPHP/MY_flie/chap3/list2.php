<?php
$user = "cort";
$pass = "ultra-5thorD";
$dbh = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM recipes";
$stmt = $dbh->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
$dbh = null;
?>

<!-- URL:http://localhost:8888/impressPHP/MY_flie/chap3/list2.php -->
