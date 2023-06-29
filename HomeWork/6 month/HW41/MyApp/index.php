<?php

namespace MyApp;

use MyApp\classes\MainPage;
use MyApp\classes\WelcomePage;

$autoloader = require_once __DIR__ . "/vendor/autoload.php";
$autoloader->setPsr4('MyApp\\', __DIR__);

$page = new MainPage();
$page->printHtml();