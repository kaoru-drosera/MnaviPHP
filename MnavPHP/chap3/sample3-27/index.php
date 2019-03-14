<?php
if (rand(0,1) == 0){
  header('Location: a.html');
} else {
  header('Location: b.html');
}
// ランダムな値 = rand(最小の数字,最大の数字);
?>
