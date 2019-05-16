<?php

/**
 * 
 */
class Entry
{

	public $title = "Ich bin der title";
	
	function testMethode()
	{
		var_dump("Testmethode() wurde aufgerufen");
	}
	
}

$entry = new Entry();

$name = "title";
$methode = "testMethode";

var_dump($entry->{$name});

$entry->{$methode}();