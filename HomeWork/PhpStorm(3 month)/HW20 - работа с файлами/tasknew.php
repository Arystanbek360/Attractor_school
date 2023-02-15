<?php

require "experiment_table.php";
function getExperimentResult(): array
{
    return [round(sin(rand()) * rand(1, 10)), round(cos(rand()) * rand(1, 10))];
}

function checkStart(): bool
{
    echo "Оставьте пустую строку чтобы начать пользоваться программой или введите любое значение чтобы отключить программу: ";
    $enter = trim(fgets(STDIN));
    if ($enter == "") {
        return true;
    } else {
        echo "Эксперемент начался\n";
        return false;
    }
}

function creatWriteExperiment()
{
    $fs = fopen("experiment.txt", "c+");
    if (filesize("experiment.txt") == 0) {
        writeZeroTable();
    }
    return $fs;
}

function changeCoordinates($fs, array $coordinate, int $i): void
{
    $y = $x = 0;
    if ($i <= 100) {
        $result = getExperimentResult();
        $one = $result[0];
        $two = $result[1];
        foreach ($coordinate as $index => $value) {
            if ($one == $value) {
                $x = $index;
            }
            if ($two == $value) {
                $y = $index;
            }
        }
        $position = $y * 89 + $x * 4 + 176 + 6;
        rewind($fs);
        fseek($fs, ftell($fs) + $position);
        $str = explode("|", fgets($fs));
        if ($str[0] >= "999") {
            $checkBit = 999;
        } else {
            $checkBit = (int)$str[0] + 1;
        }
        rewind($fs);
        fseek($fs, ftell($fs) + $position);
        if ($x >= 20) {
            fwrite($fs, sprintf('%3.d', $checkBit));
        } else {
            fwrite($fs, sprintf('%3.d|', $checkBit));
        }
        $i++;
        changeCoordinates($fs, $coordinate, $i);
    }
}

function changeExperiment()
{
    $fs = creatWriteExperiment();

    for ($i = -10; $i <= 10; $i++) {
        $position[] = $i;
    }

    changeCoordinates($fs, $position, 0);
    fclose($fs);
    echo "Эксперемент прошел успешно\n";
}

function recurseTable($bool = true)
{
    $bool = checkStart();
    if ($bool == true) {
        changeExperiment();
        recurseTable($bool);
        die();
    }
}

recurseTable();


