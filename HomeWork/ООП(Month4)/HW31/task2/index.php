<?php

namespace task2;

use task2\Action\CrossIntersection;
use task2\Action\WaitAndCrossIntersection;
use task2\Car\Car;
use task2\TrafficLight\TrafficLight;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name . '.php');
});

$car = new Car(new CrossIntersection());
$crossroads = 1;
while ($crossroads <= 7) {
    $trafficLight = new TrafficLight();
    if ($trafficLight->state == "green") {
        $car->changeAction(new CrossIntersection());
        $car->action->CarAction();
        $crossroads++;
    } else {
        $car->changeAction(new WaitAndCrossIntersection());
        $car->action->CarAction();
    }
}
echo "Доехал до дома\n";