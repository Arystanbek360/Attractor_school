<?php
namespace ex31;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../'.  $class_name) . '.php';
});

$king = \ex31\Common\King::getInstance();
$king->issueADecree("His name command to obey me!");