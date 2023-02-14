<?php
$experiment = [
    [getExperimentResult(), getExperimentResult(), getExperimentResult()],
    [getExperimentResult(), getExperimentResult(), getExperimentResult()],
    [getExperimentResult(), getExperimentResult(), getExperimentResult()],
];

function getExperimentResult()
{
    return [round(sin(rand()) * rand(1, 10)), round(cos(rand()) * rand(1, 10))];
}

function title()
{
    $long1 = long(0);
    $long2 = long(1);
    $long3 = long(2);
    echo sprintf(" %{$long1}s | %{$long2}s | %{$long3}s ", "st1", "st2", "st3");
    echo "\n";
    echo sprintf(" %'-{$long1}s | %'-{$long2}s | %'-{$long3}s ", "", "", "");
    echo "\n";
}

function printTableRow($row_array)
{
    $arr = formatPosition($row_array);
    $a = $arr[0];
    $b = $arr[1];
    $c = $arr[2];
    $long1 = long(0);
    $long2 = long(1);
    $long3 = long(2);

    echo sprintf(" %{$long1}s | %{$long2}s | %{$long3}s ", $a, $b, $c);
    echo "\n";
}

function  printTable($f = 0)
{
    printTableRow($f);
    if ($f < 2) {
        $s = $f + 1;
        printTable($s);
    }
    return;
}

function formatPosition($position)
{
    return [
        implode(",", $GLOBALS['experiment'][0][$position]),
        implode(",", $GLOBALS['experiment'][1][$position]),
        implode(",", $GLOBALS['experiment'][2][$position]),
    ];
}

function long(int $column): int
{
    $arr1 = implode(",", $GLOBALS['experiment'][$column][0]);
    $arr2 = implode(",", $GLOBALS['experiment'][$column][1]);
    $arr3 = implode(",", $GLOBALS['experiment'][$column][2]);
    $long1 = strlen($arr1);
    $long2 = strlen($arr2);
    $long3 = strlen($arr3);
    if ($long1 >= $long2) {
        if ($long1 >= $long3) {
            return $long1;
        } elseif ($long1 <= $long3) {
            return $long3;
        }
    } elseif ($long2 >= $long3) {
        return $long2;
    } else {
        return $long3;
    }
}

title();
printTable();
