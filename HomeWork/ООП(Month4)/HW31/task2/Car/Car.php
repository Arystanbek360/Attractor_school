<?php

namespace task2\Car;

use task2\Action\IAction;

class Car
{
    /** @var IAction $action */
    public IAction $action;

    /** @param IAction $action */
    public function __construct(IAction $action)
    {
        $this->action = $action;
    }

    /** */
    public function CarAction(): void
    {
        $this->action->CarAction();
    }

    /** @param IAction $action */
    public function changeAction(IAction $action): void
    {
        $this->action = $action;
    }
}