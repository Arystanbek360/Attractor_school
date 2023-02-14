<?php

$arr = array();

echo "Enter numeric value for first element:\n";
$arr[0] = trim((fgets(STDIN)));

echo "Enter numeric value for second element:\n";
$arr[1] = trim((fgets(STDIN)));

echo "Enter numeric  value for third element:\n";
$arr[2] = trim((fgets(STDIN)));

echo "Enter key of element for comparison:\n";
$key = trim((fgets(STDIN)));

$res1 = $arr[$key] > $arr[0];
$res2 = $arr[$key] > $arr[1];
$res3 = $arr[$key] > $arr[2];

echo "Result:\n" . "1) " . $arr[$key] . " > " . $arr[0] . " = ";
var_export($res1);
echo  "\n2) " . $arr[$key] . " > " . $arr[1] . " = ";
var_export($res2);
echo  "\n3) " . $arr[$key] . " > " . $arr[2] . " = ";
var_export($res3);
