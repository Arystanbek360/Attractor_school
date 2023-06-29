<?php

namespace CW32\State\Order;

use CW32\State\StateSubjectTrait;

class SendOrderState implements IOrderState
{
    use StateSubjectTrait;

    public function send(): void
    {
        // TODO: Implement send() method.
    }

    public function cancel(): void
    {
        // TODO: Implement cancel() method.
    }

    public function return(): void
    {
        // TODO: Implement return() method.
    }

    public function form(): void
    {
        // TODO: Implement form() method.
    }
}