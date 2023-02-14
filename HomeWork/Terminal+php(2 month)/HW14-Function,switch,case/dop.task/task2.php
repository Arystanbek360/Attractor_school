<?php
function random_number(int $min, int $max): int
{
    if ($min <= 0) {
        die("error:Минимальное значение - 0");
    }
    if ($max >= 1000) {
        die("error:Максимальное значение - 1000");
    } elseif ($max < $min) {
        die("error:Минимальное значение не должно привышать максимальное значение");
    }
    return mt_rand($min, $max);
}

echo "Введи минимальную цифру:\n";
$min = trim(fgets(STDIN));
echo "Введи максимальную цифру:\n";
$max = trim(fgets(STDIN));

if (!is_numeric($min) || !is_numeric($max)) {
    die("Нужно ввести целое число!");
}

$b = random_number($min, $max);
echo "Ваша цифра: " . $b;
