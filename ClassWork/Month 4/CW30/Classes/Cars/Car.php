<?php

namespace classes\Cars;

use classes\Wheels\wheel;
use classes\Exceptions\TooManyWheels;
use classes\Exceptions\NotEnoughWheels;

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
