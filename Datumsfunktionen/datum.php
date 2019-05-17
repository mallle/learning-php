<?php 

$geburtstag = "01.01.1900";

$arr = explode(".", $geburtstag);

$time = mktime(12,0,0, $arr[1], $arr[0], $arr[2]);



$diff = time() - $time;

var_dump($diff / (60*60*24*365));


$seconds = $diff % (60*60*24*365);

$tage = $seconds / (60*60*24);
var_dump($tage);


setlocale(LC_TIME, "de_DE", "de_DE.uft-8", "deu", "german");

echo strftime("%A, %d. %B %X", time());

 ?>
