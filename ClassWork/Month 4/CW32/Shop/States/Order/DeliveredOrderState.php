<?php

namespace Shop\States\Order;

use Shop\States\StateSubjectTrait;

class DeliveredOrderState implements IOrderState
{
    use StateSubjectTrait;
    public function send(): void
    {
        printf("Order [%s] not be send. Order is delivered\n", $this->subject->getNumber());
    }

    public function cancel(): void
    {
        printf("Order [%s] not be canceled. Order is delivered\n", $this->subject->getNumber());
    }

    public function return(): void
    {
        $this->subject->setState(new ReturnOrderState($this->subject));
        printf("Order [%s] is returned. Order is delivered\n", $this->subject->getNumber());
    }

    public function form(): void
    {
        printf("Order [%s] not be formed. Order is delivered\n", $this->subject->getNumber());
    }

    public function delivered(): void
    {
        printf("Order [%s] not be delivered. Order is delivered\n", $this->subject->getNumber());
    }
}
