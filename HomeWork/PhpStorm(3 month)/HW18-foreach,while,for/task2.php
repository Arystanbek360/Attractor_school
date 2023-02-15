<?php

function enter($position): int
{
    echo "Number " . $position . ": ";
    $number = trim(fgets(STDIN));
    if (!is_numeric($number)) {
        die ("You must be enter number!");
    }
    return $number;
}

function cycle(): void
{
    echo "Begin to enter numbers. Entering interrupted when you enter the number 0.\n\n";
    $i = 0;
    $number = 2;
    $sum = 0;
    while (!$number == 0) {
        $number = enter(++$i);
        $sum += $number;
    }
    if (!$sum == 0) {
        $entered = $i - 1;
        $averege = $sum / $entered;
    } else {
        $entered = 0;
        $averege = 0;
    }
    echo "\nIt was entered numbers: " . $entered;
    echo "\nSum of entered numbers: " . $sum;
    echo "\nAverage of the entered numbers: " . $averege;
}

cycle();