<?php

namespace Pet\Cat\condition;

use Pet\Cat\Cat;

class PlayfulState implements IConditions
{
    public const NAME = "Игривый";

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
        $this->cat->setConditions($this->cat->frightenedState);
        return "Мя! Боюсююсь!!!!";
    }

    /** */
    public function writingFood(): string
    {
        return "Не хочу есть\nЯ хочу играть.";
    }

    /** */
    public function giveARest(): string
    {
        return "Давай играться,\nЛенивый хозяйн!";
    }

    /** */
    public function playALittle(): string
    {
        $this->cat->setConditions($this->cat->hungryState);
        return "Бах-бах-бах!\nЗвук разбитой посуды.";
    }

    /** */
    public function call(): string
    {
        return "Играться?";
    }
}