<?php

namespace task1\Cat\condition;

use task1\Cat\Cat;

class FrightenedState implements IConditions
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
        echo "Ааааа! Паника!!!";
    }

    /** */
    public function writingFood(): void
    {
        echo "Убери огурец!";
    }

    /** */
    public function giveARest(): void
    {
        echo "Фууууух...";
        $this->cat->setConditions($this->cat->hungryState);
    }

    /** */
    public function playALittle(): void
    {
        echo "Ты с огурцом\nиграть собрался?";
    }

    /** */
    public function call(): void
    {
        echo "Огуреееец! Мяв!";
    }
}