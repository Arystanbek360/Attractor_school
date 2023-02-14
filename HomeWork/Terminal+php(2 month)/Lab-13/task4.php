<?php
echo "Граница по оси Х:\n";
$borderX = trim(fgets(STDIN));
echo "Граница по оси У:\n";
$borderY = trim(fgets(STDIN));
echo "Граница дома по оси Х:\n";
$houseX = trim(fgets(STDIN));
echo "Граница дома по оси У:\n";
$houseY = trim(fgets(STDIN));

if (!is_numeric($borderX) || !is_numeric($borderY) || !is_numeric($houseX) || !is_numeric($houseY)) {
    die("Введенные данные должны быть цифрами\n");
}

$coordinates = [
    "borderX" => $borderX,
    "borderY" => $borderY,
    "houseX" => $houseX,
    "houseY" => $houseY
];

echo "Result:\n";

if ($coordinates['borderY'] == $coordinates['houseY']) {
    echo "Border";
} elseif ($coordinates['borderX'] == $coordinates['houseX']) {
    echo "Border";
} elseif ($coordinates['houseX'] < $coordinates['borderX'] && $coordinates['houseY'] < $coordinates['borderY']) {
    echo 'South West';
} elseif ($coordinates['houseX'] > $coordinates['borderX'] && $coordinates['houseY'] < $coordinates['borderY']) {
    echo 'South East';
} elseif ($coordinates['houseX'] < $coordinates['borderX'] && $coordinates['houseY'] > $coordinates['borderY']) {
    echo 'North West';
} elseif ($coordinates['houseX'] > $coordinates['borderX'] && $coordinates['houseY'] > $coordinates['borderY']) {
    echo 'North East';
}
