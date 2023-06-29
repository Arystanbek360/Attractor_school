<?php

namespace Shop\Models;

use Shop\States\IState;
use Shop\States\IStateable;
use Shop\States\Order\FormOrderState;
use Shop\States\Order\IOrderState;

class Order implements IStateable
{
    /** @var IOrderState $state  */
    private IState $state;

    /** @var string $number */
    private string $number;

    public function __construct()
    {
        $this->number = md5('order_1');
        $this->state = new FormOrderState($this);
    }

    /**
     * @param IState $state
     * @return void
     */
    public function setState(IState $state): void
    {
        $this->state = $state;
    }

    public function sendOrder(): void
    {
        $this->state->send();
    }

    public function formOrder(): void
    {
        $this->state->form();
    }

    public function cancelOrder(): void
    {
        $this->state->cancel();
    }

    public function returnOrder(): void
    {
        $this->state->return();
    }

    public function deliveredOrder(): void
    {
        $this->state->delivered();
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
}
