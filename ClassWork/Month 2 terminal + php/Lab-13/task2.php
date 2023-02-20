<?php
echo "Первый сотрудник:\n";
$first = trim(fgets(STDIN));
echo "Второй сотрудник:\n";
$second = trim(fgets(STDIN));
echo "Третий сотрудник:\n";
$third = trim(fgets(STDIN));

if (!is_numeric($first) || !is_numeric($second) || !is_numeric($third)) {
    die("Введенные данные должны быть цифрами!\n");
}

$arr = [$first, $second, $third];

$max = max($arr);
$min = min($arr);

$result = $max - $min;

echo "Разница между зарплатами: " . $result;
