<?php

namespace CW32\Models;

use CW32\Models\Order;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name . '.php');
});

class Shop
{

}

$order = new Order();
$order->returnOrder();