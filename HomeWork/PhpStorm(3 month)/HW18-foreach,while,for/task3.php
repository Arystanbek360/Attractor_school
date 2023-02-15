<?php

function enter(): int
{
    $number = trim(fgets(STDIN));
    if (!is_numeric($number)) {
        die ("You must be enter number!");
    }
    return $number;
}

function rangeResult(): void
{
    echo "Enter the range limit:\n";
    echo "From: ";
    $num1 = enter();
    echo "To: ";
    $num2 = enter();
    $sum = 0;
    if ($num1 > $num2) {
        die("You must be enter first number low than second number!");
    }
    for ($i = $num1; $i <= $num2; $i++) {
        if ($i % 2 !== 0) {
            $sum += $i;
        }
    }
    echo "Sum of odd numbers in the range: " . $sum;
}

rangeResult();

