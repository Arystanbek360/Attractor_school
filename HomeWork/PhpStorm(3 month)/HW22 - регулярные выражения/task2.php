<?php

function timeEnter(): string
{
    echo "Введите строку которая будет выглядить такого рода (пример :'23:59'):";
    $time = trim(fgets(STDIN));
    return $time;
}

function validate(): void
{
    $time = timeEnter();
    $pattern = '/[0][\d]:[0-5][\d]|[1][\d]:[0-5][\d]|[2][0-3]:[0-5][\d]/m';
    if (preg_match($pattern, $time) == !false) {
        echo "Вы указали коректное время\n";
    } else {
        echo "Ошибка вы ввели не коректный тип времени\n";
    }
}

validate();


