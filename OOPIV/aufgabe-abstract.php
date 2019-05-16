<?php

abstract class AbstractExercise
{
	abstract public function printHallo();

}

class ExtendedTest extends AbstractExercise
{
	public function printHallo(){
		var_dump('test');
	}

}

$test = new ExtendedTest();
$test->printHallo();
