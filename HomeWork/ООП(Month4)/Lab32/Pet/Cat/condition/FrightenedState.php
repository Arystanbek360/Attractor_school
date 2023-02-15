<?php

namespace Pet\Cat\condition;

use Pet\Cat\Cat;

class FrightenedState implements IConditions
{
    public const NAME = "Испуганный";

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
        return "Ааааа! Паника!!!";
    }

    /** */
    public function writingFood(): string
    {
        return "Убери огурец!";
    }

    /** */
    public function giveARest(): string
    {
        $this->cat->setConditions($this->cat->hungryState);
        return "Фууууух...";
    }

    /** */
    public function playALittle(): string
    {
        return "Ты с огурцом\nиграть собрался?";
    }

    /** */
    public function call(): string
    {
        return "Огуреееец! Мяв!";
    }
}