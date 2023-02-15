<?php
$arr = [0.1, -0.1];
function enter(): int
{
    echo "Введите число > или = 2ух: ";
    $enter = trim(fgets(STDIN));
    if (!is_numeric($enter)) {
        die("Введенные данные должны быть цифрой!\n");
    } elseif ($enter < 2) {
        die("Цифра должна быть больше или равно 2ум!\n");
    }
    return $enter;
}

function cal($i): void
{
    global $arr;
    $enter = enter();
    while (true) {
        $i++;
        $sum = 1.1;
        echo "1.1 ";
        if (is_float($i / 2)) {
            echo "+";
            $result = 1 + ($arr[0] * $i);
        } else {
            $result = -1 + ($arr[1] * $i);
        }
        echo $result . " ";
        $sum += $result;
        echo "= " . $sum;
        $arr2[] = range(1, $enter);
    }
}

cal(1);