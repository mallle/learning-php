<?php

/**
 * 
 */
class Entry
{
	
	function __invoke(){

		var_dump("test");
	}
	

}

function test($fn)
{
	$fn();
}

$entry = new Entry();
$entry();

test($entry);

?>