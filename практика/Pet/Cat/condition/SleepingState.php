<?php

namespace Pet\Cat\condition;

use Pet\Cat\Cat;

class SleepingState implements IConditions
{
    public const NAME = "Сонный";
    /** @var Cat $cat */
    public Cat $cat;

    /** @param Cat $cat */
    public function __construct(Cat $cat)
    {
        $this->cat = $cat;
    }

    /** */
    public function showCucumber(): string
    {
        return "Храп...";
    }

    /** */
    public function writingFood(): string
    {
        return "Храп...";
    }

    /** */
    public function giveARest(): string
    {
        return "Храп...";
    }

    /** */
    public function playALittle(): string
    {
        return "Храп...";
    }

    /** */
    public function call(): string
    {
        $this->cat->setConditions($this->cat->playfulState);
        return "Мууур...Хочу играться!";
    }
}