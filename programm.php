<?php
//require "src/Car.php"
//require "src/SuperCar.php"

//require durch autoload eine Klasse
function autoload($className)
{
  if (file_exists("./src/{$className}.php")) {
    require "./src/{$className}.php";
  }
}
//
spl_autoload_register("autoload");


function drive(DriveInterface $obj)
{
  return $obj->drive("Berlin");
}

$wv = new Bicycle();
var_dump(drive($wv));


?>
