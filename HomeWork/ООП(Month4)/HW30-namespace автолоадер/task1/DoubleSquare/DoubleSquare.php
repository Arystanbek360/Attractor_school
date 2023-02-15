<?php

namespace task1\DoubleSquare;

use task1\DoubleSquare\AbstractDoubleSquare;
use task1\Square\ISquare;

class DoubleSquare extends AbstractDoubleSquare
{
    /** @var ISquare $square1 */
    protected ISquare $square1;
    /** @var ISquare $square2 */
    protected ISquare $square2;

    /**
     * @return float
     */
    protected function calculateArea()
    {
        return ($this->square1->getArea() + $this->square2->getArea());
    }

    /**
     * @param ISquare $square1
     * @param ISquare $square2
     */
    public function __construct(ISquare $square1, ISquare $square2)
    {
        $this->square1 = $square1;
        $this->square2 = $square2;
    }
}

