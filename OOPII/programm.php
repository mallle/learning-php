<?php

function autoload($className)
{
	$prefeix = "App";
	$dir = "./src";

	$clss = substr($className, strlen($prefeix));
	$clss = str_replace("\\", "/", $clss);

	if(file_exists("{$dir}{$clss}.php")){
		require "{$dir}{$clss}.php";
	}
}
spl_autoload_register("autoload");


$post = new App\Blog\Post();
var_dump($post);

$post2 = new App\Forum\Post();
var_dump($post2);

/*

$h = new BlogPost();
var_dump($h);
*/

?>
