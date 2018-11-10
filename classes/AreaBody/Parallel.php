<?php

namespace AreaBody;

Class Parallel extends body 
{
  public $a;
  public $b;
  public $deg;
 
  public function __construct($a, $b, $deg = 45) {
      $this->a = $a;
      $this->b = $b;
      $this->deg = sin(deg2rad($deg));
  }

  public function getArea() : int {
      return $this->a * $this->b * $this->deg * 0.5;
  }
}