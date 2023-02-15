<?php

namespace task2;

use task2\Action\Action;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name . '.php');
});

$sodaMachine1 = new Action(1);
$sodaMachine2 = new Action(2);
$sodaMachine3 = new Action(3);