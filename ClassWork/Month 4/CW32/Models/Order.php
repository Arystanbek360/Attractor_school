<?php

namespace CW32\Models;

use CW32\State\IState;
use CW32\State\IStateable;

class Order implements IStateable
{
    //** @var IOrderState $state */
    private IState $state;
    private string $number;

    public function setState(IState $state)
    {
        $this->state = $state;
    }

    public function __construct()
    {
        $this->number = md5('order_1');
    }

    public function sendOrder(): void
    {
        $this->state->send();
    }

    public function cancelOrder(): void
    {
        $this->state->cancel();
    }

    public function returnOrder(): void
    {
        $this->state->return();
    }

    public function getNumber(): string
    {
        return $this->number;
    }
}