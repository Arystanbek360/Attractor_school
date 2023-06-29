<?php

namespace Shop\States\Order;

use Shop\States\StateSubjectTrait;

class FormOrderState implements IOrderState
{
    use StateSubjectTrait;

    public function send(): void
    {
        $this->subject->setState(new SendOrderState($this->subject));
        printf("Order [%s] send. Order is formed\n", $this->subject->getNumber());
    }

    public function cancel(): void
    {
        $this->subject->setState(new CancelOrderState($this->subject));
        printf("Order [%s] canceled. Order is formed\n", $this->subject->getNumber());
    }

    public function return(): void
    {
        printf("Order [%s] not be returned. Order is formed\n", $this->subject->getNumber());
    }

    public function form(): void
    {
        printf("Order [%s] in formed. Order is formed\n", $this->subject->getNumber());
    }

    public function delivered(): void
    {
        printf("Order [%s] not be delivered\n. Order is formed", $this->subject->getNumber());
    }
}
