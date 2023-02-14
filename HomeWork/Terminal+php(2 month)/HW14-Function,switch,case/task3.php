<?php
function printPosition($arr)
{
    echo "[";
    echo $arr['x'] . "," . $arr['y'];
    echo "]";
}

function changePosition($x_offset, $y_offset, $arr)
{
    $x = $arr['x'] + $x_offset;
    $y = $arr['y'] + $y_offset;
    $arr = ['x' => $x, 'y' => $y];
    printPosition($arr);
}

function validate($a)
{
    if (!is_numeric($a)) {
        die("Here you had to enter a number!");
    }
}

$GLOBALS['arr'] = ['x' => rand(500, 1500), 'y' => rand(500, 1500)];

echo "Hello!\n";
echo "Your current position:";
printPosition($arr);
echo "\nEnter direction (w|a|s|d):";
$wasd = trim(fgets(STDIN));
echo "Enter offset:";
$offset = trim(fgets(STDIN));
validate($offset);
echo "Your new position:";

switch ($wasd) {
    case 'w':
        changePosition(0, $offset, $arr);
        break;
    case 's':
        changePosition(0, -$offset, $arr);
        break;
    case 'a':
        changePosition(-$offset, 0,  $arr);
        break;
    case 'd':
        changePosition($offset, 0, $arr);
        break;
    default:
        echo "This letter cannot be used!";
}
