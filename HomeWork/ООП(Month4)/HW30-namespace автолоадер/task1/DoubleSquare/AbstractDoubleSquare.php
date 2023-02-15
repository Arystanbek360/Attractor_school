<?php

namespace task1\DoubleSquare;

use task1\DoubleSquare\IDoubleSquare;

abstract class AbstractDoubleSquare implements IDoubleSquare
{
    /** @var null */
    protected $area = null;

    /** @return float */
    public function getArea(): float
    {
        if ($this->area === null) {
            $this->area = $this->calculateArea();
        }
        return $this->calculateArea();
    }

    abstract protected function calculateArea();
}