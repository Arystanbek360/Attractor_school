<?php
namespace ex31\Shop\PayStrategies;

class PayByCC implements \ex31\Shop\PayStrategies\IPayStrategy
{
    private $ccNum = '';
    private $ccType = '';
    private $cvvNum = '';
    private $ccExpMonth = '';
    private $ccExpYear = '';

    public function pay($amount = 0)
    {
        echo "Paying " . $amount . " using Credit Card";
    }

}