<?php

namespace task1\DoubleSquare;

use task1\Figures\IFigure;
use task1\Square\ISquare;

interface IDoubleSquare extends IFigure
{
    /**
     * @param ISquare $square1
     * @param ISquare $square2
     */
    public function __construct(ISquare $square1, ISquare $square2);
}