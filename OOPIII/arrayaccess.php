<?php

/**
 * 
 */
class Entry implements ArrayAccess
{
	
	public $title = "test";

	public function offsetExists($offset)
	{
		var_dump("offsetExsists: {$offset}");
	}

	public function offsetGet($offset)
	{

	}

	public function offsetSet($offset, $value)
	{

	}

	public function offsetUnset($offset)
	{

	}

}

$entry = new Entry();
var_dump(isset($entry['title']));
// var_dump($entry->title);
// var_dump($entry['title']);

?>