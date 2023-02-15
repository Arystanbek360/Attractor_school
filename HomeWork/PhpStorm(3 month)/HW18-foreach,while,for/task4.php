<?php

function enter(): int
{
    echo "Specify the height of the triangle: ";
    $number = trim(fgets(STDIN));
    echo "\n";
    if (!is_numeric($number)) {
        die ("You must be enter number!");
    }
    return $number;
}

function printTreangles(string $symbol): void
{
    $height = enter();
    for ($i = 0; $i < $height; $i++) {
        echo str_repeat(" ", $height - $i);
        echo str_repeat($symbol, $i + 1);
        echo str_repeat($symbol, $i);
        echo "\n";
    }
}

function symbol(): string
{
    echo "What type of symbol do you want to see: ";
    $symbol = trim(fgets(STDIN));
    if (strlen($symbol) > 1 || strlen($symbol) < 1) {
        die("You must be enter 1 symbol");
    }
    return $symbol;
}

printTreangles(symbol());