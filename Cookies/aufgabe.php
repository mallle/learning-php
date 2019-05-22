<?php



if(!isset($_COOKIE['count3'])) {
	setcookie("count3", 1, time()+60);
	echo "Das ist dein erster besuch";
}else {
	$count = $_COOKIE['count3']+1;
	setcookie("count3", $count);
	echo "Das ist dein {$count}. besuch";
}






 ?>