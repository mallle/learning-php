<?php

class Entry 
{

	public $title;

	public function __construct($title)
	{
		$this->title = $title;
	}

}

$a = [
	14 => new Entry("obst"),
	44 => new Entry("Kaese"),
	11 => new Entry("Milch"),
	43 => new Entry("tee")
];

//sort($a);
//asort($a);
//arsort($a);

//krsort($a);


//Gut wenn man objekte sortieren möchte
usort($a, function($a, $b){
	
	return strcmp($a->title, $b->title);

});

var_dump($a);


?>