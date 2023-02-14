<?php
echo "Первое число:\n";
$first = trim(fgets(STDIN));
echo "Второе число:\n";
$second = trim(fgets(STDIN));

if (!is_numeric($first) || !is_numeric($second)) {
    die("Введенные данные должны быть цифрами!\n");
}

if ($first > $second) {
    $n = $first;
    $m = $second;
} elseif ($first < $second) {
    $n = $second;
    $m = $first;
} else {
    die("Введите разные цифры!");
}
$l = ($n + $m) / 2;

$relationship = [
    "max" => $n,
    "min" => $m,
    "median" => $l
];

var_export($relationship);
