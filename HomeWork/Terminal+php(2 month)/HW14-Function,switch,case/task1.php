<?php

function longer($a, $b)
{
    $c = strlen($a);
    $d = strlen($b);
    $result = $c - $d;
    return $result;
}

function compare($a, $b, $result): string
{
    return "{$a} string is longer than {$b} by {$result} characters.";
}

function text($a, $b): string
{
    $result = longer($a, $b);
    if ($result == 0) {
        return ("Your strings are equal in length!");
    } elseif ($result > 0) {
        return (compare('first', 'second', $result));
    } else {
        $result = abs($result);
        return (compare('second', 'first', $result));
    }
}

echo "Enter first string:\n";
$first = trim(fgets(STDIN));
echo "Enter second string:\n";
$second = trim(fgets(STDIN));

echo text($first, $second);
