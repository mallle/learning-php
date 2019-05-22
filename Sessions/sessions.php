<?php 

	session_start();

	var_dump(session_save_path());

	session_regenerate_id(true);

	print_r($_COOKIE);

	//$_SESSION['name'] = "max";
	print_r($_SESSION);


 ?>