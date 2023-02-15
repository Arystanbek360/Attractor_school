<?php

function enter(): int
{
    echo "Введите год от 1900 до 2100: ";
    $year = trim(fgets(STDIN));
    if (!is_numeric($year)) {
        die("Вы должны ввести число\n");
    } elseif (strlen($year) !== 4) {
        die("Год должен состоять из 4 чисел\n");
    }
    return $year;
}

function validate(): void
{
    $year = enter();
    $pattern = '/(^[1]{1}[9]{1}[\d]{2}$|^[2]{1}[0]{1}[\d]{2}$|^[2]{1}[1]{1}[0]{2}$)/m';
    if (preg_match($pattern, $year) == !false) {
        echo "Вы ввели верный год в интервале от 1900-2100\n";
    } else {
        echo "Ошибка вы ввели не верный год!\n";
    }
}

validate();
