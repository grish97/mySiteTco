<?php 

namespace VolBody;

use \Body;

Class Balloon
{
    public $r;

    public function __construct($r) {
        $this->r = $r;
    }

    public function getArea() {
        $vol = 4/3 * M_PI * pow($this->r,3);
        echo "Radius Ballon R = " . $this->r . " m <br>Balloon Vol V = " . round($vol) . " m<sup>3</sup>";
        return $vol;
    }
}