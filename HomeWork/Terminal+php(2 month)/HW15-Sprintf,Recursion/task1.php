<?php

$items = ["Chocolate", "Cheese", "Milk", "Bread"];
$prices = [3, 15, 4.5, 2.15];
echo " Name     | Price\n----------|--------\n";

function recursion($f = 0)
{
    writeTableRow($f);
    $f++;
    if ($f < 3) {
        recursion($f);
    }
    return;
}

function writeTableRow($s)
{
    echo sprintf("%-9.10s | %.2f", $GLOBALS['items'][$s], $GLOBALS['prices'][$s]);
    echo "\n";
}

recursion();
