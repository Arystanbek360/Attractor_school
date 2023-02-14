<?php
echo "Enter the positive dividend:\n";
$first = trim(fgets(STDIN));
echo "Enter positive divider:\n";
$second = trim(fgets(STDIN));

if (!is_numeric($first)) {
    die("Error: Dividend must be number\n");
} elseif (!is_numeric($second)) {
    die("Error: Divider must be number\n");
}

if ($first < 0) {
    echo "Error: Dividend must be positive number\n";
}
if ($second < 0) {
    echo "Error: Divider must be positive number\n";
}
if ($second == 0) {
    die("Error: Division by zero is not allowed\n");
}

$result = $first / $second;

if ($first >= 0 && $second > 0) {
    echo "Result:{$result}";
}
