<?php

namespace AreaBody;
use \Body;



Class Circle extends Body 
{
    public $r;

    public function __construct($r) {
        $this->r = pow($r,2);
    }

    public function getArea()  {
        $area = $this->r * M_PI; 
        echo "R = " . sqrt($this->r) . "<br>" . "S = " . $area . " m<sup>2</sup>";
        return $area;
    }
}
