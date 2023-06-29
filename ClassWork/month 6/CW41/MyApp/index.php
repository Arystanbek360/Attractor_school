<?php

namespace MyApp;
$autoloader = require_once __DIR__ . "/vendor/autoload.php";
$autoloader->setPsr4('MyApp\\', __DIR__);


$page = new \FutureTime\Page();

$page->displayHeader();
$page->displayForm();
$page->displayFutureTime();

\MyApp\someClass::hello();