<?php

class SuperCar extends Car
{
  public function __construct($ps) {
    parent::__construct($ps + 500);
    // $this->ps = $ps + 500;
  }
}




