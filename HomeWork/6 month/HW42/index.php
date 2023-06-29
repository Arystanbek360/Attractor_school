<?php

namespace Hw42;

$autoloader = require_once "vendor/autoload.php";
$autoloader->setPsr4('Hw42\\', __DIR__);

$core = new \PhoneBook\Core(new Storage("data.json"));
if (!empty($_REQUEST)) {
    $core->proceedFormData();
}
$core->display(new View());