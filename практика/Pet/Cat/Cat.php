<?php

namespace Pet\Cat;

use Pet\Cat\condition\FrightenedState;
use Pet\Cat\condition\HungryState;
use Pet\Cat\condition\IConditions;
use Pet\Cat\condition\PlayfulState;
use Pet\Cat\condition\SleepingState;

class Cat
{
    /** @var IConditions|PlayfulState $conditions */
    public IConditions $conditions;
    /** @var int $weight */
    public int $weight;

    /** @var FrightenedState $frightenedState */
    public FrightenedState $frightenedState;
    /** @var HungryState $hungryState */
    public HungryState $hungryState;
    /** @var PlayfulState $playfulState */
    public PlayfulState $playfulState;
    /** @var SleepingState $sleepingState */
    public SleepingState $sleepingState;

    /** */
    public function __construct(int $weight = 300)
    {
        $this->weight = $weight;
        $this->frightenedState = new FrightenedState($this);
        $this->hungryState = new HungryState($this);
        $this->playfulState = new PlayfulState($this);
        $this->sleepingState = new SleepingState($this);
        $this->conditions = new PlayfulState($this);
    }

    /** @param IConditions $conditions */
    public function setConditions(IConditions $conditions): void
    {
        $this->conditions = $conditions;
    }

    /** */
    public function showCucumber(): string
    {
        return $this->conditions->showCucumber();
    }

    /** */
    public function writingFood(): string
    {
        return $this->conditions->writingFood();
    }

    /** */
    public function giveARest(): string
    {
        return $this->conditions->giveARest();
    }

    /** */
    public function playALittle(): string
    {
        return $this->conditions->playALittle();
    }

    /** */
    public function call(): string
    {
        return $this->conditions->call();
    }
}
