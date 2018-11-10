<?php

define("BASE_PATH", dirname(__FILE__));

spl_autoload_register(function($class) {
    $path = BASE_PATH . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR . $class . ".php";

    if(file_exists($path)) {
        require($path);
    }else {
        echo "Class " . $class . " Not Found ";
    }
});


$a = new VolBody\Balloon(15);
$a->getArea();
































