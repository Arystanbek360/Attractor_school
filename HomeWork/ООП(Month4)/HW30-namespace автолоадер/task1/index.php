<?php

namespace task1;

use task1\Square\Square;
use task1\DoubleSquare\DoubleSquare;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name . '.php');
});

$square1 = new Square(10);
$square2 = new Square(12);
$double_square = new DoubleSquare($square1, $square2);
print "Площадь: " . $double_square->getArea();