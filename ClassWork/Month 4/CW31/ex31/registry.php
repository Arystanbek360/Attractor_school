<?php
namespace ex31;

use ex31\Common\Registry;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../'.  $class_name) . '.php';
});

Registry::set("some_key", "data");
print Registry::get("some_key"); // выведет на экран "data"
