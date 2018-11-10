<?php 

namespace VolBody;

use \Body;
use \AreaBody\Circle;
Class Cons extends Body
{
    public $circleArea;
    public $h;

    public function __construct($r, $h) {
        $this->circleArea = round(pow($r,2) * M_PI);
        $this->h = $h;
    }

    public function getArea() : int {
        $vol = $this->circleArea * $this->h;
        echo "Ground floor S = " . $this->circleArea . " m<sup>2</sup><br> Height H = " . $this->h . " m<br> Vol V = " . round($vol) . " m<sup>3</sup>";
        return $vol;
    }
}