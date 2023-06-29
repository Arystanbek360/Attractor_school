<?php
namespace ex31\Shop\PayStrategies;

class PayByIPayPal implements IPayStrategy
{
    private $payPalEmail = '';

    public function pay($amount = 0)
    {
        echo "Paying " . $amount . " using PayPal";
    }
}
