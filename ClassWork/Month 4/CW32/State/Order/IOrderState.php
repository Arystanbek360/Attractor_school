<?php

namespace CW32\State\Order;

use CW32\State\IState;

interface IOrderState extends IState
{
    public function send(): void;

    public function cancel(): void;

    public function return(): void;

    public function form(): void;
}