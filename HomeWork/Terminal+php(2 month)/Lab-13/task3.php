<?php
echo "Сколько отстрелял Гарри:\n";
$first = trim(fgets(STDIN));
echo "Сколько отстрелял Ларри:\n";
$second = trim(fgets(STDIN));

if (!is_numeric($first) || !is_numeric($second)) {
    die("Введенные данные должны быть цифрами!\n");
}

if ($first > 10) {
    die("Гарри настрелял же меньше 10 банок) Врать нельзя Гарри!");
} elseif ($second > 10) {
    die("Ларри настрелял же меньше 10 банок) Врать нельзя Ларри!");
}

$AllShots = $first + $second - 1;

$Garry = $AllShots  - $first;
$Larry = $AllShots - $second;

echo "Общий было сбито банок:" . $AllShots . "\n";
echo "Гарри не дострелял:" . $Garry . "\n";
echo "Ларри не дострелял:" . $Larry;
