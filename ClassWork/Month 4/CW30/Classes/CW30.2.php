<?php

namespace classes;

use classes\Cars\Car;
use classes\Wheels\Wheel;
use classes\Exceptions\NotEnoughWheels;
use classes\Exceptions\TooManyWheels;

//====================То что не нужно подключать=========================
//require_once 'Cars\Car.php';
//require_once 'Wheels\Wheel.php';
//require_once 'Exceptions\TooManyWheels.php';
//require_once 'Exceptions\NotEnoughWheels.php';
//====================================================================

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name . '.php');
});

$car = new Car();
try {
    $car->appendWheel(new Wheel());
    $car->appendWheel(new Wheel());
    $car->appendWheel(new Wheel());
    $car->appendWheel(new Wheel());
    $car->go();
} catch (\Throwable $e) {

    //====================Error=========================
//    var_dump(['message' => $e->getMessage(),
//        'code' => $e->getCode(),
//        'file' => $e->getFile(),
//        'line' => $e->getLine(),
//        'trace' => $e->getTrace(),
//        'traceAsString' => $e->getTraceAsString(),
//        'previous' => $e->getPrevious(),
//        '__toString' => $e->__toString()
//    ]);
    //================================================

    if ($e instanceof NotEnoughWheels) {
        $car->appendWheel(new Wheel());
    }
    if ($e instanceof TooManyWheels) {
        echo "kek";
    }
    $car->go();
}
