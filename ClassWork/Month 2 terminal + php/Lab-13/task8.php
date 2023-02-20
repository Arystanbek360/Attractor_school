<?php

echo "Какой у вас возраст(в днях)?:\n";
$ages = trim(fgets(STDIN));

if (!is_numeric($ages)) {
    die("Введенные данные должны быть цифрами!\n");
}

if ($ages % 360 == 0) {
    $year = $ages / 360;
    $month = 0;
    $day = 0;
} elseif ($ages % 360 !== 0) {
    $year = floor($ages / 360);
    if (($ages % 360) % 30 == 0) {
        $month = ($ages % 360) / 30;
        $day = 0;
    } elseif (($ages % 360) % 30 !== 0) {
        $month = floor(($ages % 360) / 30);
        $day = ($ages % 360) % 30;
    }
}
$age = ['years' => $year, 'months' => $month, 'days' => $day];

echo "Ваш возраст:\n";
echo "Years: " . $age['years'] . "; Months: " . $age['months'] . "; Days: " . $age['days'] . ";";
