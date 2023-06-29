<?php

class TooManyWheels extends \Exception
{
}

class NotEnoughWheels extends \Exception
{
}

class  Wheel
{
}

class Car
{
    private array $wheels = [];

    public function appendWheel(Wheel $wheel): void
    {
        if (count($this->wheels) === 4) {
            throw new TooManyWheels("Too many wheels");
        }

        $this->wheels[] = $wheel;
    }

    public function go(): void
    {
        if (count($this->wheels) < 4) {
            throw new NotEnoughWheels('Not enough wheels');
        }

        echo "Roll away from here\n";
    }
}

try {
    $car = new Car();
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

//$car = new Car();
//$car->appendWheel(new Wheel());
//$car->appendWheel(new Wheel());
//$car->appendWheel(new Wheel());
//$car->go();
