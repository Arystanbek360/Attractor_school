<?php
namespace Shop;

use Shop\Models\Order;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name) . '.php';
});


$order = new Order();

//$order->returnOrder();
//$order->deliveredOrder();
//$order->formOrder();
//$order->cancelOrder();
$order->sendOrder();

$order->returnOrder();
$order->deliveredOrder();
$order->formOrder();
$order->cancelOrder();
$order->sendOrder();
$order->returnOrder();
