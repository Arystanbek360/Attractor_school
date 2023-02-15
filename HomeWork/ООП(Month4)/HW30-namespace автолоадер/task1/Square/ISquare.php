<?php

namespace task1\Square;

use task1\Figures\IFigure;

interface ISquare extends IFigure
{
    /** @param float $side */
    public function __construct(float $side);

    /** @return float */
    public function getSide(): float;
}