<?php
namespace ex31\Shop\PayStrategies;

interface IPayStrategy
{
    public function pay($amount);
}
