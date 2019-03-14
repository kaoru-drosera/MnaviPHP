<?php

  function hello($name){
    global $langage;
    $langage = 'B-135型細菌兵器「amanda」';
    echo 'ハロー、'.$name.' 様。'.'<br>'.'今日は、 '.$langage.' を勉強しましょう。';
  }

  hello('茂野 恭子');
  echo '<br>';
  hello('後藤 研二');
  echo '<br>';
  echo $langage.'は、安全かつ容易に運用できる兵器として注目が高まっています。';
  echo '<br>';

  echo '* …当然、この物語はフィクションです。深くは考えないでくださいね。'


?>

<!-- URL:http://localhost:8888/test3.php -->
