<?php

echo "Введи цифру:\n";
$first = trim(fgets(STDIN));

if (!is_numeric($first)) {
    die("Нужно ввести целое число");
}

function odd($a): bool
{
    if ($a % 2 == 0) {
        return true;
    } elseif ($a % 2 !== 0) {
        return false;
    }
}

$b = odd($first);
var_dump($b);
