<?php
$files = [
    ["name" => "doc1.doc",  "size" => 9585658,  "cDate" => [1,  "Sep", 2009]],
    ["name" => "doc2.doc",  "size" => 526564,   "cDate" => [12, "Aug", 2009]],
    ["name" => "img1.png",  "size" => 85548,    "cDate" => [02, "Mar", 2011]],
    ["name" => "img2.jpg",  "size" => 5565822,  "cDate" => [10, "Jun", 2015]],
    ["name" => "music.mp3", "size" => 65541255, "cDate" => [01, "Mar", 2010]]
];

echo sprintf(" %' 20s ", 'File List');
echo "\n\nName      | Size(KByte) | Creation Date\n----------|-------------|---------------\n";

function bitsToKbytes($bits)
{
    $KB = $bits / 1024 / 8;
    return $KB;
}

function printTableRow($row_array)
{
    $GLOBALS['files'][$row_array]["cDate"] = sprintf("%'.02d %-3.10s %'0.4d", $GLOBALS['files'][$row_array]["cDate"][0], $GLOBALS['files'][$row_array]["cDate"][1], $GLOBALS['files'][$row_array]["cDate"][2]);
    echo sprintf("%-9.10s | %11.3f |  %'3.15s", $GLOBALS['files'][$row_array]["name"], bitsToKbytes($GLOBALS['files'][$row_array]["size"]), $GLOBALS['files'][$row_array]["cDate"]);
    echo "\n";
}

function  printTable($f = 0)
{
    printTableRow($f);
    if ($f < 4) {
        $s = $f + 1;
        printTable($s);
    }
    return;
}

function printTotal($totalBits = 0, $i = 0)
{
    if ($i < 5) {
        $s = $i + 1;
        $totalBits = $totalBits + $GLOBALS['files'][$i]["size"];
        printTotal($totalBits, $s);
        return $totalBits;
    }
    echo "----------|-------------|---------------\n";
    echo sprintf("TotalSize:%11.3f", bitsToKbytes($totalBits));
}

printTable();
printTotal();
