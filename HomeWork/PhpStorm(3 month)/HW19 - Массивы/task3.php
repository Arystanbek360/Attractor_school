<?php
$arr = [0, 1];
function enter(): int
{
    echo "Введи порядковый номер (больше 10): ";
    $enter = trim(fgets(STDIN));
    if (!is_numeric($enter)) {
        die("Вы должны ввести число!\n");
    } elseif ($enter < 10) {
        die("Порядковый номер должен быть не ниже 10!\n");
    }
    return $enter;
}

function showNumber($number): void
{
    global $arr;
    echo "Ваше число в порядковом номере:\n";
    echo "Числа Фибоначчи - это последовательность вида 0,1";
    for ($i = 0; $i <= $number; $i++) {
        $a = array_slice($arr, $i, 2);
        $result = array_sum($a);
        $arr[] = $result;
        echo "," . $result;
        if ($i == $number) {
            echo ". Каждое число является суммой двух предыдущих чисел.\n";
        }
    }
}

showNumber(enter());