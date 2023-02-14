<?php
$first = rand(1, 9);
$second = rand(1, 9);

$multiply = $first * $second;

echo "How many is {$first} * {$second} ? \n";
$result = trim(fgets(STDIN));

if ($multiply == $result) {
    echo "You are correct.";
} else {
    echo "You are wrong. Correct answer: {$first} * {$second} = " . $multiply;
}
