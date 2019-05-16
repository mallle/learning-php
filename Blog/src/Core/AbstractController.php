<?php 

namespace App\Core;

abstract class AbstractController
{

	protected function render($view, $params)
	{

		// foreach ($params as $key => $value) {
		// 	${$key} = $value;
		// }
		// extract funktion macht das gleiche wie der foreach!
		extract($params);

		include __DIR__ . "/../../views/{$view}.php";

	}
}

?>