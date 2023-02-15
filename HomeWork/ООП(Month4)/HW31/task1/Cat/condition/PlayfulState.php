<?php

namespace task1\Cat\condition;

use task1\Cat\Cat;

class PlayfulState implements IConditions
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
        echo "Мя! Боюсююсь!!!!";
        $this->cat->setConditions($this->cat->frightenedState);
    }

    /** */
    public function writingFood(): void
    {
        echo "Не хочу есть\nЯ хочу играть.";
    }

    /** */
    public function giveARest(): void
    {
        echo "Давай играться,\nЛенивый хозяйн!";
    }

    /** */
    public function playALittle(): void
    {
        echo "Бах-бах-бах!\nЗвук разбитой посуды.";
        $this->cat->setConditions($this->cat->hungryState);
    }

    /** */
    public function call(): void
    {
        echo "Играться?";
    }
}