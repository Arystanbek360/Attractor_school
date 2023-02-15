<?php
$meteo_station_south = [];
$meteo_station_west = [];
$meteo_station_east = [];
$meteo_station_north = [];

function enter(): int
{
    echo "Enter size of arrays: ";
    $number = trim(fgets(STDIN));
    if (!is_numeric($number)) {
        die("You must be enter number!\n");
    } elseif (is_int($number)) {
        die("You must be enter integer number!\n");
    } elseif ($number < 1) {
        die("You must enter a number not less than 0");
    }
    return $number;
}

function randGenerator(): int
{
    $rand = rand(15, 30);
    return $rand;
}

function autoCompleteTemperatur(): void
{
    global $meteo_station_east, $meteo_station_north, $meteo_station_south, $meteo_station_west;
    $enter = enter();
    for ($i = 0; $i < $enter; $i++) {
        $meteo_station_west[] = randGenerator();
        $meteo_station_south[] = randGenerator();
        $meteo_station_north[] = randGenerator();
        $meteo_station_east[] = randGenerator();
    }
}

function printMeteo(array $arr, string $name): void
{
    echo $name . " = [";
    foreach ($arr as $key => $values) {
        echo $values;
        if ((count($arr) - 1) !== $key) {
            echo ",";
        } else {
            echo "]\n";
        }
    }
}

function printTemperature(): void
{
    global $meteo_station_east, $meteo_station_north, $meteo_station_south, $meteo_station_west;
    echo "Generated arrays of temperatures:\n";
    printMeteo($meteo_station_south, "meteo_station_south");
    printMeteo($meteo_station_east, "meteo_station_east");
    printMeteo($meteo_station_west, "meteo_station_west");
    printMeteo($meteo_station_north, "meteo_station_north");
}

function average(): void
{
    global $meteo_station_east, $meteo_station_north, $meteo_station_south, $meteo_station_west;
    $average = array_merge($meteo_station_north, $meteo_station_east, $meteo_station_south, $meteo_station_west);
    $avr = ((array_sum($average)) / (count($average)));
    $mean = round($avr, 3);
    echo "Average temperature: " . $mean;
}

autoCompleteTemperatur();
printTemperature();
average();
