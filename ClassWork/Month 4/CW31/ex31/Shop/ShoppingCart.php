<?php
namespace ex31\Shop;

class ShoppingCart
{
    /** @var \ex31\Shop\PayStrategies\IPayStrategy */
    private $strategy;

    public function __construct(\ex31\Shop\PayStrategies\IPayStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function changeStrategy(\ex31\Shop\PayStrategies\IPayStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function pay($amount)
    {
        $this->strategy->pay($amount);
    }
}
