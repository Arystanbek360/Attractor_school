<?php

namespace task3;

use task3\Reader\Reader;
use task3\Registry\ReaderRegistry;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name . '.php');
});

$reader1 = new Reader("Деревянный Лес", "a1b2c3");
$reader2 = new Reader("Петя Крутой", "d4e5f6");
$reader3 = new Reader("Миша Глухой", "g7h8i9");
$reader4 = new Reader("Мокрая Вода", "j0k1l2");

ReaderRegistry::register($reader1);
ReaderRegistry::register($reader2);
ReaderRegistry::register($reader3);
ReaderRegistry::register($reader4);

$readers = ReaderRegistry::getReaders();
var_export($readers);