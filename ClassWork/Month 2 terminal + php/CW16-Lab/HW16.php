<?php
$actionList = [
    'action-1' => "Начало дня",
    'action-2' => "Поднимаюсь с кровати с левой ноги",
    'action-3' => "Поднимаюсь с кровати с правой ноги",
    'action-4' => "Падаю с кровати",
    'action-5' => "Пробежка по аллее",
    'action-6' => "Физ. зарядка на балконе",
    'action-7' => "Варю крепкий кофе",
    'action-8' => "Готовлю плотный завтрак",
    'action-9' => "Достаю вчерашний салат",
    'action-10' => "Спустило колесо",
    'action-11' => "Добираюсь на работу пешком",
    'action-12' => "Добираюсь на работу на маршрутке",
    'action-13' => "Добираюсь на работу на своем авто",
    'action-14' => "Прихожу вовремя",
    'action-15' => "Опаздываю на работу",
    'action-16' => "Конец"
];
$resultActionList = [];
$previousActionKey = 'action-1';
$conclusion = [];

function chooseVariant(int $maxForFirstVariant, int $maxForSecondVariant): int
{
    $randomValue = rand(1, $maxForSecondVariant);
    if ($randomValue <= $maxForFirstVariant) {
        return 1;
    }
    return 2;
}

function chooseAction($previousActionKey, $f = 0)
{
    global $actionList, $resultActionList, $conclusion;
    $currentAction = $previousActionKey;
    if ($f < 7 || ($currentAction != 'action-16')) {
        switch ($previousActionKey) {
            case 'action-1':
                if (chooseVariant(1, 2) === 1) {
                    $currentAction = 'action-2';
                    $h = 0;
                } else {
                    $currentAction = 'action-3';
                    $h = 0;
                }
                break;
            case 'action-2':
                if (chooseVariant(7, 10) === 1) {
                    $currentAction = 'action-4';
                    $h = -1;
                } else {
                    if (chooseVariant(4, 6) === 1) {
                        $currentAction = 'action-5';
                        $h = +1;
                    } else {
                        $currentAction = 'action-6';
                        $h = 0;
                    }
                }
                break;
            case 'action-3':
                if (chooseVariant(4, 6) === 1) {
                    $currentAction = 'action-5';
                    $h = +1;
                } else {
                    $currentAction = 'action-6';
                    $h = 0;
                }
                break;
            case 'action-4':
                if (chooseVariant(8, 12) === 1) {
                    $currentAction = 'action-7';
                    $h = 0;
                } else {
                    if (chooseVariant(1, 4) === 1) {
                        $currentAction = 'action-8';
                        $h = +1;
                    } else {
                        $currentAction = 'action-9';
                        $h = -1;
                    }
                }
                break;
            case 'action-5':
                if (chooseVariant(8, 12) === 1) {
                    $currentAction = 'action-7';
                    $h = 0;
                } else {
                    if (chooseVariant(1, 4) === 1) {
                        $currentAction = 'action-8';
                        $h = +1;
                    } else {
                        $currentAction = 'action-9';
                        $h = -1;
                    }
                }
                break;
            case 'action-6':
                if (chooseVariant(8, 12) === 1) {
                    $currentAction = 'action-7';
                    $h = 0;
                } else {
                    if (chooseVariant(1, 4) === 1) {
                        $currentAction = 'action-8';
                        $h = +1;
                    } else {
                        $currentAction = 'action-9';
                        $h = -1;
                    }
                }
                break;
            case 'action-7':
                if (chooseVariant(2, 5) === 1) {
                    $currentAction = 'action-10';
                    $h = -1;
                } else {
                    $currentAction = 'action-13';
                    $h = 0;
                }
                break;
            case 'action-8':
                if (chooseVariant(2, 5) === 1) {
                    $currentAction = 'action-10';
                    $h = -1;
                } else {
                    $currentAction = 'action-13';
                    $h = 0;
                }
                break;
            case 'action-9':
                if (chooseVariant(2, 5) === 1) {
                    $currentAction = 'action-10';
                    $h = -1;
                } else {
                    $currentAction = 'action-13';
                    $h = 0;
                }
                break;
            case 'action-10':
                if (chooseVariant(2, 8) === 1) {
                    $currentAction = 'action-11';
                    $h = -1;
                } else {
                    $currentAction = 'action-12';
                    $h = 0;
                }
                break;
            case 'action-11':
                if (chooseVariant(2, 8) === 1) {
                    $currentAction = 'action-14';
                    $h = 0;
                } else {
                    $currentAction = 'action-15';
                    $h = -1;
                }
                break;
            case 'action-12':
                if (chooseVariant(1, 2) === 1) {
                    $currentAction = 'action-14';
                    $h = 0;
                } else {
                    $currentAction = 'action-15';
                    $h = -1;
                }
                break;
            case 'action-13':
                $f++;
                if (chooseVariant(5, 8) === 1) {
                    $currentAction = 'action-14';
                    $h = 0;
                } else {
                    $currentAction = 'action-15';
                    $h = -1;
                }
                break;
            case 'action-14' || 'action-15':
                $currentAction = 'action-16';
                break;
        }
        if ($currentAction && !in_array($currentAction, $resultActionList, true)) {
            $resultActionList[] = $actionList[$currentAction];
        }
        if ($f < 6) {
            $conclusion[] = $h;
        }
        $f++;
        $previousActionKey = $currentAction;
        chooseAction($previousActionKey, $f);
        return $currentAction;
    }
}

function printResultActionList($i = 0)
{
    $long = count($GLOBALS['resultActionList']);
    if ($i < 1) {
        echo sprintf(" %'.s | %'.s", "#", "Действие");
        echo "\n";
        echo sprintf("%'-3.s| %'-35.s", "", "");
        echo "\n";
    }
    if ($i < $long) {
        echo sprintf(" %'.d | %'.s", $i + 1, $GLOBALS['resultActionList'][$i]);
        echo "\n";
        $i++;
        printResultActionList($i);
    }
}

$previousActionKey = chooseAction($previousActionKey);
printResultActionList();

$result = array_sum($conclusion);
echo "\nВ целом день: ";
if ($result < 0) {
    echo "Неудачный";
} elseif ($result > 0) {
    echo "Удачный";
} else {
    echo "Нейтральный";
}
