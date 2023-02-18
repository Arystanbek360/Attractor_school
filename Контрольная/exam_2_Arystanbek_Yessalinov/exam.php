<?php
$dice = [
    "
    ---------
    | # # # |
    |       |
    | # # # |
    ---------
    ", "
    ---------
    | #   # |
    |   #   |
    | #   # |
    ---------
    ", "
    ---------
    | #   # |
    |       |
    | #   # |
    ---------
    ", "
    ---------
    | #     |
    |   #   |
    |     # |
    ---------
    ", "
    ---------
    | #     |
    |       |
    |     # |
    ---------
    ", "
    ---------
    |       |
    |   #   |
    |       |
    ---------
    "
];

$Preidcted = [1];
$DiceResult = [1];
$PointResult = [1];
$user = [];
$computer = [];

function printDice($number): int
{
    switch ($number) {
        case 1:
            echo $GLOBALS['dice'][5];
            break;
        case 2:
            echo $GLOBALS['dice'][4];
            break;
        case 3:
            echo $GLOBALS['dice'][3];
            break;
        case 4:
            echo $GLOBALS['dice'][2];
            break;
        case 5:
            echo $GLOBALS['dice'][1];
            break;
        case 6:
            echo $GLOBALS['dice'][0];
            break;
    }
    return $number;
}

function rollTheDice(): int
{
    $rand = rand(1, 6);
    return $rand;
}

function PrintGame($cycle = 1, $cheatactive = false)
{
    global $user, $computer, $Preidcted, $DiceResult, $PointResult;

    if ($cycle < 2) {
        echo "\n---       Start game      ---\n";
        echo "Do you want to cheat?(Y/N):";
        $cheat = trim(fgets(STDIN));
        if ($cheat == 'y') {
            $cheatactive = true;
        } elseif ($cheat == 'Y') {
            $cheatactive = true;
        } else {
            $cheatactive = false;
        }
    }
    if ($cycle < 7) {
        if ($cycle % 2 !== 0) {
            $noname = 'User';
        } elseif ($cycle % 2 == 0) {
            $noname = 'Computer';
        }
        if ($cycle % 2 !== 0) {
            $predict = enter();
        } elseif ($cycle % 2 == 0) {
            $predict = rollTheDice() + rollTheDice();
            echo "Computer predicted " . $predict . "\n";
        }
        echo $noname . " rolls the dice:";
        if ($cheatactive === true && $cycle % 2 !== 0) {
            if ($predict % 2 !== 0) {
                $numberOne = floor($predict / 2);
            } else {
                $numberOne = $predict / 2;
            }
            $numberTwo = $predict - $numberOne;
            printDice($numberOne);
            printDice($numberTwo);
        } else {
            $numberOne = printDice(rollTheDice());
            $numberTwo = printDice(rollTheDice());
        }


        if ($cycle % 2 !== 0) {
            if ($cheatactive === true) {
                $result = $predict;
            } else {
                $result = $numberOne + $numberTwo;
            }
        } else {
            $result = $numberOne + $numberTwo;
        }

        $point = sumResult($predict, $result);
        echo "\nOn the dice fell " . $result . " points.";
        echo "\nResult is " . $result . "-abs(" . $result . "-" . $predict . ")*2: " . $point . "points\n";
        if ($cycle % 2 !== 0) {
            array_push($user, $point);
        } elseif ($cycle % 2 == 0 && $cycle < 6) {
            array_push($computer, $point);
            echo "\n----------- Current score --------------\n";
            echo "User:      " . array_sum($user) . "points\n";
            echo "Computer:  " . array_sum($computer) . "points\n\n";
            WhoWin();
            echo sprintf("%'-40s \n", "");
        }
        array_push($Preidcted, $predict);
        array_push($DiceResult, $result);
        array_push($PointResult, $point);

        $cycle++;
        PrintGame($cycle, $cheatactive);
    }
    return;
}

function sumResult(int $Predict, int $Result): int
{
    $Conclusion = $Result - abs($Result - $Predict) * 2;
    return $Conclusion;
}

function WhoWin(): void
{
    global $user, $computer;
    $many = array_sum($user) - array_sum($computer);
    if (array_sum($user) > array_sum($computer)) {
        echo "User is ahead by " . abs($many) . " points!\n";
    } elseif (array_sum($user) < array_sum($computer)) {
        echo "Computer is ahead by " . abs($many) . " points!\n";
    } else {
        echo "you have the same score\n";
    }
}

function enter()
{
    echo "Predict the points number (2...12):";
    $Enter = trim(fgets(STDIN));
    if (!is_numeric($Enter)) {
        die("You must be enter Number!");
    }
    return $Enter;
}

function TableResult($row)
{
    $a = "Predicted:";
    $b = "Dice:";
    $c = "Result:";
    global $Preidcted, $DiceResult, $PointResult;
    echo sprintf("%' 7s | {$a}  %' 2d | {$a} %'.d\n", "", $Preidcted[$row], $Preidcted[$row + 1]);
    echo sprintf("  -%s-   | {$b}  %' 7d | {$b} %'.d\n", $row, $DiceResult[$row], $DiceResult[$row + 1]);
    echo sprintf("%' 7s | {$c}  %' 5d | {$c} %'.d\n", "", $PointResult[$row], $PointResult[$row + 1]);
    echo sprintf("%'-7s + %'-14s + %'-14s\n", "", "", "");
}

function printTableResult($i = 1)
{
    global $user, $computer;
    if ($i < 2) {
        echo "\n\n--------------Finish Game-------------------\n";
        echo sprintf(" Round  | %' 15s| %'.s\n", "User ", "Computer");
        echo sprintf("%'-7s + %'-14s + %'-14s\n", "", "", "");
    }
    if ($i < 4) {
        TableResult($i);
        $i++;
        printTableResult($i);
        if ($i == 4) {
            echo sprintf(" Total  | Points: %' 7s| Points: %' 4s\n\n", array_sum($user), array_sum($computer));
            if (array_sum($user) > array_sum($computer)) {
                echo " User win " . (array_sum($user) - array_sum($computer)) . " points more.\n Congratulations!";
            } elseif (array_sum($user) < array_sum($computer)) {
                echo " Computer win " . (array_sum($computer) - array_sum($user)) . " points more.\n Don't be offended next time you'll win!";
            } else {
                echo " you have a draw!\n";
            }
        }
    }
    return;
}

PrintGame();
PrintTableResult();
