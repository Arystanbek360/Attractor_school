<?php
$result = array();

$index = array_keys($result);
$value = array_values($result);

echo "Enter key for first element: \n";
$index[0] = trim((fgets(STDIN)));
echo "Enter value for first element: \n";
$value[0] = trim((fgets(STDIN)));

echo "Enter key for second element: \n";
$index[1] = trim((fgets(STDIN)));
echo "Enter value for second element: \n";
$value[1] = trim((fgets(STDIN)));

echo "Enter key for third element: \n";
$index[2] = trim((fgets(STDIN)));
echo "Enter value for third element: \n";
$value[2] = trim((fgets(STDIN)));

$result = array_combine($index, $value);

ksort($result);
$result = array_values($result);

echo "Result string: " . $result[0] . " " . $result[1] . " " . $result[2] . "\n";
echo "Result string: {$result[0]} {$result[1]} {$result[2]}";
