<?php

function openWsum(): void
{
    $sum = fopen("sum.txt", "w");
    $numbers = fopen("numbers.txt", "r");

    if ($numbers) {
        $numb = explode(" ", fgets($numbers));
        $check = "";
        for ($i = 0; $i < count($numb); $i++) {
            $result = array_sum(str_split($numb[$i]));
            $check .= fwrite($sum, $result);
            $check .= fwrite($sum, " ");
        }
    }

    fclose($sum);
    fclose($numbers);
}

openWsum();
readfile("sum.txt");