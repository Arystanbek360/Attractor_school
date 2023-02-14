<?php
echo "Первое число:\n";
$first = trim(fgets(STDIN));
echo "Второе число:\n";
$second = trim(fgets(STDIN));

if (!is_numeric($first) || !is_numeric($second)) {
    die("Введенные данные должны быть цифрами!\n");
}

if ($first > $second) {
    $result = ">";
} elseif ($first < $second) {
    $result = "<";
} else {
    $result = "=";
}

echo "Result: " . $first . $result . $second;
