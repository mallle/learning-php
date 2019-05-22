<?php 
	
function test()
{

	for ($i=0; $i <= 10; $i++) { 
		var_dump("generator " . $i);
		yield $i * 2 => $i;
	}

}

foreach(test() as $key => $value){
	var_dump("Foreach: " . $key . ": ". $value);
};



function prim()
{

	$prim = [2];

	$x = 3;
	while(true){
		$isPrim = true;
		foreach ($prim as $value) {
			if($x % $value == 0){
				$isPrim = false;
				break;
			}
		}
		if($isPrim){
			yield $x;
		}
		$prim[] = $x;
		$x = $x + 1;
	}

}

$counter = 0;
foreach(prim() as $key => $value){
	$counter = $counter +1;
	if($counter >= 100){
		break;
	}
	var_dump($value);
};

 ?>