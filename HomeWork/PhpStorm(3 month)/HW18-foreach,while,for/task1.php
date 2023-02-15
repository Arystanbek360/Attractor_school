<?php

function enter(): int
{
    echo "Enter your number: ";
    $number = trim(fgets(STDIN));
    if (!is_numeric($number) || !ctype_digit(strval($number))) {
        die ("You must be enter number!");
    } elseif ($number <= 1 || $number >= 9) {
        die ("You must be enter number (1-9)!");
    }
    return $number;
}

function multiplication(): void
{
    $number = enter();
    for ($i = 1; $i < 10; $i++) {
        $result = $number * $i;
        echo $number . " * " . $i . " = " . $result . "\n";
    }
}

multiplication();
