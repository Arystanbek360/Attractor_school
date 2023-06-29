<?php

namespace Shop\States\Order;

use Shop\States\StateSubjectTrait;

class SendOrderState implements IOrderState
{
    use StateSubjectTrait;

    public function send(): void
    {
        printf("Order [%s] sended. Order is sended\n", $this->subject->getNumber());
    }

    public function cancel(): void
    {
        printf("Order [%s] not be canceled. Order is sended\n", $this->subject->getNumber());
    }

    public function return(): void
    {
        printf("Order [%s] not be returned. Order is sended\n", $this->subject->getNumber());
    }

    public function form(): void
    {
        printf("Order [%s] not be form. Order is sended\n", $this->subject->getNumber());
    }

    public function delivered(): void
    {
        $this->subject->setState(new DeliveredOrderState($this->subject));
        printf("Order [%s] is delivered. Order is sended\n", $this->subject->getNumber());
    }
}
