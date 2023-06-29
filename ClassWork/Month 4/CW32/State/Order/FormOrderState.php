<?php

namespace CW32\State\Order;

use CW32\State\StateSubjectTrait;

class FormOrderState implements IOrderState
{
    use StateSubjectTrait;

    public function send(): void
    {
        $this->subject->setState(new SendOrderState($this->subject));
        printf("Order [%s] send\n", $this->subject->getNumber());
    }

    public function cancel(): void
    {
        $this->subject->setState(new CancelOrderState($this->subject));
        printf("Order [%s] send\n", $this->subject->getNumber());
    }

    public function return(): void
    {
        printf("Order [%s] not be returned\n", $this->subject->getNumber());
    }

    public function form(): void
    {
        printf("Order [%s] in formed\n", $this->subject->getNumber());
    }
}