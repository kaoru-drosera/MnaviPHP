<?php
ini_set("display_errors",1);
error_reporting(E_ALL & ~E_NOTICE);

 ?>
<?php
// require_once("helloSinX3.5_Staff.php");
 ?>

<?php
  interface GameBook{
    function newGame($point);
    // newGameには引数が1つ
    function play();
    function isAlive():bool;
    // isAliveは戻り値がbool(真偽値)である必要がある
  }
 ?>
