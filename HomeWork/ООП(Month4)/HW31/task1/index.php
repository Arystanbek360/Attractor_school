<?php

namespace task1;

use task1\Cat\Cat;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name) . '.php';
});

$cat = new Cat();
while (true) {
    echo "1-call||2-show cucumber||3-writing Food||4-give a Rest||5-Play a Little\nChoose the action: ";
    $action = trim(fgets(STDIN));
    switch ($action) {
        case "1":
            $cat->call();
            echo "\n\n";
            break;
        case "2":
            $cat->showCucumber();
            echo "\n\n";
            break;
        case "3":
            $cat->writingFood();
            echo "\n\n";
            break;
        case "4":
            $cat->giveARest();
            echo "\n\n";
            break;
        case "5":
            $cat->playALittle();
            echo "\n\n";
            break;
        default:
            die("Not a found this action\n");
    }
}
