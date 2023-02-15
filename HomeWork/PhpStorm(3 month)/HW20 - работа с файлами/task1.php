<?php

function openWrite(): void
{
    $creat = fopen("numbers.txt", "w");
    for ($i = 0; $i < 10; $i++) {
        if ($i !== 9) {
            $rand = rand(1000, 9999) . " ";
        } else {
            $rand = rand(1000, 9999);
        }
        $check = fwrite($creat, $rand);
        if ($check !== false) {
            echo "";
        } else {
            die("Возникли ошибки\n");
        }
    }
    echo "Запись прошла успешно\n";
    fclose($creat);
}

openWrite();
