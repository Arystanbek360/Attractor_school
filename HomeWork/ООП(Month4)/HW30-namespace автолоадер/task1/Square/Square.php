<?php

namespace task1\Square;

use task1\Square\ISquare;

class Square implements ISquare
{
    /** @var float $side*/
    protected float $side;

    /** @return float */
    public function getArea(): float
    {
        return pow($this->side, 2);
    }

    /** @return float */
    public function getSide(): float
    {
        return $this->side;
    }

    /** @param float $side */
    public function __construct(float $side)
    {
        $this->side = $side;
    }
}