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
    'action-16' => "Конец",
];

$resultActionList = [];

$actionLuck = [
    'action-1' => 0,
    'action-2' => 0,
    'action-3' => 0,
    'action-4' => -1,
    'action-5' => 1,
    'action-6' => 1,
    'action-7' => 0,
    'action-8' => 1,
    'action-9' => 0,
    'action-10' => -1,
    'action-11' => -1,
    'action-12' => 0,
    'action-13' => 1,
    'action-14' => 1,
    'action-15' => -1,
    'action-16' => 0,
];
$resultLuck = 0;

function chooseVariant($maxForFirstVariant, $maxForSecondVariant)
{
    return rand(1, $maxForSecondVariant) > $maxForFirstVariant ? 2 : 1;
}

function chooseAction($previousActionKey)
{
    $actionTaken = null;
    switch ($previousActionKey) {
        case 'action-1':
            $actionTaken = chooseVariant(1, 2) == 1 ? 'action-2' : 'action-3';
            break;
        case 'action-2':
            $actionTaken = chooseVariant(7, 10) == 1
                ? 'action-4' : (chooseVariant(4, 6) == 1 ? 'action-5' : 'action-6');
            break;
        case 'action-3':
            $actionTaken = chooseVariant(4, 6) == 1 ? 'action-5' : 'action-6';
            break;
        case 'action-4':
        case 'action-5':
        case 'action-6':
            $actionTaken = chooseVariant(8, 12) == 1
                ? 'action-7' : (chooseVariant(1, 4) == 1 ? 'action-8' : 'action-9');
            break;
        case 'action-7':
        case 'action-8':
        case 'action-9':
            $actionTaken = chooseVariant(2, 5) == 1 ? 'action-10' : 'action-13';
            break;
        case 'action-10':
            $actionTaken = chooseVariant(2, 8) == 1 ? 'action-11' : 'action-12';
            break;
        case 'action-11':
            $actionTaken = chooseVariant(2, 8) == 1 ? 'action-14' : 'action-15';
            break;
        case 'action-12':
            $actionTaken = chooseVariant(1, 2) == 1 ? 'action-14' : 'action-15';
            break;
        case 'action-13':
            $actionTaken = chooseVariant(5, 8) == 1 ? 'action-14' : 'action-15';
            break;
        case 'action-15':
        case 'action-14':
            $actionTaken = 'action-16';
            break;
    }
    $GLOBALS['resultActionList'][] = $GLOBALS['actionList'][$actionTaken];
    $GLOBALS['resultLuck'] += $GLOBALS['actionLuck'][$actionTaken];
    return $actionTaken;
}

function printResultActionList()
{
    print " # | Действие\n";
    print "---|------------------------------------\n";
    printTableRowRecursively();
    print "\n";
    print "В целом день: ";
    if ($GLOBALS['resultLuck'] > 0) {
        print "Удачный";
    } elseif ($GLOBALS['resultLuck'] == 0) {
        print "Нормальный";
    } else {
        print "Неудачный";
    }
}

function printTableRow($number, $action)
{
    print sprintf(" %d | %-20.s\n", $number, $action);
}

function chooseActionRecursively($previousActionKey = 'action-1')
{
    $takenActionKey = chooseAction($previousActionKey);
    if ($takenActionKey == 'action-16') {
        return;
    }
    chooseActionRecursively($takenActionKey);
}

function printTableRowRecursively($counter = 0)
{
    printTableRow($counter + 1, $GLOBALS['resultActionList'][$counter]);
    $counter++;
    if ($counter == count($GLOBALS['resultActionList'])) {
        return;
    }
    printTableRowRecursively($counter);
}

chooseActionRecursively();
printResultActionList();