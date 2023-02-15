<?php

namespace task1\Cat\condition;

use task1\Cat\Cat;

class SleepingState implements IConditions
{
    /** @var Cat $cat */
    public Cat $cat;

    /** @param Cat $cat */
    public function __construct(Cat $cat)
    {
        $this->cat = $cat;
    }

    /** */
    public function showCucumber(): void
    {
        echo "Храп...";
    }

    /** */
    public function writingFood(): void
    {
        echo "Храп...";
    }

    /** */
    public function giveARest(): void
    {
        echo "Храп...";
    }

    /** */
    public function playALittle(): void
    {
        echo "Храп...";
    }

    /** */
    public function call(): void
    {
        echo "Мууур...Хочу играться!";
        $this->cat->setConditions($this->cat->playfulState);
    }
}