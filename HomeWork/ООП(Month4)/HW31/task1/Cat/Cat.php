<?php

namespace task1\Cat;

use task1\Cat\condition\FrightenedState;
use task1\Cat\condition\HungryState;
use task1\Cat\condition\IConditions;
use task1\Cat\condition\PlayfulState;
use task1\Cat\condition\SleepingState;

class Cat
{
    /** @var IConditions|PlayfulState $conditions */
    public IConditions $conditions;

    /** @var FrightenedState $frightenedState */
    public FrightenedState $frightenedState;
    /** @var HungryState $hungryState */
    public HungryState $hungryState;
    /** @var PlayfulState $playfulState */
    public PlayfulState $playfulState;
    /** @var SleepingState $sleepingState */
    public SleepingState $sleepingState;

    /** */
    public function __construct()
    {
        $this->frightenedState = new FrightenedState($this);
        $this->hungryState = new HungryState($this);
        $this->playfulState = new PlayfulState($this);
        $this->sleepingState = new SleepingState($this);
        $this->conditions = $this->playfulState;
    }

    /** @param IConditions $conditions */
    public function setConditions(IConditions $conditions): void
    {
        $this->conditions = $conditions;
    }

    /** */
    public function showCucumber(): void
    {
        $this->conditions->showCucumber();
    }

    /** */
    public function writingFood(): void
    {
        $this->conditions->writingFood();
    }

    /** */
    public function giveARest(): void
    {
        $this->conditions->giveARest();
    }

    /** */
    public function playALittle(): void
    {
        $this->conditions->playALittle();
    }

    /** */
    public function call(): void
    {
        $this->conditions->call();
    }
}
