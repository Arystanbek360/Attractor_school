<?php

namespace Pet\Cat\condition;

use Pet\Cat\Cat;

class HungryState implements IConditions
{
    public const NAME = "Голодный";
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
        return "Не боюсь!\nХочу есть!";
    }

    /** */
    public function writingFood(): string
    {
        $this->cat->weight += 10;
        $this->cat->setConditions($this->cat->sleepingState);
        return "Чавк клац,\nЗубен зе дойч!";
    }

    /** */
    public function giveARest(): string
    {
        return "Я есть хочу!";
    }

    /** */
    public function playALittle(): string
    {
        return "Ты меня и так вымотал";
    }

    /** */
    public function call(): string
    {
        return "Есть дашь?";
    }
}