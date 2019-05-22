<?php 

class Test {
	public $name = "welt"; 
}
	
	$a = ["Schlüssel" => "Hallo Welt"];

	$b = "Hallo Welt";

	// var_dump($a);

	// echo serialize($b);

	// echo serialize($a);

	// $t = new Test();

	// echo serialize($t);

	$str = 's:10:"Hallo Welt";a:1:{s:10:"Schlüssel";s:10:"Hallo Welt";}O:4:"Test":1:{s:4:"name";s:4:"welt";}';

	var_dump(unserialize(($str)));

 ?>