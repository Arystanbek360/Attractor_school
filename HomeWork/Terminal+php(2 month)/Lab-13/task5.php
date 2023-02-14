<?php
$B = [];
$A = [];
$C = [];

for ($x = 0; $x < 10; $x++) {
    array_push($B, $x);
}

for ($y = 0; $y < 20; $y += 2) {
    array_push($A, $y);
}

for ($i = 0; $i < 10; $i++) {
    $C[$i] = $A[$i] + $B[$i];
}

for ($l = 7; $l < 10; $l++) {
    $last3[] = $C[$l];
}

echo "Array A:\n<";
var_export(implode(",", $A));
echo ">\nArray B:\n<";
var_export(implode(",", $B));
echo ">\nArray C:\n<";
var_export(implode(",", $C));
echo ">\nMAX in array C = " . max($C);
echo "\nMIN of last 3 in array C = " . min($last3);
