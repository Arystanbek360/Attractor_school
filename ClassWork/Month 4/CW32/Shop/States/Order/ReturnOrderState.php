<?php

namespace Shop\States\Order;

use Shop\States\StateSubjectTrait;

class ReturnOrderState implements IOrderState
{
    use StateSubjectTrait;
    public function send(): void
    {
        printf("Order [%s] not be send. Order is returned\n", $this->subject->getNumber());
    }

    public function cancel(): void
    {
        printf("Order [%s] not be canceled. Order is returned\n", $this->subject->getNumber());
    }

    public function return(): void
    {
        printf("Order [%s] not be returned. Order is returned\n", $this->subject->getNumber());
    }

    public function form(): void
    {
        printf("Order [%s] no be formed. Order is returned\n", $this->subject->getNumber());
    }

    public function delivered(): void
    {
        printf("Order [%s] not be delivered. Order is returned\n", $this->subject->getNumber());
    }
}
