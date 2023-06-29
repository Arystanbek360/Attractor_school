<?php
namespace ex31\Shop;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../'.  $class_name) . '.php';
});

$amount = 600; // к оплате;

if ($amount >= 500) {
    $payment = new \ex31\Shop\ShoppingCart(new \ex31\Shop\PayStrategies\PayByCC());
} else {
    $payment = new \ex31\Shop\ShoppingCart(new \ex31\Shop\PayStrategies\PayByIPayPal());
}

$payment->pay($amount);
