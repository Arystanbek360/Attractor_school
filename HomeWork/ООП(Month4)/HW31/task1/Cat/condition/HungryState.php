<?php

namespace task1\Cat\condition;

use task1\Cat\Cat;

class HungryState implements IConditions
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
        echo "Не боюсь!\nХочу есть!";
    }

    /** */
    public function writingFood(): void
    {
        echo "Чавк клац,\nЗубен зе дойч!";
        $this->cat->setConditions($this->cat->sleepingState);
    }

    /** */
    public function giveARest(): void
    {
        echo "Я есть хочу!";
    }

    /** */
    public function playALittle(): void
    {
        echo "Ты меня и так вымотал";
    }

    /** */
    public function call(): void
    {
        echo "Есть дашь?";
    }
}