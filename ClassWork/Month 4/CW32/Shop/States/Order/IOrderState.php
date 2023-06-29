<?php

namespace Shop\States\Order;

use Shop\States\IState;
use Shop\States\IStateable;

interface IOrderState extends IState
{
    public function send(): void;
    public function cancel(): void;
    public function return(): void;
    public function form(): void;
    public function delivered(): void;
}
