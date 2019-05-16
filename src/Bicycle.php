<?php

class Bicycle implements DriveInterface
{

  public function drive($location) {
    return "Ein Fahrrad faehrt in {$location}";
  }

}

 ?>
