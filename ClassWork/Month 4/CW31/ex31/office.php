<?php
namespace ex31;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../'.  $class_name) . '.php';
});

$printer = new \ex31\Office\Printer();
$printer->powerOn();
$printer->printDocument();
$printer->addPaper(3);
$printer->printDocument();
$printer->printDocument();
$printer->printDocument();
$printer->printDocument();
$printer->powerOff();
