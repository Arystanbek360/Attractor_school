<?php

namespace Shop\States\Order;

use Shop\States\StateSubjectTrait;

class CancelOrderState implements IOrderState
{
    use StateSubjectTrait;

    public function send(): void
    {
        printf("Order [%s] not be send. Order is canceled\n", $this->subject->getNumber());
    }

    public function cancel(): void
    {
        printf("Order [%s] not be canceled. Order is canceled\n", $this->subject->getNumber());
    }

    public function return(): void
    {
        printf("Order [%s] not be return. Order is canceled\n", $this->subject->getNumber());
    }

    public function form(): void
    {
        printf("Order [%s] not be formed. Order is canceled\n", $this->subject->getNumber());
    }

    public function delivered(): void
    {
        printf("Order [%s] not be delivered. Order is canceled\n", $this->subject->getNumber());
    }
}
