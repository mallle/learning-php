<?php

/**
 * 
 */
class Entry
{
	
	public function __isset($offset)
	{
		if ($offset == "title")
		{
			return true;
		}
	}

	public function __get($offset)
	{
		return "Hallo Welt";
	}

	public function __set($offset, $value)
	{
		var_dump("Setze  {$offset}: {$value}");
	}

}


$entry = new Entry();
$entry->title = "test124";
var_dump(isset($entry->title));

?>