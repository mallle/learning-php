<?php

class myException extends Exception
{

}

/**
* MyException ist eine MyException
* MyExceptoon ist eine Exception
* Exception ist eine Exception
* Exception ist KEINE MyException
*/
function inverse($a){

	if( $a == 0){
		throw new Exception('Nachricht');

	}else {
		return -$a;
	
	}

}

var_dump("davor");

try{
var_dump(inverse(0));
} catch (MyException $e){
	var_dump("es ist ein MyException aufgetreten");
} catch (Exception $e){
	var_dump("es ist ein Exception aufgetreten");
}

var_dump("danach");

?>
