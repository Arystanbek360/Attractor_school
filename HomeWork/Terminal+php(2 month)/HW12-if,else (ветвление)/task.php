<?php
echo "Enter first number:\n";
$first = trim(fgets(STDIN));
echo "Enter second number:\n";
$second = trim(fgets(STDIN));

if (!is_numeric($first)) {
    die("First number must be number");
} elseif (!is_numeric($second)) {
    die("Second number must be number");
}

echo "Your random number is " . rand($first, $second);
