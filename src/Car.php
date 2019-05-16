<?php

class Car implements DriveInterface
{

  protected $ps;

  public function __construct($ps)
  {
    $this->ps = $ps;
  }

  public function drive($location)
  {
    return "Ein Auto faehrt mit {$this->ps} PS in {$location}";
  }
}
