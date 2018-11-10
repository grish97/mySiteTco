<?php

namespace VolBody;
use \Body;

Class Elipsoid extends Body
{
	public $a;
	public $b;
	public $c;

	public function __construct($a, $b, $c) {
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	public function getArea() : int {
		$vol = 4/3 * M_PI * $this->a * $this->b * $this->c;
		echo "Elipsoid Vol V = " . round($vol) . " m<sup>3</sup>";
		return $vol; 
	}
}