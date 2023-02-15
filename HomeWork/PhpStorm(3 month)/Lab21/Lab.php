<?php

function process(): void
{
    $helps = getHelpsData();
    $contacts = getContactsData();

    echo 'Добрый день! Вас приветствует программа "Телефонная книга".' . "\n\n";

    echo "Список контактов которые у вас записаны:\n\n";
    renderList($contacts);

    while (true) {
        garbageCan($contacts);
        showChooseActions(array_keys($helps));
        $action = trim(fgets(STDIN));
        processAction($action, $helps, $contacts);
    }
}

function getHelpsData(): array
{
    $helps = [];
    if (file_exists('help.json')) {
        $helps = file_get_contents('help.json');
        $helps = json_decode($helps, true);
    }
    return $helps;
}


function getContactsData(): array
{
    $contacts = [];
    if (file_exists('contacts.json')) {
        $contacts = file_get_contents('contacts.json');
        $contacts = json_decode($contacts, true);
    }
    if (empty($contacts)) {
        return [];
    }
    return $contacts;
}

function renderList(array &$data, bool $bool = false): void
{
    if (empty($data)) {
        echo "Список контактов пока пуст\n\n";
        return;
    }

    foreach ($data as $key => $item) {
        if (empty($item[0] || empty($item[1]))) {
            unset($data[$key]);
        }
    }

    $firstColumn = getColumnLengthByKey($data, 0);
    $thirdColumn = getColumnLengthByKey($data, 2);

    if ($bool == false) {
        $line = sprintf("%'-{$firstColumn}s-|%'-19s|%'-{$thirdColumn}s-|\n", '', '', '');
        printf("%s|  %-{$firstColumn}s |   %-14s  |   %' {$thirdColumn}s  |\n%s",
            $line, "   Имя", "Номер телефона", "Должность", $line);

        array_walk($data, function ($item) use ($firstColumn, $thirdColumn, $line): void {
            $line1 = $firstColumn;
            $line2 = $thirdColumn;
            printf("|%-{$line1}s|    %-15s| %-{$line2}s|\n%s", $item[0], $item[1], $item[2], $line);
        });
    } elseif ($bool == true) {
        $line = sprintf("%'-3s|%'-{$firstColumn}s|%'-19s|%'-{$thirdColumn}s |\n", '', '', '', '');
        printf("%s № |   %-{$firstColumn}s|   %-14s  |   %' {$thirdColumn}s  |\n%s",
            $line, "  Имя", "Номер телефона", "Должность", $line);

        array_walk($data, function ($item, $key) use ($firstColumn, $thirdColumn, $line): void {
            $line1 = $firstColumn;
            $line2 = $thirdColumn;
            printf(" %-2d|%-{$line1}s|    %-15s| %-{$line2}s|\n%s",
                $key + 1, $item[0], $item[1], $item[2], $line);
        });
    }


    echo "\nВсего контактов: " . count($data) . "\n";
}

function getColumnLengthByKey(array $data, int $key): int
{
    $columnLength = 13;
    array_walk($data, function ($item) use (&$columnLength, $key): void {
        $length = strlen($item[$key]);

        if ($length > $columnLength) {
            $columnLength = $length;
        }
    }
    );
    return $columnLength;
}

function showChooseActions(array $actions): void
{
    printf("\nЧто вы хотите сделать дальше? (%s):", implode("|", $actions));
}

function processAction(string $action, array $helps, array &$contacts): void
{

    if (!array_key_exists($action, $helps)) {
        echo "Incorrect command\n";
        return;
    }
    switch ($action) {
        case'add':
            array_push($contacts, checkNumberInContact($contacts));
            break;
        case'help':
            printHelp($helps);
            break;
        case'edit':
            echo "Какой из контактов вы хотите изменить?\n\n";
            renderList($contacts, true);
            removeRemake($contacts, false);
            break;
        case'remove':
            echo "Какой из контактов вы хотите удалить?\n\n";
            renderList($contacts, true);
            removeRemake($contacts);
            break;
        case'list':
            echo "Список контактов которые у вас записаны:\n\n";
            renderList($contacts);
            break;
        case 'exit':
            file_put_contents('contacts.json', json_encode($contacts));
            die("\nВозвращайтесь поскорее чтобы пополнить список ваших контактов.\n");
        case 'find':
            find($contacts);
            break;
        default:
            echo "Команда не найдена\n";
            break;
    }
}


function printHelp(array $arr): void
{
    echo "\n";
    $line = sprintf("%'-9s |%'-47s\n", "", "");
    echo $line;
    echo sprintf(" %-9s  |   %-47s\n", "Команда", "Что делает");
    echo $line;

    foreach ($arr as $key => $item) {
        echo sprintf("  %-7s |  %-45s\n", $key, $item);
        echo $line;
    }
}

function enterNumber(string $str)
{
    echo "Введите $str имя контакта: ";
    $name = ucfirst(strtolower(trim(fgets(STDIN))));
    echo "Введите $str номер контакта: ";
    $number = trim(fgets(STDIN));
    echo "Введите $str должность: ";
    $job = trim(fgets(STDIN));

    if (!is_numeric($number)) {
        echo "Вы должны ввести сотовый номер\n";
    } elseif (strlen($number) < 10) {
        echo "Сотовый номер состойт из 10 цифр\n";
    } else {
        return [$name, $number, $job];
    }
    echo "Во время записи пройзошла ошибка\n";
}

function checkNumberInContact(array $contacts, string $str = '')
{
    $number = enterNumber($str);
    if (!empty($contacts)) {
        foreach ($contacts as $item) {
            foreach ($item as $value) {
                if ($number[0] == $value) {
                    echo "Такой пользователь уже есть!\n";
                    return [];
                } elseif ($number[1] == $value) {
                    echo "Такой сотовый номер уже введен!\n";
                    return [];
                }
            }
        }
    }
    if (empty($number)) {
        echo "Пройзошли проблемы во время записи в контакты\n\n";
    } elseif (!empty($number)) {
        echo "Контакт успешно добавлен!\n";
        return $number;
    }
}

function removeRemake(array &$data, bool $bool = true): void
{
    $count = count($data);
    echo "Введите порядковый номер контакта (1." . $count . "): ";
    $number = trim(fgets(STDIN));
    if ($number > $count || $number < 1) {
        echo "Такого номера нету";
    }

    if ($bool == true) {
        foreach ($data as $arrayKey => $arr) {
            if ($arrayKey == $number - 1) {
                unset($data[$arrayKey]);
                echo "Контакт успешно удалён!\n\n";
            }
        }
    } elseif ($bool == false) {
        foreach ($data as $arrayKey => $arr) {
            if ($arrayKey == $number - 1) {
                $new = enterNumber('новый');
                $data[$arrayKey] = $new;
                if (!empty($new)) {
                    echo "Контакт успешно обвновлен\n\n";
                }
            }
        }
    }
}

function find($contacts): void
{
    $result = [];
    echo "Введите данные по которым осуществить поиск контакта: ";
    $find = trim(fgets(STDIN));
    foreach ($contacts as $arr) {
        foreach ($arr as $value) {
            if ($find == $value) {
                $result[] = $arr;
            }
        }
    }
    if (empty($result)) {
        echo "Ничего не найдено\n\n";
    } elseif (!empty($result)) {
        renderList($result);
    }
}

function garbageCan(array &$arr): void
{
    foreach ($arr as $arrayKey => $value) {
        if (empty($value)) {
            unset($arr[$arrayKey]);
        }
    }
    $arr = array_values($arr);
}

